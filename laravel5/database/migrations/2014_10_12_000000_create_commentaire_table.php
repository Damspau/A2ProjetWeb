 <?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActiviteTable extends Migration
{
    public function up()
    {
        Schema::create('Commentaire', function (Blueprint $table) {
            $table->bigIncrements('idCommentaire');
            $table->integrer('idUser');
            $table->string('contenuCommentaire');
        });
    }
    public function down()
    {
        Schema::dropIfExists('Commentaire');
    }
}
