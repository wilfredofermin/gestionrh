<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('puesto');
            $table->string('email')->nullable();
            $table->decimal('bono_asignacion',8,2)->defaul(0.00);
            $table->softDeletes();     
            $table->timestamps();

            // Relacion
             $table->integer('supervisor_id')->unsigned();
             $table->foreign('supervisor_id')->references('id')->on('supervisors');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}
