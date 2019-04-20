<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFornecedorHasTreinamentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fornecedor_has_treinamento', function (Blueprint $table) {
            $table->integer('id', true);
            $table->enum('status', ['Em Andamento', 'Finalizado']);
            $table->boolean('aprovado');
            $table->integer('tentativas');
            $table->integer('treinamento_id');
            $table->integer('funcionario_id')->unique();
            $table->foreign('treinamento_id')->references('id')->on('treinamento');
            $table->foreign('funcionario_id')->references('matricula')->on('funcionario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fornecedor_has_treinamento');
    }
}
