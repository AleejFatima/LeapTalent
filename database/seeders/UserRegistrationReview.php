<?php

namespace Database\Seeders;

use App\Models\Registration;
use App\Models\TrainerReview;
use App\Models\Users;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserRegistrationReview extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Users::create([
            'first_name' => 'Huzaifa',
            'last_name' => 'Satar ',
            'user_name' => 'huzaifa889 ',
            'email' => 'huzaifa@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'trainee',
            'phone_number' => '03216324325 ',

            'location' => 'Sadar bazar cantt, Multan ',
            'id_card' => '32642-2345102-2 ',
            'city' => 'Multan ',
            'category' => 'Electrician ',
            'address' => 'Multan ',
        ]);

        Registration::create([
            'trainee_id' => '124',
            'trainer_id' => '97 ',
            'registration_image' => '6173058431685128773.png ',
            'start_date' => '2023-02-26 19:01:16',
            'end_date' => '2023-05-26 19:01:16',
            'status' => '1',
            'seen' => '1',
        ]);

        TrainerReview::create([
            'trainee_id' => '124',
            'trainer_id' => '97 ',
            'reviews' => 'I have Completed my course and happy to be a part of this course.',
        ]);
    }
}
