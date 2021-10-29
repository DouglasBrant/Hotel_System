<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableFuncionario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_funcionario', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('funcao');
            $table->string('turno');
            $table->string('alimentacao');
            $table->string('salario');
            $table->string('transporte');
            $table->string('refeicao');
            $table->string('cidade');
            $table->string('endereço');
            $table->string('cpf');
            $table->string('rg');
            $table->string('telefone');
            $table->string('nome');
            $table->string('passaword');
            $table->string('email');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_funcionario');
    }
}
