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
        DB::table('users')->insert([
            'name' => str_random(10),
            'email' => 'test@example.com',
            'password' => app('hash')->make('secret'),
        ]);


        DB::table('person')->insert([
           'location' => 'Rzeszów',
            'phone' => '12341234',
            'email' => 'vcard@example.com',
            'nick' => 'vcard',
            'surname' => 'example',
            'firstname' => 'vcard'
        ]);

    }
}