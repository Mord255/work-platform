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
        Schema::create('postulant', function (Blueprint $table) {
            $table->bigIncrements('id_postulant');
            $table->string('name');
            $table->string('lastname');
            $table->string('gender');
            $table->integer('age');
            $table->unsignedBigInteger('id_rol');
            $table->date('birthdate');
            $table->text('description')->nullable();
            $table->text('ubication')->nullable();
            $table->text('resume')->nullable();
            $table->string('university')->nullable();
            $table->string('academic_degree')->nullable();
            $table->boolean('state')->default(true);
            $table->timestamps();

            $table->foreign('id_rol')->references('id_rol')->on('rol');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('postulant');
    }
};
