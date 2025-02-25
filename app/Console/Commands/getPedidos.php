<?php

namespace App\Console\Commands;

use App\Http\Controllers\GetDataController;
use Illuminate\Console\Command;

class getPedidos extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:get-pedidos';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        GetDataController::pedidos();

    }
}
