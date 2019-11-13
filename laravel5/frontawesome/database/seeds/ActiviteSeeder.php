<?php

use Illuminate\Database\Seeder;

class ActiviteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('activite')->insert([
           'nomActivite' => 'Goodies1',
           'descriptionActivite' => 'Description1',
           'dateActivite'=>'01.11.2000',
           'likeActivite'=> 9
        ]);

    }
}
