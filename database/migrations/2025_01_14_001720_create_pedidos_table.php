<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Id	nombre	email	telefono	problema	imagenes	aceptacion	fv_form_id

        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->integer('id_pedidos')->nullable();
            $table->string('nombre')->nullable();
            $table->string('email')->nullable();
            $table->string('telefono')->nullable();
            $table->longText('problema')->nullable();
            $table->longText('imagenes')->nullable();
            $table->string('aceptacion')->nullable();
            $table->string('lang')->nullable();
            $table->string('fv_form_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
