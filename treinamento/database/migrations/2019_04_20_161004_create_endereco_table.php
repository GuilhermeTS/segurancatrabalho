<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnderecoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('endereco', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('cep',8);
            $table->string('rua', 100);
            $table->string('bairro', 50);
            $table->string('cidade', 40);
            $table->string('estado',40);
            $table->char('tipo_logradoro',1);
            $table->string('logradouro',100);
            $table->integer('funcionario_id');
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
        Schema::dropIfExists('endereco');
    }
}
