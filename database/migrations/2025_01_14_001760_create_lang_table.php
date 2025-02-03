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
            $table->text('lang')->nullable();
            $table->text('iso')->nullable();
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
