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
        Schema::create('matiere', function (Blueprint $table) {
            $table->id();
            $table->string('libelle_M');
            $table->unsignedBigInteger('classes_id');
            $table->unsignedBigInteger('cycles_id');
            $table->timestamps();

            $table->foreign('classes_id')->references('id')->on('classes')->onDelete('cascade');
            $table->foreign('cycles_id')->references('id')->on('cycles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matiere');
    }
};
