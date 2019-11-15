<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActiviteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activite', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("nomActivite", 255)->nullable();
            $table->text("descriptionActivite")->nullable();
            $table->date("dateActivite", 255)->nullable();
            $table->decimal("likeActivite");
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
        Schema::dropIfExists('activite');
    }
}
