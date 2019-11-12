<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Eloquant extends Migration{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auteurs', function(Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nom', 100)->unique();
        });
        Schema::create('editeurs', function(Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nom', 100)->unique();
        });
        Schema::create('livres', function(Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('titre', 100);
            $table->integer('editeur_id')->unsigned();
            $table->text('description');
        });
        Schema::create('auteur_livre', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('auteur_id')->unsigned();
            $table->integer('livre_id')->unsigned();
        });
        Schema::table('livres', function(Blueprint $table) {
            $table->foreign('editeur_id')->references('id')->on('editeurs')
                        ->onDelete('restrict')
                        ->onUpdate('restrict');
        });
        Schema::table('auteur_livre', function(Blueprint $table) {
            $table->foreign('auteur_id')->references('id')->on('auteurs')
                        ->onDelete('restrict')
                        ->onUpdate('restrict');
        });
        Schema::table('auteur_livre', function(Blueprint $table) {
            $table->foreign('livre_id')->references('id')->on('livres')
                        ->onDelete('restrict')
                        ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('livres', function(Blueprint $table) {
            $table->dropForeign('livres_editeur_id_foreign');
        });
        Schema::table('auteur_livre', function(Blueprint $table) {
            $table->dropForeign('auteur_livre_auteur_id_foreign');
        });
        Schema::table('auteur_livre', function(Blueprint $table) {
            $table->dropForeign('auteur_livre_livre_id_foreign');
        });
        Schema::drop('auteur_livre');
        Schema::drop('livres');
        Schema::drop('auteurs');
        Schema::drop('editeurs');
    }

}