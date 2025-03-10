<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use App\Models\Repairs;
use Illuminate\Http\Request;


class DashboardConroller extends Controller
{
    public function index(Request $request)
    {
        // Obtener el idioma seleccionado (por defecto: 0 - Todos los idiomas)
        $language_id = $request->input('language_id', 0);

        // Lista de idiomas para el combobox
        $languages = [
            0 => 'Todos los idiomas',
            1 => 'Español',
            2 => 'Inglés',
            3 => 'Francés'
        ];

        // Obtener datos de reparaciones con filtro de idioma
        $repairsAll = Repairs::selectRaw('MONTH(created_at) as mes, COUNT(*) as total')
            ->whereYear('created_at', date('Y'))
            ->when($language_id > 0, function($query) use ($language_id) {
                return $query->where('langs_id', $language_id);
            })
            ->groupBy('mes')
            ->get();
        $repairsAll = $repairsAll->pluck('total', 'mes')->toArray();

        // Reparaciones con status_id = 2 y filtro de idioma
        $repairsStatus = Repairs::selectRaw('MONTH(created_at) as mes, COUNT(*) as total')
            ->where('status_id', 2)
            ->whereYear('created_at', date('Y'))
            ->when($language_id > 0, function($query) use ($language_id) {
                return $query->where('langs_id', $language_id);
            })
            ->groupBy('mes')
            ->get();
        $repairsStatus = $repairsStatus->pluck('total', 'mes')->toArray();

        // Asegurar que todos los meses tengan valores
        $monthsData = [];
        for ($i = 1; $i <= 12; $i++) {
            $monthsData['repairsAll'][$i] = $repairsAll[$i] ?? 0;
            $monthsData['repairsStatus'][$i] = $repairsStatus[$i] ?? 0;
        }

        // Convertir a arrays simples para ApexCharts
        $repairsAllData = array_values($monthsData['repairsAll']);
        $repairsStatusData = array_values($monthsData['repairsStatus']);

        // Definir los tipos de items
        $itemTypes = ['Monos', 'Chaquetas', 'Caferacer', 'Guantes', 'Botas', 'Airbags'];
        $itemsData = [];

        // Para cada tipo de item, obtener datos mensuales con filtro de idioma
        foreach ($itemTypes as $itemType) {
            // Todos los pedidos del tipo de item
            $ordersAll = Orders::selectRaw('MONTH(created_at) as mes, COUNT(*) as total')
                ->where('item', $itemType)
                ->whereYear('created_at', date('Y'))
                ->when($language_id > 0, function($query) use ($language_id) {
                    return $query->where('langs_id', $language_id);
                })
                ->groupBy('mes')
                ->get();
            $ordersAllCounts = $ordersAll->pluck('total', 'mes')->toArray();

            // Pedidos con status_id = 2
            $ordersStatus = Orders::selectRaw('MONTH(created_at) as mes, COUNT(*) as total')
                ->where('item', $itemType)
                ->where('status_id', 2)
                ->whereYear('created_at', date('Y'))
                ->when($language_id > 0, function($query) use ($language_id) {
                    return $query->where('langs_id', $language_id);
                })
                ->groupBy('mes')
                ->get();
            $ordersStatusCounts = $ordersStatus->pluck('total', 'mes')->toArray();

            // Asegurar que todos los meses tengan un valor
            $monthlyData = ['all' => [], 'status' => []];
            for ($i = 1; $i <= 12; $i++) {
                $monthlyData['all'][$i] = $ordersAllCounts[$i] ?? 0;
                $monthlyData['status'][$i] = $ordersStatusCounts[$i] ?? 0;
            }

            // Guardar en array con nombre del item como clave
            $itemsData[$itemType] = [
                'all' => array_values($monthlyData['all']),
                'status' => array_values($monthlyData['status'])
            ];
        }

        // Nombres de meses en español
        $months = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];

        return view('dashboard', [
            'repairsAllData' => $repairsAllData,
            'repairsStatusData' => $repairsStatusData,
            'months' => $months,
            'itemsData' => $itemsData,
            'languages' => $languages,
            'language_id' => $language_id
        ]);
    }
}