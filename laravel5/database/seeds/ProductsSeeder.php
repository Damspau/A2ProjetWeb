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
           'photo' => 'https://cadoetik.ch/267161-large_default/kit-crayon-papier-et-marque-page-10-cm-inco.jpg',
           'price' => 9.99
        ]);

        DB::table('products')->insert([
            'name' => 'Goodies2',
            'description' => 'Description2',
            'photo' => 'https://cadoetik.ch/267161-large_default/kit-crayon-papier-et-marque-page-10-cm-inco.jpg',
            'price' => 19.99
        ]);

        DB::table('products')->insert([
            'name' => 'Goodies3',
            'description' => 'Description3',
            'photo' => 'https://cadoetik.ch/267161-large_default/kit-crayon-papier-et-marque-page-10-cm-inco.jpg',
            'price' => 29.99
        ]);
    }
}
