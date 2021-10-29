<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProduto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_produto', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('produtos');
            $table->string('descricao');
            $table->string('quantidade');
            $table->string('codigo_de_barra');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_produto');
    }
}
