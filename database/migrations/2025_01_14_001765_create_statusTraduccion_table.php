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
        Schema::create('status_traducciones', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->foreignId('status_id')->constrained('statuses')->onDelete('cascade');
            $table->foreignId('langs_id')->constrained('langs')->onDelete('cascade');
            $table->string('nombre');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('statuses');
    }
};


