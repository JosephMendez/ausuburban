<?php

use Illuminate\Database\Seeder;

class StateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->insert([
            [
                "code" => strtoupper("ACT"),
                "name" => strtoupper("Australian Capital Territory"),
                "active" => 1,
                "country_code" => "AU"
            ],
            [
                "code" => strtoupper("NSW"),
                "name" => strtoupper("New South Wales"),
                "active" => 1,
                "country_code" => "AU"
            ],
            [
                "code" => strtoupper("QLD"),
                "name" => strtoupper("Queensland"),
                "active" => 1,
                "country_code" => "AU"
            ],
            [
                "code" => strtoupper("SA"),
                "name" => strtoupper("South Australia"),
                "active" => 1,
                "country_code" => "AU"
            ],
            [
                "code" => strtoupper("TAS"),
                "name" => strtoupper("Tasmania"),
                "active" => 1,
                "country_code" => "AU"
            ],
            [
                "code" => strtoupper("VIC"),
                "name" => strtoupper("Victoria"),
                "active" => 1,
                "country_code" => "AU"
            ],
            [
                "code" => strtoupper("WA"),
                "name" => strtoupper("Western Australia"),
                "active" => 1,
                "country_code" => "AU"
            ],
            [
                "code" => strtoupper("NT"),
                "name" => strtoupper("Northern Territory"),
                "active" => 1,
                "country_code" => "AU"
            ]
        ]);

        DB::table('states')->insert([
            [ 
                "code" => strtoupper("HA"),
                "name" => strtoupper("Haa Alif"),
                "active" => 1,
                "country_code" => "MV"
            ],
            [ 
                "code" => strtoupper("HDh"),
                "name" => strtoupper("Haa Dhaalu"),
                "active" => 1,
                "country_code" => "MV"
            ],
            [ 
                "code" => strtoupper("Sh"),
                "name" => strtoupper("Shaviyani"),
                "active" => 1,
                "country_code" => "MV"
            ],
            [ 
                "code" => strtoupper("N"),
                "name" => strtoupper("Noonu"),
                "active" => 1,
                "country_code" => "MV"
            ],
            [ 
                "code" => strtoupper("R"),
                "name" => strtoupper("Raa"),
                "active" => 1,
                "country_code" => "MV"
            ],
            [ 
                "code" => strtoupper("B"),
                "name" => strtoupper("Baa"),
                "active" => 1,
                "country_code" => "MV"
            ],
            [ 
                "code" => strtoupper("Lh"),
                "name" => strtoupper("Lhaviyani"),
                "active" => 1,
                "country_code" => "MV"
            ],
            [ 
                "code" => strtoupper("K"),
                "name" => strtoupper("Kaafu"),
                "active" => 1,
                "country_code" => "MV"
            ],
            [ 
                "code" => strtoupper("AA"),
                "name" => strtoupper("Alif Alif"),
                "active" => 1,
                "country_code" => "MV"
            ],
            [ 
                "code" => strtoupper("Adh"),
                "name" => strtoupper("Alif Dhaal"),
                "active" => 1,
                "country_code" => "MV"
            ],
            [ 
                "code" => strtoupper("V"),
                "name" => strtoupper("Vaavu"),
                "active" => 1,
                "country_code" => "MV"
            ],
            [ 
                "code" => strtoupper("M"),
                "name" => strtoupper("Meemu"),
                "active" => 1,
                "country_code" => "MV"
            ],
            [ 
                "code" => strtoupper("F"),
                "name" => strtoupper("Faafu"),
                "active" => 1,
                "country_code" => "MV"
            ],
            [ 
                "code" => strtoupper("Dh"),
                "name" => strtoupper("Dhaalu"),
                "active" => 1,
                "country_code" => "MV"
            ],
            [ 
                "code" => strtoupper("Th"),
                "name" => strtoupper("Thaa"),
                "active" => 1,
                "country_code" => "MV"
            ],
            [ 
                "code" => strtoupper("L"),
                "name" => strtoupper("Laamu"),
                "active" => 1,
                "country_code" => "MV"
            ],
            [ 
                "code" => strtoupper("GA"),
                "name" => strtoupper("Gaafu Alif"),
                "active" => 1,
                "country_code" => "MV"
            ],
            [ 
                "code" => strtoupper("GDh"),
                "name" => strtoupper("Gaafu Dhaalu"),
                "active" => 1,
                "country_code" => "MV"
            ],
            [ 
                "code" => strtoupper("Gn"),
                "name" => strtoupper("Gnaviyani"),
                "active" => 1,
                "country_code" => "MV"
            ],
            [ 
                "code" => strtoupper("S"),
                "name" => strtoupper("Seenu"),
                "active" => 1,
                "country_code" => "MV"
            ],
            [ 
                "code" => strtoupper("Male'"),
                "name" => strtoupper("Male'"),
                "active" => 1,
                "country_code" => "MV"
            ]
        ]);
    }
}
