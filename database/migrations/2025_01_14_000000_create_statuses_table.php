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
        Schema::create('statuses', function (Blueprint $table) {
            $table->id();
            $table->string('model_name');
            $table->string('color');
            // Template email id nulleable
            $table->foreignId('email_template_id')->nullable()->constrained('email_templates')->onDelete('set null');
            $table->timestamps();
        });

        Schema::create('status_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('status_id')->constrained('statuses')->onDelete('cascade');
            $table->foreignId('langs_id')->constrained('langs')->onDelete('cascade');
            $table->string('name');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('status_translations');
        Schema::dropIfExists('statuses');
    }
};
