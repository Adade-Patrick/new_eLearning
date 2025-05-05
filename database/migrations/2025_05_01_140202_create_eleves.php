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
        Schema::create('eleves', function (Blueprint $table) {
            $table->id();
            $table->date('dateNaissance');
            $table->string('telephone');
            $table->unsignedBigInteger('cycles_id');
            $table->unsignedBigInteger('annee_scolaires_id');
            $table->unsignedBigInteger('classes_id');
            $table->unsignedBigInteger('users_id');

            $table->timestamps();

            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('cycles_id')->references('id')->on('cycles')->onDelete('cascade');
            $table->foreign('annee_scolaires_id')->references('id')->on('annee_scolaires')->onDelete('cascade');
            $table->foreign('classes_id')->references('id')->on('classes')->onDelete('cascade');
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eleves');
    }
};
