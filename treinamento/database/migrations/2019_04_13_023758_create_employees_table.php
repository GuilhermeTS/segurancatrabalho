<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->date('data_nascimento');
            $table->tinyInteger('cpf');
            $table->tinyInteger('rg');
            $table->smallInteger('matricula');
            $table->string('email',100);
            $table->string('senha',100);
            $table->string('cargo',50);
            $table->text('atividade_exercida');
            $table->text('exposicao_risco');
            $table->date('data_inicio');
            $table->date('prazo');
            $table->string('cep',8);
            $table->string('rua', 100);
            $table->string('bairro', 50);
            $table->string('cidade', 40);
            $table->string('estado',40);
            $table->char('tipo_logradoro',1);
            $table->string('logradouro',100);
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
        Schema::dropIfExists('employees');
    }
}
