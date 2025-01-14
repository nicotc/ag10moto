<?php

namespace Nicotc\Datatable;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;
use Nicotc\Datatable\Http\Livewire\Datatable;

// class DatatableServiceProvider extends ServiceProvider
// {
//     public function register()
//     {
//         // Registrar la configuración del paquete
//         $this->mergeConfigFrom(__DIR__ . '/../config/datatable.php', 'datatable');

//         // Registrar el servicio que proporciona el paquete.
//         $this->app->singleton('datatable', function ($app) {
//             return new Datatable;
//         });
//     }

//     public function boot()
//     {
//         $this->loadViewsFrom(__DIR__ . '/../resources/views', 'datatable');

//         // Registrar los componentes de Livewire
//         Livewire::component('datatable', Datatable::class);




//         // Publishing is only necessary when using the CLI.
//         if ($this->app->runningInConsole()) {
//             $this->bootForConsole();
//         }
//     }
//     protected function bootForConsole(): void
//     {
//         // Publicar el archivo de configuración.
//         $this->publishes([
//             __DIR__ . '/../resources/views' => resource_path('views/vendor/datatable'),
//         ], 'datatable.views');
//     }
// }

class DatatableServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Registrar configuración (opcional si tienes un archivo config).
        $this->mergeConfigFrom(__DIR__ . '/../config/datatable.php', 'datatable');

        // Registrar el servicio del paquete (opcional).
        $this->app->singleton('datatable', function ($app) {
            return new Datatable;
        });
    }

    public function boot()
    {
        // Cargar vistas del paquete.
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'datatable');

        // Registrar los componentes de Livewire.
        Livewire::component('datatable', Datatable::class);

        // Configuración adicional para cuando se ejecuta desde la consola.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    protected function bootForConsole(): void
    {
        // Publicar las vistas.
        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/datatable'),
        ], 'datatable-views');
    }
}
