<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateMultiDataTable extends Migration
{
    public function up()
    {
        Schema::create('source', function (Blueprint $source) {
            $source->increments('id');
            $source->string('name');
            $source->text('detail');
            $source->timestamps();
        });
    }

/**
 * Reverse the migrations.
 *
 * @return void
 */
public function down()
{
   Schema::connection('mysql2')->dropIfExists('multiData');
}
}