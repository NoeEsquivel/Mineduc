<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEscuelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_escuelas', function (Blueprint $table) {
            $table->id();
            $table->string('escuela');
            $table->string('alumno');

            $table->unsignedBigInteger('grado')->nullable();
            $table->string('seccion');
            $table->date('catedratico');
            $table->string('municipio');
            $table->string('departamento');


            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_escuelas');
    }
}
