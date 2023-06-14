<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Location::create([


            'trainer_id' => '96',
            'latitude' => '30.1870131756',
            'longitude' => '71.4371797079',

        ]);

        Location::create([


            'trainer_id' => '97',
            'latitude' => '30.181459',
            'longitude' => ' 71.492157',

        ]);

        Location::create([


            'trainer_id' => '98',
            'latitude' => '30.2267',
            'longitude' => '71.4761',

        ]);

        Location::create([


            'trainer_id' => '99',
            'latitude' => '71.5090',
            'longitude' => '71.5090',

        ]);

        Location::create([


            'trainer_id' => '100',
            'latitude' => '30.181459',
            'longitude' => ' 71.492157',

        ]);


        // by pass
        Location::create([


            'trainer_id' => '101',
            'latitude' => '30.181459',
            'longitude' => '71.492157',

        ]);

        // Sardar bazar
        Location::create([


            'trainer_id' => '102',
            'latitude' => '30.1870131756',
            'longitude' => '71.4371797079',

        ]);


        // northern bypass
        Location::create([


            'trainer_id' => '103',
            'latitude' => '30.110752',
            'longitude' => '71.421164',

        ]);


        // bosan road
        Location::create([


            'trainer_id' => '104',
            'latitude' => '30.263864',
            'longitude' => '30.263864',

        ]);


        // gardezi market
        Location::create([


            'trainer_id' => '105',
            'latitude' => '30.223305',
            'longitude' => '71.475203',

        ]);


        // railway
        Location::create([


            'trainer_id' => '106',
            'latitude' => '30.2',
            'longitude' => '71.4167',

        ]);


        // Sardar bazar
        Location::create([


            'trainer_id' => '107',
            'latitude' => '30.1870131756',
            'longitude' => '71.4371797079',

        ]);

        // model town
        Location::create([


            'trainer_id' => '108',
            'latitude' => '31.485722',
            'longitude' => '74.32648689999996',

        ]);

        // northern bypass
        Location::create([


            'trainer_id' => '109',
            'latitude' => '30.110752',
            'longitude' => '71.421164',

        ]);

        // railway
        Location::create([


            'trainer_id' => '110',
            'latitude' => '30.2',
            'longitude' => '71.4167',

        ]);


        // Sardar bazar
        Location::create([


            'trainer_id' => '111',
            'latitude' => '30.1870131756',
            'longitude' => '71.4371797079',

        ]);


    }
}
