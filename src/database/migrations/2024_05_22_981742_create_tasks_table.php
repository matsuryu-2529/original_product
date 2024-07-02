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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('task_content', 100);
            $table->date('deadline');
            $table->integer('study_time')->default(0);
            $table->integer('total_study_time')->default(0);
            $table->integer('progress')->default(0);
            $table->boolean('completed')->default(false);
            $table->foreignId('test_id')->constrained('tests');
            $table->foreignId('subject_id')->constrained('subjects');
            $table->foreignId('user_id')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('task');
    }
};
