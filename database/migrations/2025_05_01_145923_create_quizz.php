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
        Schema::create('quizz', function (Blueprint $table) {
            $table->id();
            $table->string('titre');

            $table->unsignedBigInteger('id_matiere');
            $table->unsignedBigInteger('id_profs');
            $table->unsignedBigInteger('id_classes');

            $table->dateTime('publier');

            $table->timestamps();

            // Clés étrangères
            $table->foreign('id_matiere')->references('id')->on('matiere')->onDelete('cascade');
            $table->foreign('id_profs')->references('id')->on('profs')->onDelete('cascade');
            $table->foreign('id_classes')->references('id')->on('classes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quizz');
    }
};
