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
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('caption')->nullable();
            $table->string('category'); // Display Repair, Internal / Logic Board, etc.
            $table->string('image_path')->nullable();
            $table->string('technician')->nullable();
            $table->date('completion_date')->nullable();
            $table->enum('status', ['completed', 'in_progress'])->default('completed');
            $table->enum('visibility', ['public', 'private'])->default('public');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolios');
    }
};
