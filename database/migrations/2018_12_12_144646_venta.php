<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Venta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<< HEAD:database/migrations/2018_12_12_144646_venta.php
        Schema::create('Venta', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->string('Venta')->nullable();
            $table->integer('NumeroFactura')->nullable();
            $table->integer('PrecioTotal')->nullable();
            
=======
        Schema::create('Archivo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Archivo')->nullable();
            $table->unsignedBigInteger('TipoArchivo')->nullable();
            $table->string('URL')->nullable();
>>>>>>> be915838211c301f0db88dabb03da7dd95a9d3de:database/migrations/2018_06_16_180748_archivo.php

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
<<<<<<< HEAD:database/migrations/2018_12_12_144646_venta.php
=======

           /* $table->foreign('TipoArchivo')->references('id')->on('TipoArchivo');*/
            
>>>>>>> be915838211c301f0db88dabb03da7dd95a9d3de:database/migrations/2018_06_16_180748_archivo.php
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Venta');
    }
}
