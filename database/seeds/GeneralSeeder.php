<?php

use App\Category;
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
            'phone'     => '0590 310 035',
            'email'     => 'info@clickantilles.com',
            'logo'     => 'frontend/assets/images/logo.png',
            'footer'    => 'à été créé en 1992. Il y a 2 responsables de Magasin (Grand-Camps et Basse-Terre). Maroquinerie (Sacs, chaussures, accessoires), 100% Cuir, fait main. Ce sont des séries limitées.',
            'facebook'    => 'https://facebook.com/',
            'instagram'    => 'https://www.instagram.com/',
            'twitter'    => 'https://www.twitter.com/',
            'about'    => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'terms'    => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'privacy'    => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'help'    => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'return'    => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        ]);

        Category::create([
            'name' => 'Plage',
            'photo' => 'frontend/assets/images/category/16.png'
        ]);
        Category::create([
            'name' => 'Promotion',
            'photo' => 'frontend/assets/images/category/16.png'
        ]);
        Category::create([
            'name' => 'Maisons',
            'photo' => 'frontend/assets/images/category/16.png'
        ]);
        Category::create([
            'name' => 'Evenements',
            'photo' => 'frontend/assets/images/category/16.png'
        ]);
        Category::create([
            'name' => 'Accessoires',
            'photo' => 'frontend/assets/images/category/16.png'
        ]);
        Category::create([
            'name' => 'Scooter',
            'photo' => 'frontend/assets/images/category/16.png'
        ]);
        Category::create([
            'name' => 'Meubles',
            'photo' => 'frontend/assets/images/category/16.png'
        ]);
        Category::create([
            'name' => 'Luminaires',
            'photo' => 'frontend/assets/images/category/16.png'
        ]);
        Category::create([
            'name' => 'Bebe',
            'photo' => 'frontend/assets/images/category/16.png'
        ]);
    }
}
