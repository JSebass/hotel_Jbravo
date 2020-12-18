<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factura', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('numero');
            $table->unsignedBigInteger('cliente');
            $table->unsignedBigInteger('formaPago');
            $table->date('entrada');
            $table->date('salida');
           
            
            $table->foreign('numero')->references('id')->on('habitacion');
            $table->foreign('cliente')->references('id')->on('cliente');
            $table->foreign('formaPago')->references('id')->on('formaPago');

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
        Schema::dropIfExists('factura');
    }
}
