<?php

use Illuminate\Database\Seeder;

class ActiveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('actives')->insert([
        	'id' => 1,
            'idUser' =>1,
            'nomActivite' => ' Acrobranche',
            'dateActivite' => ' 2020-01-05',
            'localisation'=>'64290 Bosdarros – Pyrénées-Atlantiques',
        	'descriptionActivite'=>'Aux portes de Pau : 10 kilomètres à peine…. de PAU centre . En famille ou entre amis, découvrez un parc intense en sensations : 110 jeux dans les arbres dès 3 ans sur 14 parcours 100% sécurisés. Tyroliennes à gogo, vélo volant, snow dans les airs, parcours filet et saut de tarzan pour les petits, aire de jeux gonflable Big Jump banana avec saut de 13 mètres, formules anniversaire enfants…… Chalet d’accueil, bar et aire de pique-nique avec vue sur les parcours',
        	'likeActivite'=> 0,
            'url'=>'https://www.aventure-parc.fr/wp-content/uploads/2019/06/velo-bosdarros.jpg',
        ]);
        DB::table('actives')->insert([
            'id' => 2,
            'idUser' => 1,
            'nomActivite' => ' escalade',
            'dateActivite' => ' 2020-01-15',
            'descriptionActivite'=>'Ce mur aux normes internationales est un fantastique espace de pratique de l\'escalade ouvert à tous, débutant, confirmé et expert.
                En effet, le mur UPPA c\'est:
                1200 m2 de surface de grimpe (dont 130 m2 de bloc)
                Des pans verticaux et déversants (mention spéciale à notre arche imposante) offrant des voies jusqu\'à 18m de longueur',
            'likeActivite'=> 0,
            'localisation'=>'Avenue Jean Génèze, 64000 PAU',
            'url'=>'http://www.les3mousquetonsboulazacois.fr/images/2-12-17DSC_0019.jpg',
        ]);
        DB::table('actives')->insert([
            'id' => 3,
            'idUser' => 1,
            'nomActivite' => ' Laser game',
            'dateActivite' => ' 2020-8-15',
            'localisation'=>'Rue d\'Arsonval, 64230 Lescar',
            'descriptionActivite'=>'Le complexe LASER LAND propose un cadre nouvelle génération et unique dans la région.
Un labyrinthe de 400m2 sur plusieurs niveaux où tu te trouves plongé dans un décor digne des meilleurs films de science-fiction ',
            'likeActivite'=> 0,
            'url'=>'https://www.lescar-soleil.com/thumbs/1920x600r/adherents/laser-quest/lescar-soleil-laser-quest-interieur.jpg',
        ]);

        DB::table('actives')->insert([
            'id' => 4,
            'idUser' => 1,
            'nomActivite' => ' Escape game',
            'localisation'=> '28 rue TRAN 64000 Pau',
            'dateActivite' => ' 2020-10-15',
            'descriptionActivite'=>'Vous êtes enfermés et vous devez maintenant trouver le moyen de sortir. Observez tout ce qui vous entoure pour percer les mystères de ces lieux car les indices sont dissimulés.
Soyez créatifs, faites preuve d’esprit d’équipe et de logique. Mais n’oubliez pas d’être rapide car vous ne disposez que de 60 minutes pour fuir. Ce temps de jeu et son espace vous sont exclusivement dédiés lors de votre partie.',
            'likeActivite'=> 0,
            'url'=>'https://static.wixstatic.com/media/a464bf_10cbbe359ffb4ce9accbc0d59b1b44b2~mv2_d_2000_2000_s_2.jpg/v1/fill/w_458,h_458,al_c,q_80,usm_0.66_1.00_0.01/lost%20black%202.webp',
        ]);
    }
}
