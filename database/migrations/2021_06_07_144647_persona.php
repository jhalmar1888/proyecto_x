<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Persona extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Persona', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Gerencia')->unsigned()->nullable();
            $table->integer('Rol')->unsigned()->nullable();
            $table->string('ApellidoPaterno',50)->nullable();
            $table->string('ApellidoMaterno',50)->nullable();
            $table->string('Nombres',50);
            $table->string('Persona',650);
            $table->string('Fotografia',250)->nullable();
            $table->integer('Ci')->nullable();
            $table->integer('DepDocId')->nullable();
            $table->integer('Grado')->nullable();
            $table->integer('Arma')->nullable();
            $table->integer('Especialidad')->nullable();
            $table->integer('Cargo')->nullable();
            $table->integer('TipoLicencia')->nullable();
            $table->string('Profesion')->nullable();
            $table->integer('Celular')->nullable();
            $table->string('Sexo',10)->nullable();
            $table->integer('Archivo')->nullable();
            $table->integer('Reparticion')->nullable();
           
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

            $table->foreign('Gerencia')->references('id')->on('Gerencia');//mamani lizet
            $table->foreign('Rol')->references('id')->on('Rol');//ergueta luis
            $table->foreign('Archivo')->references('id')->on('Archivo');//machaca araceli
            $table->foreign('Reparticion')->references('id')->on('Reparticion');// calcina harol
            $table->foreign('DepDocId')->references('id')->on('DepDocId');//ticona javier
            $table->foreign('Arma')->references('id')->on('Arma');// perez pablo
            $table->foreign('Cargo')->references('id')->on('Cargo');//chura
            $table->foreign('Especialidad')->references('id')->on('Especialidad');//gutierrez
            $table->foreign('Grado')->references('id')->on('Grado');//leon rudy 
            $table->foreign('TipoLicencia')->references('id')->on('TipoLicencia');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Persona');
    }
}
