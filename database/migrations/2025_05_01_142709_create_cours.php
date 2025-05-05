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
        Schema::create('cours', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('description');
            $table->string('statut');
            $table->date('date_publication');
            $table->unsignedBigInteger('id_profs');
            $table->unsignedBigInteger('id_matiere');
            $table->timestamps();

            $table->foreign('id_profs')->references('id')->on('profs')->onDelete('cascade');
            $table->foreign('id_matiere')->references('id')->on('matiere')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cours');
    }
};
