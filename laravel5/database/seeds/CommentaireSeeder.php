<?php

use Illuminate\Database\Seeder;

class CommentaireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Commentaire')->insert([
        	'idCommentaire' => 1,
            'idUser' =>1,
            'contenuCommentaire' =>'coucou toi, voici le commentaire pour cette article',
        ]);
    }
}
