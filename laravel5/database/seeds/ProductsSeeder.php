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
          'price' => 2.59,
          'nbrCommandes' => 0
       ]);

       DB::table('products')->insert([
          'name' => 'Goodies2',
          'description' => 'Description2',
          'photo' => 'https://objet-pub-high-tech.com/18225-thickbox_default/support-de-telephone.jpg',
          'price' => 12.99,
          'nbrCommandes' => 0
       ]);
       DB::table('products')->insert([
          'name' => 'Goodies3',
          'description' => 'Description3',
          'photo' => 'https://uploads.europeansourcing.com/products/371/199782/iCircle-DarkBlue03.jpg',
          'price' => 25.99,
          'nbrCommandes' => 0
       ]);
       DB::table('products')->insert([
          'name' => 'Goodies4',
          'description' => 'Description4',
          'photo' => 'https://ae01.alicdn.com/kf/HTB1rNEhcILJ8KJjy0Fnq6AFDpXat/Support-pour-t-l-phone-universel-prise-de-charge-support-pour-t-l-phone-sopport-pour.jpg',
          'price' => 16.89,
          'nbrCommandes' => 0
       ]);
       DB::table('products')->insert([
          'name' => 'Goodies5',
          'description' => 'Description5',
          'photo' => 'https://ae01.alicdn.com/kf/HTB11ORQXsfrK1RkSnb4q6xHRFXaz/Prise-murale-support-pour-t-l-phone-Mobile-Smartphone-support-de-charge-supports-de-support-prise.jpg',
          'price' => 10.00,
          'nbrCommandes' => 0
       ]);
//        DB::table('products')->insert([
//           'name' => 'Goodies6',
//           'description' => 'Description6',
//           'photo' => 'https://www.promoexpand.mx/11707-home_default/boligrafo-holder-d-a2246-d-a2246-articulos-promocionales.jpg',
//           'price' => 5.60,
//           'nbrCommandes' => 0
//        ]);
//
// DB::table('products')->insert([
//           'name' => 'Goodies7',
//           'description' => 'Description7',
//           'photo' => 'https://www.cadeaux-hightech.fr/wp-content/uploads/2017/06/goodies-publicitaire-station-meteo-couleurs-noir-brillant-cadeaux-hightech.jpg',
//           'price' => 39.99,
//           'nbrCommandes' => 0
//        ]);
//
// DB::table('products')->insert([
//           'name' => 'Goodies8',
//           'description' => 'Description8',
//           'photo' => 'https://www.objets-de-communication-responsable.com/wp-content/uploads/2018/12/enceinte-bamboo-x.jpg',
//           'price' => 28.66,
//           'nbrCommandes' => 0
//        ]);
// DB::table('products')->insert([
//           'name' => 'Goodies9',
//           'description' => 'Description9',
//           'photo' => 'https://static3.nordic.pictures/27894310-thickbox_default/micro-usb-kaevoru-kaabel-145149-valge.jpg',
//           'price' => 45.60,
//           'nbrCommandes' => 0
//        ]);
// DB::table('products')->insert([
//           'name' => 'Goodies10',
//           'description' => 'Description10',
//           'photo' => 'https://planet-usb.com/471-large_default/cle-usb-bracelet.jpg',
//           'price' => 15.30,
//           'nbrCommandes' => 0
//        ]);
    }
}
