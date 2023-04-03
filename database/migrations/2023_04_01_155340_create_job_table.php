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
        Schema::create('job', function (Blueprint $table) {
            $table->bigIncrements('id_job');
            $table->string('title');
            $table->unsignedBigInteger('id_company');
            $table->string('position_company')->nullable();
            $table->text('description')->nullable();
            $table->text('requirements')->nullable();
            $table->text('benefits')->nullable();
            $table->text('additionals')->nullable();
            $table->text('ubication')->nullable();
            $table->string('position_type');
            $table->boolean('state')->default(true);
            $table->timestamps();

            $table->foreign('id_company')->references('id_company')->on('company');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job');
    }
};
