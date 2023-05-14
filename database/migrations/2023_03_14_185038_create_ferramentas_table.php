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
        Schema::create('ferramentas', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('logo');
            $table->string('url');
            $table->text('descricao');
            $table->string('tag');
            $table->foreignId('grupo_id');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('grupo_id')
                ->references('id')
                ->on('grupos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ferramentas');
    }
};
