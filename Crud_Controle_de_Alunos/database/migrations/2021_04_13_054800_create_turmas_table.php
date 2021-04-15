<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTurmasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turmas', function (Blueprint $table) {
            $table->id();
            $table->string('ano');
            $table->string('nivel');
            $table->string('serie');
            $table->string('turno');
            $table->unsignedBigInteger('escola_id');
            $table->timestamps();
            $table->foreign('escola_id')->references('id')->on('escolas')->onDelete('cascade');
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
        Schema::dropIfExists('turmas');
    }
}
