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
        	'nomActivite' => ' Goodies1',
        	'descriptionActivite'=>'usqjydhkqjd',
        	'likeActivite'=> 0,
        ]);
    }
}
