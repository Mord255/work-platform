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
        Schema::create('job_application', function (Blueprint $table) {
            $table->bigIncrements('id_job_application');
            $table->unsignedBigInteger('id_job');
            $table->unsignedBigInteger('id_postulant');
            $table->text('presentation_postulant')->nullable();
            $table->string('application_status')->default('recibido');
            $table->boolean('state')->default(true);
            $table->timestamps();

            $table->foreign('id_job')->references('id_job')->on('job');
            $table->foreign('id_postulant')->references('id_postulant')->on('postulant');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_application');
    }
};
