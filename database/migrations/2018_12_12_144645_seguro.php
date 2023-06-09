<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Seguro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<< HEAD:database/migrations/2018_12_12_144645_seguro.php
        Schema::create('Seguro', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Seguro')->nullable();
            $table->string('TipoSeguro', 25)->nullable();
=======
        Schema::create('Sexo', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Num')->unsigned()->nullable();
            $table->string('Sexo', 250)->nullable();
>>>>>>> be915838211c301f0db88dabb03da7dd95a9d3de:database/migrations/2018_12_12_144647_sexo.php

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
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Seguro');
    }
}
