<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Users;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Users::create([
            'first_name' => 'Fahad',
            'last_name' => 'Rehman ',
            'user_name' => 'Fahad11 ',
            'email' => 'fahad@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'trainer ',
            'phone_number' => '03216324325 ',
            'shop_number' => 'C114 ',
            'location' => 'Sadar bazar cantt, Multan ',
            'id_card' => '32642-2345102-2 ',
            'city' => 'Multan ',
            'trainer_role' => 'Electrician ',
            'address' => 'Multan ',
        ]);

        Users::create([
            'first_name' => 'Ali  ',
            'last_name' => 'Khan ',
            'user_name' => 'Ali12 ',
            'email' => 'ali@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'trainer ',
            'phone_number' => '03341487100 ',
            'shop_number' => 'A110 ',
            'location' => 'Railway Road, Multan ',
            'id_card' => '32678-3246004-4',
            'city' => 'Multan ',
            'trainer_role' => 'Electrician ',
            'address' => 'Multan ',
        ]);

        Users::create([
            'first_name' => 'Hamza ',
            'last_name' => 'Sheikh ',
            'user_name' => 'Hamza87 ',
            'email' => 'hamza@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'Mechanic ',
            'phone_number' => '03113615436 ',
            'shop_number' => 'D101 ',
            'location' => 'Gardezi market, Multan ',
            'id_card' => '32571-3456113-4',
            'city' => 'Multan ',
            'trainer_role' => 'Mechanic ',
            'address' => 'Multan ',
        ]);

        Users::create([
            'first_name' => 'Abdullah ',
            'last_name' => 'Rauf ',
            'user_name' => 'Abdullah22 ',
            'email' => 'abdullah@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'trainer ',
            'phone_number' => '03330376220 ',
            'shop_number' => 'A222 ',
            'location' => 'Vehari chowk, Multan ',
            'id_card' => '32788-3257223-5 ',
            'city' => 'Multan ',
            'trainer_role' => 'Mechanic ',
            'address' => 'Multan ',
        ]);

        Users::create([
            'first_name' => 'Zain ',
            'last_name' => 'Khalid ',
            'user_name' => 'Khalid ',
            'email' => 'zain@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'trainer ',
            'phone_number' => '03008637386 ',
            'shop_number' => 'A341 ',
            'location' => 'Railway Road, Multan ',
            'id_card' => '32571-3456113-4 ',
            'city' => 'Multan ',
            'trainer_role' => 'Chef ',
            'address' => 'Multan ',
        ]);

        Users::create([
            'first_name' => 'Haris ',
            'last_name' => 'Ahsan ',
            'user_name' => 'Haris44 ',
            'email' => 'haris@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'trainer ',
            'phone_number' => '03410379420 ',
            'shop_number' => 'B240 ',
            'location' => 'Bahawalpur Bypass, Multan ',
            'id_card' => '32788-3257223-5 ',
            'city' => 'Multan ',
            'trainer_role' => 'Chef ',
            'address' => 'Multan ',
        ]);

        Users::create([


            'first_name' => 'Rizwan',
            'last_name' => 'Adil ',
            'user_name' => 'Rizwan99 ',
            'email' => 'rizwan@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'trainer ',
            'phone_number' => '03324736536 ',
            'shop_number' => 'E98 ',
            'location' => 'Sadar bazar cantt ',
            'id_card' => '33682-3577243-6 ',
            'city' => 'Multan ',
            'trainer_role' => 'Tailor ',
            'address' => 'Multan ',
        ]);

        Users::create([

            'first_name' => 'Farhan',
            'last_name' => 'Khan ',
            'user_name' => 'Farhan39 ',
            'email' => 'farhan@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'trainer ',
            'phone_number' => '03330376220 ',
            'shop_number' => 'C114 ',
            'location' => 'A76	Northern Bypass, Multan',
            'id_card' => '33679-3368113-9 ',
            'city' => 'Multan ',
            'trainer_role' => 'Tailor ',
            'address' => 'Multan ',
        ]);

        Users::create([


            'first_name' => 'Zeeshan',
            'last_name' => 'Haider ',
            'user_name' => 'Zeeshan114 ',
            'email' => 'zeeshan@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'trainer ',
            'phone_number' => '03337547636 ',
            'shop_number' => 'D248 ',
            'location' => '	Bosan Road, Multan ',
            'id_card' => '31794-3686241-7',
            'city' => 'Multan ',
            'trainer_role' => 'Barber ',
            'address' => 'Multan ',
        ]);

        Users::create([

            'first_name' => 'Ibrahim',
            'last_name' => 'Rashid ',
            'user_name' => 'Ibrahim02 ',
            'email' => 'ibrahim@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'trainer ',
            'phone_number' => '03330376220 ',
            'shop_number' => 'C114 ',
            'location' => 'A66	Gardezi market, Multan ',
            'id_card' => '32989-3279223-1 ',
            'city' => 'Multan ',
            'trainer_role' => 'Barber ',
            'address' => 'Multan ',
        ]);


        Users::create([


            'first_name' => 'Yousaf',
            'last_name' => 'Ali ',
            'user_name' => 'Yousaf113 ',
            'email' => 'yousaf@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'trainer ',
            'phone_number' => '03118659016 ',
            'shop_number' => 'B211 ',
            'location' => 'Railway Road, Multan ',
            'id_card' => '32996-3266341-9 ',
            'city' => 'Multan ',
            'trainer_role' => 'Artist ',
            'address' => 'Multan ',
        ]);

        Users::create([


            'first_name' => 'M.',
            'last_name' => 'Usman ',
            'user_name' => 'Usman011 ',
            'email' => 'usman@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'trainer ',
            'phone_number' => '03317222101 ',
            'shop_number' => 'C141 ',
            'location' => 'Sadar Bazar Cantt, Multan ',
            'id_card' => '33889-3230123-4 ',
            'city' => 'Multan ',
            'trainer_role' => 'Artist ',
            'address' => 'Multan ',
        ]);

        Users::create([



            'first_name' => 'Faizan',
            'last_name' => 'Bilal ',
            'user_name' => 'Faizan ',
            'email' => 'faizan@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'trainer ',
            'phone_number' => '03337196791 ',
            'shop_number' => 'E678 ',
            'location' => 'Model Town, Multan ',
            'id_card' => '32778-3255541-1 ',
            'city' => 'Multan ',
            'trainer_role' => 'Gardener ',
            'address' => 'Multan ',
        ]);

        Users::create([

            'first_name' => 'Rauf',
            'last_name' => 'Abdullah ',
            'user_name' => 'Rauf011 ',
            'email' => 'rauf@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'trainer ',
            'phone_number' => '03317222101 ',
            'shop_number' => 'C100 ',
            'location' => 'Northern Bypass, Multan',
            'id_card' => '33446-3200113-5',
            'city' => 'Multan ',
            'trainer_role' => 'Gardener ',
            'address' => 'Multan ',
        ]);




        // TRAINEE HERE

        //     Users::create([
        //         'first_name' => 'Arham',
        //         'last_name' => 'Rehman ',
        //         'user_name' => 'Arham11 ',
        //         'email' => 'arham@gmail.com',
        //         'password' => Hash::make('12345678'),
        //         'role' => 'trainee ',
        //         'phone_number' => '03216324325 ',
        //         'shop_number' => 'C114 ',
        //         'location' => 'Sadar bazar cantt, Multan ',
        //         'id_card' => '32642-2345102-2 ',
        //         'city' => 'Multan ',
        //         'category' => 'Electrician ',
        //         'address' => 'Multan ',
        //     ]);

        //     Users::create([
        //         'first_name' => 'Usama',
        //         'last_name' => 'Khan ',
        //         'user_name' => 'usama11 ',
        //         'email' => 'usama@gmail.com',
        //         'password' => Hash::make('12345678'),
        //         'role' => 'trainee ',
        //         'phone_number' => '03216324325 ',
        //         'shop_number' => 'C114 ',
        //         'location' => 'Sadar bazar cantt, Multan ',
        //         'id_card' => '32642-2345102-2 ',
        //         'city' => 'Multan ',
        //         'category' => 'Electrician ',
        //         'address' => 'Multan ',
        //     ]);




        //     Users::create([
        //         'first_name' => 'Abbas',
        //         'last_name' => 'Akram ',
        //         'user_name' => 'Abass11 ',
        //         'email' => 'abaas@gmail.com',
        //         'password' => Hash::make('12345678'),
        //         'role' => 'trainee ',
        //         'phone_number' => '03216324325 ',
        //         'shop_number' => 'C114 ',
        //         'location' => 'Sadar bazar cantt, Multan ',
        //         'id_card' => '32642-2345102-2 ',
        //         'city' => 'Multan ',
        //         'category' => 'Plumber ',
        //         'address' => 'Multan ',
        //     ]);

        //     Users::create([
        //         'first_name' => 'Usman',
        //         'last_name' => 'Khan ',
        //         'user_name' => 'usman11 ',
        //         'email' => 'usman@gmail.com',
        //         'password' => Hash::make('12345678'),
        //         'role' => 'trainee ',
        //         'phone_number' => '03216324325 ',
        //         'shop_number' => 'C114 ',
        //         'location' => 'Sadar bazar cantt, Multan ',
        //         'id_card' => '32642-2345102-2 ',
        //         'city' => 'Multan ',
        //         'category' => 'Plumber ',
        //         'address' => 'Multan ',
        //     ]);


        //     Users::create([
        //         'first_name' => 'Shahid',
        //         'last_name' => 'Akram ',
        //         'user_name' => 'Shahid223 ',
        //         'email' => 'shahid@gmail.com',
        //         'password' => Hash::make('12345678'),
        //         'role' => 'trainee ',
        //         'phone_number' => '03216324325 ',
        //         'shop_number' => 'C114 ',
        //         'location' => 'Sadar bazar cantt, Multan ',
        //         'id_card' => '32642-2345102-2 ',
        //         'city' => 'Multan ',
        //         'category' => 'Mechanic ',
        //         'address' => 'Multan ',
        //     ]);

        //     Users::create([
        //         'first_name' => 'Abrar',
        //         'last_name' => 'Khan ',
        //         'user_name' => 'Abrar ',
        //         'email' => 'abrar@gmail.com',
        //         'password' => Hash::make('12345678'),
        //         'role' => 'trainee ',
        //         'phone_number' => '03216324325 ',
        //         'shop_number' => 'C114 ',
        //         'location' => 'Sadar bazar cantt, Multan ',
        //         'id_card' => '32642-2345102-2 ',
        //         'city' => 'Multan ',
        //         'category' => 'Mechanic ',
        //         'address' => 'Multan ',
        //     ]);


        //     Users::create([
        //         'first_name' => 'Choudry',
        //         'last_name' => 'Hamza ',
        //         'user_name' => 'Hamza112233 ',
        //         'email' => 'hamza120@gmail.com',
        //         'password' => Hash::make('12345678'),
        //         'role' => 'trainee ',
        //         'phone_number' => '03216324325 ',
        //         'shop_number' => 'C114 ',
        //         'location' => 'Sadar bazar cantt, Multan ',
        //         'id_card' => '32642-2345102-2 ',
        //         'city' => 'Multan ',
        //         'category' => 'Artist ',
        //         'address' => 'Multan ',
        //     ]);

        //     Users::create([
        //         'first_name' => 'Tarik',
        //         'last_name' => 'Ali ',
        //         'user_name' => 'tarik889 ',
        //         'email' => 'tarik@gmail.com',
        //         'password' => Hash::make('12345678'),
        //         'role' => 'trainee ',
        //         'phone_number' => '03216324325 ',
        //         'shop_number' => 'C114 ',
        //         'location' => 'Sadar bazar cantt, Multan ',
        //         'id_card' => '32642-2345102-2 ',
        //         'city' => 'Multan ',
        //         'category' => 'Artist ',
        //         'address' => 'Multan ',
        //     ]);
    }
}
