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

        Schema::create('langs', function (Blueprint $table) {
            $table->id();
            $table->string('lang')->unique();
            $table->string('iso')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('langs');
    }
};
