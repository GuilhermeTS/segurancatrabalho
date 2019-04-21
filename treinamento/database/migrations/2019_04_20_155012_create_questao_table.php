<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questao', function (Blueprint $table) {
            $table->integer('id', true);
            $table->mediumText('pergunta');
            $table->mediumText('alternativa_a');
            $table->mediumText('alternativa_b');
            $table->mediumText('alternativa_c');
            $table->enum('resposta', ['a', 'b', 'c']);
            $table->integer('treinamento_id')->unique();
            $table->foreign('treinamento_id')->references('id')->on('treinamento');
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
        Schema::dropIfExists('questao');
    }
}
