<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
           'name' => 'Goodies1',
           'description' => 'Description1',
           'photo' => 'https://images.fr.shopping.rakuten.com/photo/stylo-pen-ecole-d-ingenieurs-cesi-nancy-972321447_L.jpg',
           'price' => 9.99,
           'nbrCommandes' => 4576867
        ]);

        DB::table('products')->insert([
            'name' => 'Goodies2',
            'description' => 'Description2',
            'photo' => 'https://images-na.ssl-images-amazon.com/images/I/81s7ftF7u2L._SX425_.jpg',
            'price' => 19.99,
            'nbrCommandes' => 988
        ]);

        DB::table('products')->insert([
            'name' => 'Goodies3',
            'description' => 'Description3',
            'photo' => 'https://www.bijoulia.fr/media/catalog/product/cache/2/image/600x600/9df78eab33525d08d6e5fb8d27136e95/p/o/porte_cle_acier_smile_personnalise_1178_1_/Porte-cle-smiley-personnalise-1178-31.jpg',
            'price' => 29.99,
            'nbrCommandes' => 34
        ]);

        DB::table('products')->insert([
            'name' => 'Goodies4',
            'description' => 'Description4',
            'photo' => 'https://www.bijoulia.fr/media/catalog/product/cache/2/image/600x600/9df78eab33525d08d6e5fb8d27136e95/p/o/porte_cle_acier_smile_personnalise_1178_1_/Porte-cle-smiley-personnalise-1178-31.jpg',
            'price' => 39.99,
            'nbrCommandes' => 2
        ]);
    }
}
