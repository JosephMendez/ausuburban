<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserTableSeeder::class);
        
        /**
         * Seeder classes used by Gazetteer
         */
        $this->call(CountryTableSeeder::class);
        $this->call(StateTableSeeder::class);
        $this->call(SuburbTableSeeder::class);
        $this->call(CityTableSeeder::class);
        $this->call(CitySuburbsTableSeeder::class);
    }
}
