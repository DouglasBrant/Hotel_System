<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableReservas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_reservas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('DataEntrada');
            $table->string('DataSaida');
            $table->string('CafeDaManha');
            $table->string('lazer');
            $table->string('Itinerarios');
            $table->string('frigobar');
            $table->string('FormaDePagamento');;

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_reservas');
    }
}
