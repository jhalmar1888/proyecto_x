<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Reparticion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Reparticion', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Reparticion')->nullable();
            $table->string('Codigo')->nullable();
            $table->string('Responsable')->nullable();
            $table->string('Descripcion')->nullable();
            $table->integer('DepDocId')->nullable();
            $table->integer('Lugar')->nullable();
            $table->double('Latitud')->nullable();
            $table->double('Longitud')->nullable();
            $table->integer('TipoReparticion')->nullable();
            $table->integer('UnidadSup')->nullable();
            $table->integer('UnidadSupParte')->nullable();

            $table->nullableTimestamps();
            $table->SoftDeletes();
            $table->string('CreatorUserName', 250)->nullable();
            $table->string('CreatorFullUserName', 250)->nullable();
            $table->string('CreatorIP', 250)->nullable();
            $table->string('UpdaterUserName', 250)->nullable();
            $table->string('UpdaterFullUserName', 250)->nullable();
            $table->string('UpdaterIP', 250)->nullable();
            $table->string('DeleterUserName', 250)->nullable();
            $table->string('DeleterFullUserName', 250)->nullable();
            $table->string('DeleterIP', 250)->nullable();

            $table->foreign('TipoReparticion')->references('id')->on('TipoReparticion');
            $table->foreign('UnidadSup')->references('id')->on('Reparticion');
            $table->foreign('UnidadSupParte')->references('id')->on('Reparticion');
           
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Reparticion');
    }
}
