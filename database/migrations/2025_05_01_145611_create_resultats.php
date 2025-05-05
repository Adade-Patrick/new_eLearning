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
        Schema::create('resultats', function (Blueprint $table) {
            $table->id('idResultat');

            $table->unsignedBigInteger('id_ileves');
            $table->unsignedBigInteger('id_matieres');
            $table->unsignedBigInteger('id_evaluation');

            $table->decimal('note')->nullable();
            $table->integer('classement');
            $table->string('appreciation');

            $table->timestamps();

            $table->foreign('id_ileves')->references('id')->on('eleves')->onDelete('cascade');
            $table->foreign('id_matieres')->references('id')->on('matiere')->onDelete('cascade');
            $table->foreign('id_evaluation')->references('id')->on('evaluations')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resultats');
    }
};
