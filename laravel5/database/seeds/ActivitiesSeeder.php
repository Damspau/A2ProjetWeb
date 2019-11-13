<?php

use Illuminate\Database\Seeder;

class ActivitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('activities')->insert([
           'name' => 'Activities1',
           'description' => 'Description1',
           'photo' => 'https://images.fr.shopping.rakuten.com/photo/stylo-pen-ecole-d-ingenieurs-cesi-nancy-972321447_L.jpg',
           'like' => 9
        ]);

        DB::table('activities')->insert([
            'name' => 'Activities2',
            'description' => 'Description2',
            'photo' => 'https://images-na.ssl-images-amazon.com/images/I/81s7ftF7u2L._SX425_.jpg',
            'like' => 19
        ]);

        DB::table('activities')->insert([
            'name' => 'Activities3',
            'description' => 'Description3',
            'photo' => 'https://www.bijoulia.fr/media/catalog/product/cache/2/image/600x600/9df78eab33525d08d6e5fb8d27136e95/p/o/porte_cle_acier_smile_personnalise_1178_1_/Porte-cle-smiley-personnalise-1178-31.jpg',
            'like' => 29
        ]);
    }
}
