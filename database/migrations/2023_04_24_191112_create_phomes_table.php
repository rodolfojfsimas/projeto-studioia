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
        Schema::create('phomes', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('programas');
            $table->string('urlvideo');
            $table->text('content');
            $table->string('data');
            $table->string('imagem');
            $table->string('resumo');
            $table->softDeletes();
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
        Schema::dropIfExists('phomes');
    }
};
