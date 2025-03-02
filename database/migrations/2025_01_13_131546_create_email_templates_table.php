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
        Schema::create('email_templates', function (Blueprint $table) {
            $table->id();
            $table->string('model_name');
            $table->string('name')->unique();
            $table->timestamps();
        });

        Schema::create('email_template_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('email_template_id')->constrained('email_templates')->onDelete('cascade');
            $table->foreignId('langs_id')->constrained('langs')->onDelete('cascade');
            $table->string('subject');
            $table->longText('body');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('email_template_translations');
        Schema::dropIfExists('email_templates');
    }
};
