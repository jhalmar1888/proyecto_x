<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cliente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Cliente', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->string('Cliente')->nullable();
            $table->unsignedBigInteger('Vehiculo')->nullable();
            $table->unsignedBigInteger('FormaPago')->nullable();
            $table->unsignedBigInteger('Cotizacion')->nullable();

            $table->string('ApellidoPaterno',50)->nullable();
            $table->string('ApellidoMaterno',50)->nullable();
            $table->string('Nombres',50);
            $table->integer('Ci')->nullable();
            $table->string('Direccion',50)->nullable();
            $table->integer('Celular')->nullable();
            $table->string('Sexo',10)->nullable();
            
           
            /* credenciales de acceso al sistema */
            $table->string('email')->unique()->nullable();
            $table->string('password')->nullable();
            $table->boolean('Activo')->default(false);
            $table->string('TokenLogin')->nullable();
            $table->rememberToken();

            $table->string('api_token', 80)
                ->unique()
                ->nullable()
                ->default(null); 

            /* campos para login con Office365 */
            $table->datetime('UltimoInicioSesion')->nullable();
            $table->string('SocialLogin', 50)->nullable();
            $table->string('SocialLoginId', 150)->nullable();
            $table->string('Avatar', 250)->nullable();

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

<<<<<<< HEAD:database/migrations/2018_12_12_144648_cliente.php
            $table->foreign('Vehiculo')->references('id')->on('Vehiculo');
            $table->foreign('FormaPago')->references('id')->on('FormaPago');
            $table->foreign('Cotizacion')->references('id')->on('Cotizacion');
           
=======

           /* $table->foreign('Gerencia')->references('id')->on('Gerencia');//mamani lizet

/*
            $table->foreign('Gerencia')->references('id')->on('Gerencia');//mamani lizet

            $table->foreign('Rol')->references('id')->on('Rol');//ergueta luis
            $table->foreign('Archivo')->references('id')->on('Archivo');//machaca araceli
            $table->foreign('Reparticion')->references('id')->on('Reparticion');// calcina harol
            $table->foreign('DepDocId')->references('id')->on('DepDocId');//ticona javier
            $table->foreign('Arma')->references('id')->on('Arma');// perez pablo
            $table->foreign('Cargo')->references('id')->on('Cargo');//chura
            $table->foreign('Especialidad')->references('id')->on('Especialidad');//gutierrez
            $table->foreign('Grado')->references('id')->on('Grado');//leon rudy 

            $table->foreign('TipoLicencia')->references('id')->on('TipoLicencia');*/


            $table->foreign('TipoLicencia')->references('id')->on('TipoLicencia');
*/
>>>>>>> be915838211c301f0db88dabb03da7dd95a9d3de:database/migrations/2021_06_07_144647_persona.php

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Cliente');
    }
}
