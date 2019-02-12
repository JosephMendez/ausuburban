# Gazetteer

[![Latest Stable Version](https://poser.pugx.org/subbe/gazetteer/v/stable)](https://packagist.org/packages/subbe/gazetteer)
[![Total Downloads](https://poser.pugx.org/subbe/gazetteer/downloads)](https://packagist.org/packages/subbe/gazetteer)
[![Latest Unstable Version](https://poser.pugx.org/subbe/gazetteer/v/unstable)](https://packagist.org/packages/subbe/gazetteer)
[![License](https://poser.pugx.org/subbe/gazetteer/license)](https://packagist.org/packages/subbe/gazetteer)

A package build on Laravel 5 which provides a list of all the the Countries with their states and suburbs

*Countries available right now:-*
- *Australia*
- *Maldives*

## Install
1- `composer require josephmmendez/gazetteer`

Open the file `config\app.php`

Add the following line to the providers array

`Subbe\Gazetteer\GazetteerServiceProvider::class,`


and this to the aliases array

`'Gazetteer' => Subbe\Gazetteer\Facades\GazetteerFacade::class,`


2- `php artisan vendor:publish`

Running this command will publish the migration and seed files to your application's 'migrations' and 'seeds' folder.

Update your `DatabaseSeeder.php` file found in your `database/seeds` folder and add the following to it.

- `$this->call(CountryTableSeeder::class);`

- `$this->call(StateTableSeeder::class);`

- `$this->call(SuburbTableSeeder::class);`

- `$this->call(MaldiveIslandsTableSeeder::class);`

Now run

3- `composer dump-autload`

4- `php artisan migrate`

This will add the 'countries', 'states', and 'suburbs' table to your database.

5- `php artisan db:seed`

Populate the tables created.

### Usage

- `Gazetteer::countries()` -> returns a collection of available countries
- `Gazetteer::countries($country_code)` -> returns an instance of the requested country (searched by country code)
- `Gazetteer::countries($country_name)` -> returns an instance of the requested country (searched by country name)
- `Gazetteer::states($country_code)` -> returns a collection of states for a given country (searched by country code)
- `Gazetteer::states($country_name)` -> returns a collection of states for a given country (searched by country name)
- `Gazetteer::suburbs($country, $states)` -> returns a collection of states for a given country (searched by country name)
- `Gazetteer::suburb($input)` -> returns an instance of a suburb for a given postcode (searched by postcode)
- `Gazetteer::suburb($input)` -> returns an instance of a suburb for a given suburb name (searched by suburb name)
