<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_usuario', function (Blueprint $table) {
            $table->id();
            $table->string('nomeUsuario');
            $table->string('senhaUsuario');
            $table->string('emailUsuario');
            $table->date('dataNascUsuario');
            $table->string('generoUsuario');
            $table->string('fotoUsuario');
            $table->float('alturaUsuario');
            $table->float('pesoUsuario');
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
        Schema::dropIfExists('tb_usuario');
    }
};
