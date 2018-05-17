<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserSocialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_socials', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('user_id')->unsined();//Esse unsined é pra sempre que for fazer uma referencia a uma chave estrangeira que é um inteiro precisa ser colocado esse unsined para não bugar a referência
            $table->string('social_network');
            $table->string('social_id');
            $table->string('social_email');
            $table->string('social_avatar');

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users'); //Eu tenho uma chave estrangeira user_id que faz referencia ao campo id que é a chave primária da tabela users!!!
            $table->foreign('social_email')->references('email')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('user_socials', function (Blueprint $table) {
        $table->dropForeign('user_socials_user_id_foreign');
        $table->dropForeign('user_socials_social_email_foreign');//Estou deletando a relação que esta tabela tem com outras tabelas para aí sim poder deletar a tabela
    )}

        Schema::dropIfExists('user_socials');//aqui é feito o delete a tabela de fato
    }
}
