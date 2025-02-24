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
        Schema::create('estados_productos', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->integer('estado_id');
            $table->integer('producto_id');
            $table->integer('user_id');
            $table->longText('email')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estados_productos');
    }
};
