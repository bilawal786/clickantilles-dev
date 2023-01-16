<?php

use App\Category;
use App\SubCategory;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class GeneralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'fname' => 'Admin',
            'lname' => '',
            'email' => 'admin@gmail.com',
            'role' => '0',
            'phone' => '00000000',
            'address' => 'France',
            'city' => 'Guadeloupe',
            'country' => 'France',
            'password' => Hash::make('12345678'),
        ]);
        User::create([
            'fname' => 'User',
            'lname' => '',
            'email' => 'user@gmail.com',
            'role' => '1',
            'phone' => '00000000',
            'address' => 'France',
            'city' => 'Guadeloupe',
            'country' => 'France',
            'password' => Hash::make('12345678'),
        ]);
        User::create([
            'fname' => 'Pro User',
            'lname' => '',
            'email' => 'prouser@gmail.com',
            'role' => '2',
            'phone' => '00000000',
            'address' => 'France',
            'city' => 'Guadeloupe',
            'country' => 'France',
            'password' => Hash::make('12345678'),
        ]);

        \App\Settings::create([
            'sitename'     => 'Click Antilles',
            'address'     => 'Magasin de Basse-Terre',
            'phone1'     => '0590 310 035',
            'phone2'     => '(0600) 874 548',
            'email'     => 'info@clickantilles.com',
            'logo'     => 'frontend/assets/images/logo.png',
            'footer'    => 'A été créé en 1992. Il y a 2 responsables de Magasin (Grand-Camps et Basse-Terre). Maroquinerie (Sacs, chaussures, accessoires), 100% Cuir, fait main. Ce sont des séries limitées.',
            'facebook'    => 'https://facebook.com/',
            'instagram'    => 'https://www.instagram.com/',
            'twitter'    => 'https://www.twitter.com/',
            'utube'    => 'https://www.youtube.com/',
            'about'    => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'terms'    => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'privacy'    => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'help'    => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'return'    => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        ]);

        Category::create([
            'name' => 'Goodies',
            'photo' => 'category-images/01.png'
        ]);
        Category::create([
            'name' => 'Sports & Exterieur',
            'photo' => 'category-images/06.png'
        ]);
        Category::create([
            'name' => 'High Tech',
            'photo' => 'category-images/02.png'
        ]);
        Category::create([
            'name' => 'Maison',
            'photo' => 'category-images/03.png'
        ]);
        Category::create([
            'name' => 'Cusisine',
            'photo' => 'category-images/04.png'
        ]);
        Category::create([
            'name' => 'Mode & Accessories',
            'photo' => 'category-images/05.png'
        ]);
        Category::create([
            'name' => 'Papeterie',
            'photo' => 'category-images/04.png'
        ]);
        Category::create([
            'name' => 'Livres et manuels',
            'photo' => 'category-images/04.png'
        ]);
        Category::create([
            'name' => 'Jeux Video',
            'photo' => 'category-images/04.png'
        ]);
        Category::create([
            'name' => 'Vetements',
            'photo' => 'category-images/07.png'
        ]);
        Category::create([
            'name' => 'Chaussures',
            'photo' => 'category-images/08.png'
        ]);
        Category::create([
            'name' => 'Montres',
            'photo' => 'category-images/09.png'
        ]);
        Category::create([
            'name' => 'Sacs',
            'photo' => 'category-images/10.png'
        ]);
        Category::create([
            'name' => 'Accessoires',
            'photo' => 'category-images/11.png'
        ]);
        Category::create([
            'name' => 'Bagages',
            'photo' => 'category-images/12.png'
        ]);
        SubCategory::create([
            'name' => 'Couettes',
            'category_id' => 4,
            'photo' => 'frontend/assets/images/10.png'
        ]);
        SubCategory::create([
            'name' => 'Bougies',
            'category_id' => 4,
            'photo' => 'frontend/assets/images/11.png'
        ]);
        SubCategory::create([
            'name' => 'Fers a reasser',
            'category_id' => 4,
            'photo' => 'frontend/assets/images/12.png'
        ]);
        SubCategory::create([
            'name' => 'Poubelles',
            'category_id' => 4,
            'photo' => 'frontend/assets/images/13.png'
        ]);
        SubCategory::create([
            'name' => 'Organiseurs',
            'category_id' => 7,
            'photo' => 'frontend/assets/images/14.png'
        ]);
        SubCategory::create([
            'name' => 'Peintures',
            'category_id' => 7,
            'photo' => 'frontend/assets/images/15.png'
        ]);
        SubCategory::create([
            'name' => 'Agrafes',
            'category_id' => 7,
            'photo' => 'frontend/assets/images/16.png'
        ]);
        SubCategory::create([
            'name' => 'Crayons',
            'category_id' => 7,
            'photo' => 'frontend/assets/images/17.png'
        ]);
        SubCategory::create([
            'name' => 'Jeunesse',
            'category_id' => 8,
            'photo' => 'frontend/assets/images/18.png'
        ]);
        SubCategory::create([
            'name' => 'Scolaires',
            'category_id' => 8,
            'photo' => 'frontend/assets/images/19.png'
        ]);
        SubCategory::create([
            'name' => 'Best-Sellers',
            'category_id' => 8,
            'photo' => 'frontend/assets/images/20.png'
        ]);
        SubCategory::create([
            'name' => 'Livres Audio',
            'category_id' => 8,
            'photo' => 'frontend/assets/images/21.png'
        ]);
        SubCategory::create([
            'name' => 'Meilleures Ventes',
            'category_id' => 9,
            'photo' => 'frontend/assets/images/22.png'
        ]);
        SubCategory::create([
            'name' => 'Consoles de Jeux',
            'category_id' => 9,
            'photo' => 'frontend/assets/images/23.png'
        ]);
        SubCategory::create([
            'name' => 'Precommandes',
            'category_id' => 9,
            'photo' => 'frontend/assets/images/24.png'
        ]);
        SubCategory::create([
            'name' => 'Abonnements et cartes prepayees',
            'category_id' => 9,
            'photo' => 'frontend/assets/images/25.png'
        ]);
    }
}
