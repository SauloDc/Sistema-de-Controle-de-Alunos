<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->id();
            $table->string('nome')->nullable(false);
            $table->string('telefone')->nullable();
            $table->string('email')->nullable(false);
            $table->datetime('dataNascimento');
            $table->string('sexo')->nullable();
            $table->unsignedBigInteger('escola_id');
            $table->unsignedBigInteger('turma_id')->nullable();
            $table->timestamps();
            $table->foreign('escola_id')->references('id')->on('escolas')->onDelete('cascade');
            $table->foreign('turma_id')->references('id')->on('turmas')->onDelete('cascade');
            $table->softDeletes();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alunos');
    }
}
