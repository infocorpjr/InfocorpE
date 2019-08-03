<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRating extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rating', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char("divulgacao_evento")->default("0");
            $table->char("organizacao_evento")->default("0");
            $table->char("temas_abordados")->default("0");
            $table->char("conhecimento_ministrantes")->default("0");
            $table->char("adeguacao_instalacoes")->default("0");
            $table->longText("obeservacao")->nullable();
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
        Schema::dropIfExists('rating');
    }
}
