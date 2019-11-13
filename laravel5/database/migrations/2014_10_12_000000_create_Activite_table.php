 <?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActiviteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actives', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integrer('idUser');
            $table->string('nomActivite');
            $table->date('dateActivite');
            $table->string('descriptionActivite');
            $table->varchar('localisation');
            $table->varchar('url');
            $table->decimal('likeActivite');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actives');
    }
}
