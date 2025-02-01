<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\GetDataController;

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
