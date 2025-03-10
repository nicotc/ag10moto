<x-layout>
    <x-slot:scripts>
    <script type="module">
        // onReady
        document.addEventListener('DOMContentLoaded', function() {
            // Código JS aquí


        // Datos desde el backend
        var repairsAllData = <?php echo json_encode($repairsAllData); ?>;
        var repairsStatusData = <?php echo json_encode($repairsStatusData); ?>;
        var months = <?php echo json_encode($months); ?>;
        var itemsData = <?php echo json_encode($itemsData); ?>;

        // Objeto para almacenar todos los gráficos
        var charts = {};

        // Detectar si estamos en modo oscuro
        function isDarkMode() {
            // Ajusta la lógica según cómo manejes el modo oscuro
            // Ejemplo: si tu HTML usa la clase "dark-style" en <html> cuando está en oscuro:
            return document.documentElement.classList.contains('dark-style');
        }

        // Colores según el tema
        function getChartColors() {
            return isDarkMode() ? {
                text: '#ffffff',
                background: '#2b2c40',
                columnColor: '#696cff',
                lineColor: '#03c3ec',
                gridColor: '#444564',
                legend: '#ffffff'
            } : {
                text: '#566a7f',
                background: '#ffffff',
                columnColor: '#696cff',
                lineColor: '#03c3ec',
                gridColor: '#eceef1',
                legend: '#566a7f'
            };
        }

        // Función para aplicar el tema a las opciones de un gráfico
        function applyThemeToChartOptions(options) {
            const colors = getChartColors();

            // Aseguramos que las propiedades existan antes de usarlas
            options.chart = options.chart || {};
            options.chart.background = colors.background;

            options.title = options.title || {};
            options.title.style = { color: colors.text };

            options.xaxis = options.xaxis || {};
            options.xaxis.labels = options.xaxis.labels || {};
            options.xaxis.labels.style = { colors: colors.text };

            // Asegurarnos de que yaxis sea un array
            options.yaxis = options.yaxis || [];
            if (!Array.isArray(options.yaxis)) {
                options.yaxis = [options.yaxis];
            }
            options.yaxis.forEach(axis => {
                axis.labels = axis.labels || {};
                axis.labels.style = { colors: colors.text };
                axis.title = axis.title || {};
                axis.title.style = { color: colors.text };
            });

            options.grid = options.grid || {};
            options.grid.borderColor = colors.gridColor;

            // Si hay al menos 2 series, aplicamos colores
            if (options.series && options.series.length >= 2) {
                options.series[0].color = colors.columnColor;
                options.series[1].color = colors.lineColor;
            }

            // Ajuste de la leyenda (texto) en función del tema
            options.legend = options.legend || {};
            options.legend.labels = options.legend.labels || {};
            options.legend.labels.colors = colors.text;

            return options;
        }

        // Opciones base para el gráfico de reparaciones
        var optionsRepairs = {
            series: [
                {
                    name: 'Solicitudes',
                    type: 'column',
                    data: repairsAllData
                },
                {
                    name: 'Aprobadas',
                    type: 'line',
                    data: repairsStatusData
                }
            ],
            chart: {
                height: 350,
                type: 'line',
                toolbar: {
                    show: true,
                    tools: {
                        download: true,
                        selection: true,
                        zoom: true,
                        zoomin: true,
                        zoomout: true,
                        pan: true,
                        reset: true
                    }
                }
            },
            stroke: {
                width: [0, 4]
            },
            title: {
                text: 'Reparaciones'
            },
            dataLabels: {
                enabled: true,
                enabledOnSeries: [1],
                style: {
                    fontWeight: 'bold'
                }
            },
            labels: months,
            yaxis: [
                {
                    title: {
                        text: 'Solicitudes'
                    }
                },
                {
                    opposite: true,
                    title: {
                        text: 'Aprobadas'
                    }
                }
            ]
        };

        // Aplica el tema antes de renderizar
        optionsRepairs = applyThemeToChartOptions(optionsRepairs);

        // Render del gráfico de reparaciones
        charts["reparaciones"] = new ApexCharts(document.querySelector("#reparaciones"), optionsRepairs);
        charts["reparaciones"].render().then(() => {
            // Forzamos un resize tras un breve retardo para evitar el "montado"
            setTimeout(() => {
                charts["reparaciones"].resize();
            }, 100);
        });

        // Crear y renderizar un gráfico para cada tipo de item
        function createItemChart(itemName) {
            var optionsItem = {
                series: [
                    {
                        name: 'Total',
                        type: 'column',
                        data: itemsData[itemName].all
                    },
                    {
                        name: 'Aprobados',
                        type: 'line',
                        data: itemsData[itemName].status
                    }
                ],
                chart: {
                    height: 350,
                    type: 'line',
                    toolbar: {
                        show: true,
                        tools: {
                            download: true,
                            selection: true,
                            zoom: true,
                            zoomin: true,
                            zoomout: true,
                            pan: true,
                            reset: true
                        }
                    }
                },
                stroke: {
                    width: [0, 4]
                },
                title: {
                    text: 'Pedidos de ' + itemName
                },
                dataLabels: {
                    enabled: true,
                    enabledOnSeries: [1],
                    style: {
                        fontWeight: 'bold'
                    }
                },
                labels: months,
                yaxis: [
                    {
                        title: {
                            text: 'Total'
                        }
                    },
                    {
                        opposite: true,
                        title: {
                            text: 'Aprobados'
                        }
                    }
                ]
            };

            // Aplica el tema
            optionsItem = applyThemeToChartOptions(optionsItem);

            // Render
            var elementId = "#" + itemName.toLowerCase();
            charts[itemName.toLowerCase()] = new ApexCharts(document.querySelector(elementId), optionsItem);
            charts[itemName.toLowerCase()].render().then(() => {
                // Forzamos un resize tras un breve retardo
                setTimeout(() => {
                    charts[itemName.toLowerCase()].resize();
                }, 100);
            });
        }

        // Inicializar gráficos de items
        Object.keys(itemsData).forEach(function(itemName) {
            createItemChart(itemName);
        });

        // Mostrar / ocultar contenedores según el tipo de gráfico seleccionado
        function showSelectedChart() {
            var selectedChart = document.getElementById('chart_type').value;
            document.querySelectorAll('.chart-container').forEach(function(container) {
                container.style.display = 'none';
            });
            document.getElementById('container-' + selectedChart).style.display = 'block';
        }
        document.getElementById('chart_type').addEventListener('change', showSelectedChart);
        // Mostrar el primer gráfico por defecto
        showSelectedChart();

        // Observar cambios de tema para re-renderizar los gráficos
        function updateChartsOnThemeChange() {
            const observer = new MutationObserver(function(mutations) {
                mutations.forEach(function(mutation) {
                    if (
                        mutation.attributeName === 'class' &&
                        (mutation.target.classList.contains('dark-style') ||
                         mutation.target.classList.contains('light-style'))
                    ) {
                        // Destruir todos los gráficos
                        Object.keys(charts).forEach(function(chartId) {
                            charts[chartId].destroy();
                        });

                        // Re-crear el gráfico de reparaciones con el tema actualizado
                        optionsRepairs = applyThemeToChartOptions(optionsRepairs);
                        charts["reparaciones"] = new ApexCharts(document.querySelector("#reparaciones"), optionsRepairs);
                        charts["reparaciones"].render().then(() => {
                            setTimeout(() => {
                                charts["reparaciones"].resize();
                            }, 100);
                        });

                        // Re-crear cada gráfico de item
                        Object.keys(itemsData).forEach(function(itemName) {
                            createItemChart(itemName);
                        });
                    }
                });
            });

            // Observa cambios en la etiqueta <html> para detectar cambio de tema
            observer.observe(document.documentElement, { attributes: true });
        }
        updateChartsOnThemeChange();
    });
    </script>
    </x-slot:scripts>

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4 breadcrumb-wrapper">
            <span class="text-muted fw-light">Dashboard</span>
        </h4>

        <div class="mb-4 row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <form method="GET" action="{{ route('dashboard') }}" id="language-form">
                            <div class="mb-3">
                                <label for="language_id" class="form-label">Filtrar por idioma:</label>
                                <select class="form-select" id="language_id" name="language_id" onchange="this.form.submit()">
                                    @foreach($languages as $id => $name)
                                        <option value="{{ $id }}" {{ $language_id == $id ? 'selected' : '' }}>
                                            {{ $name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="chart_type" class="form-label">Tipo de gráfico:</label>
                            <select class="form-select" id="chart_type">
                                <option value="reparaciones">Reparaciones</option>
                                @foreach(array_keys($itemsData) as $itemName)
                                    <option value="{{ strtolower($itemName) }}">Pedidos de {{ $itemName }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-4 row"></div>

        <!-- Contenedor para Reparaciones -->
        <div id="container-reparaciones" class="chart-container row gy-4">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div id="reparaciones" style="height: 400px;"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contenedores para cada item -->
        @foreach(array_keys($itemsData) as $itemName)
            <div id="container-{{ strtolower($itemName) }}" class="chart-container row gy-4" style="display: none;">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div id="{{ strtolower($itemName) }}" style="height: 400px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>
