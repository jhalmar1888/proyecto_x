<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Vehiculo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Vehiculo', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->string('Vehiculo')->nullable();
            $table->unsignedBigInteger('Venta')->nullable();
            $table->unsignedBigInteger('Proveedor')->nullable();
            $table->unsignedBigInteger('Asesor')->nullable();
            $table->unsignedBigInteger('Seguro')->nullable();


            $table->integer('Precio')->unsigned()->nullable();
            $table->string('Modelo', 50)->nullable();
            $table->string('Marca',50)->nullable();
            $table->integer('Anio')->nullable();
            $table->string('Tipo',50)->nullable();
            $table->integer('Kilometraje')->nullable();
            $table->string('Categoria',50)->nullable();

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


            $table->foreign('Venta')->references('id')->on('Venta');
            $table->foreign('Proveedor')->references('id')->on('Proveedor');
            $table->foreign('Asesor')->references('id')->on('Asesor');
            $table->foreign('Seguro')->references('id')->on('Seguro');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Vehiculo');
    }
}
