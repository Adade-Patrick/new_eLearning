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
        Schema::create('questions', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_quizz')->nullable();
            $table->unsignedBigInteger('id_evaluation')->nullable();

            $table->decimal('points');
            $table->text('reponse')->nullable();

            $table->timestamps();

            // Clés étrangères
            $table->foreign('id_quizz')->references('id')->on('quizz')->onDelete('cascade');
            $table->foreign('id_evaluation')->references('id')->on('evaluations')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
