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

        Schema::create('repairs', function (Blueprint $table) {
            $table->id();
            $table->integer('id_repairs')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->longText('details')->nullable();
            $table->longText('images')->nullable();
            $table->foreignId('langs_id')->constrained('langs')->onDelete('cascade');
            $table->string('fv_form_id')->nullable();
            $table->foreignId('status_id')->constrained('statuses')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('repairs');
    }
};
