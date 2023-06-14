<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\Users::factory(10)->create();
        $this->call(UserSeeder::class);
        $this->call(TraineeSeeder::class);
        // DB::table('users')->insert([
        //     'first_name' => 'Fahad',
        //     'last_name' => 'Rehman ',
        //     'user_name' => 'Fahad11 ',
        //     'email' => '@gmail.com',
        //     'password' => Hash::make('password'),
        //     'role' => ' ',
        //     'phone_number' => '03216324325 ',
        //     'shop_number' => 'C114 ',
        //     'location' => 'Sadar bazar cantt, Multan ',
        //     'id_card' => '32642-2345102-2 ',
        //     'city' => 'Multan ',
        //     'trainer_role' => 'trainer ',
        //     'address' => 'Multan ',


        // ]);
    }
}
