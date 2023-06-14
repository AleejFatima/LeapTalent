<?php

namespace Database\Seeders;

use App\Models\Users;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class TraineeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // TRAINEE HERE

            Users::create([
                'first_name' => 'Arham',
                'last_name' => 'Rehman ',
                'user_name' => 'Arham11 ',
                'email' => 'arham@gmail.com',
                'password' => Hash::make('12345678'),
                'role' => 'trainee ',
                'phone_number' => '03216324325 ',
                'shop_number' => 'C114 ',
                'location' => 'Sadar bazar cantt, Multan ',
                'id_card' => '32642-2345102-2 ',
                'city' => 'Multan ',
                'category' => 'Electrician ',
                'address' => 'Multan ',
            ]);

            Users::create([
                'first_name' => 'Usama',
                'last_name' => 'Khan ',
                'user_name' => 'usama11 ',
                'email' => 'usama@gmail.com',
                'password' => Hash::make('12345678'),
                'role' => 'trainee ',
                'phone_number' => '03216324325 ',
                'shop_number' => 'C114 ',
                'location' => 'Sadar bazar cantt, Multan ',
                'id_card' => '32642-2345102-2 ',
                'city' => 'Multan ',
                'category' => 'Electrician ',
                'address' => 'Multan ',
            ]);




            Users::create([
                'first_name' => 'Abbas',
                'last_name' => 'Akram ',
                'user_name' => 'Abass11 ',
                'email' => 'abaas@gmail.com',
                'password' => Hash::make('12345678'),
                'role' => 'trainee ',
                'phone_number' => '03216324325 ',
                'shop_number' => 'C114 ',
                'location' => 'Sadar bazar cantt, Multan ',
                'id_card' => '32642-2345102-2 ',
                'city' => 'Multan ',
                'category' => 'Plumber ',
                'address' => 'Multan ',
            ]);

            Users::create([
                'first_name' => 'Usman',
                'last_name' => 'Khan ',
                'user_name' => 'usman11 ',
                'email' => 'usman@gmail.com',
                'password' => Hash::make('12345678'),
                'role' => 'trainee ',
                'phone_number' => '03216324325 ',
                'shop_number' => 'C114 ',
                'location' => 'Sadar bazar cantt, Multan ',
                'id_card' => '32642-2345102-2 ',
                'city' => 'Multan ',
                'category' => 'Plumber ',
                'address' => 'Multan ',
            ]);


            Users::create([
                'first_name' => 'Shahid',
                'last_name' => 'Akram ',
                'user_name' => 'Shahid223 ',
                'email' => 'shahid@gmail.com',
                'password' => Hash::make('12345678'),
                'role' => 'trainee ',
                'phone_number' => '03216324325 ',
                'shop_number' => 'C114 ',
                'location' => 'Sadar bazar cantt, Multan ',
                'id_card' => '32642-2345102-2 ',
                'city' => 'Multan ',
                'category' => 'Mechanic ',
                'address' => 'Multan ',
            ]);

            Users::create([
                'first_name' => 'Abrar',
                'last_name' => 'Khan ',
                'user_name' => 'Abrar ',
                'email' => 'abrar@gmail.com',
                'password' => Hash::make('12345678'),
                'role' => 'trainee ',
                'phone_number' => '03216324325 ',
                'shop_number' => 'C114 ',
                'location' => 'Sadar bazar cantt, Multan ',
                'id_card' => '32642-2345102-2 ',
                'city' => 'Multan ',
                'category' => 'Mechanic ',
                'address' => 'Multan ',
            ]);


            Users::create([
                'first_name' => 'Choudry',
                'last_name' => 'Hamza ',
                'user_name' => 'Hamza112233 ',
                'email' => 'hamza120@gmail.com',
                'password' => Hash::make('12345678'),
                'role' => 'trainee ',
                'phone_number' => '03216324325 ',
                'shop_number' => 'C114 ',
                'location' => 'Sadar bazar cantt, Multan ',
                'id_card' => '32642-2345102-2 ',
                'city' => 'Multan ',
                'category' => 'Artist ',
                'address' => 'Multan ',
            ]);

            Users::create([
                'first_name' => 'Tarik',
                'last_name' => 'Ali ',
                'user_name' => 'tarik889 ',
                'email' => 'tarik@gmail.com',
                'password' => Hash::make('12345678'),
                'role' => 'trainee ',
                'phone_number' => '03216324325 ',
                'shop_number' => 'C114 ',
                'location' => 'Sadar bazar cantt, Multan ',
                'id_card' => '32642-2345102-2 ',
                'city' => 'Multan ',
                'category' => 'Artist ',
                'address' => 'Multan ',
            ]);
    }
}
