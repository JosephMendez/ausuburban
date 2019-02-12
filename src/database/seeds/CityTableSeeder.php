<?php

use Illuminate\Database\Seeder;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            [ "name" => "City of Brisbane" ],
            [ "name" => "City of Gold Coast" ],
            [ "name" => "Moreton Bay Region" ],
            [ "name" => "Sunshine Coast Region" ],
            [ "name" => "City of Blacktown" ],
            [ "name" => "City of Logan" ],
            [ "name" => "City of Casey" ],
            [ "name" => "City of Greater Geelong" ],
            [ "name" => "Sutherland Shire" ],
            [ "name" => "City of Stirling" ],
            [ "name" => "City of Wollongong" ],
            [ "name" => "City of Lake Macquarie" ],
            [ "name" => "City of Fairfield" ],
            [ "name" => "City of Brimbank" ],
            [ "name" => "City of Bankstown" ],
            [ "name" => "City of Liverpool" ],
            [ "name" => "City of Penrith" ],
            [ "name" => "City of Townsville" ],
            [ "name" => "The Hills Shire" ],
            [ "name" => "City of Sydney" ],
            [ "name" => "City of Monash" ],
            [ "name" => "City of Hume" ],
            [ "name" => "City of Parramatta" ],
            [ "name" => "City of Gosford" ],
            [ "name" => "City of Wyndham" ]
        ]);
    }
}
