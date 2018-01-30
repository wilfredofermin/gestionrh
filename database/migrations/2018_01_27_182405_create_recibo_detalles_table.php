<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReciboDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recibo_detalles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cantidad')->default(0);
            $table->decimal('subtotal',8,2)->default(0.00);
            $table->timestamps();

              // Relacion
             $table->integer('recibo_id')->unsigned();
             $table->foreign('recibo_id')->references('id')->on('recibos');
            // Relacion
             $table->integer('bono_id')->unsigned();
             $table->foreign('bono_id')->references('id')->on('bonos');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recibo_detalles');
    }
}
