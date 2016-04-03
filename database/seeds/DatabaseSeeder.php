<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        factory('App\MeiMail',5)->create();
        //$this->call(UserTableSeeder::class);
        //$this->call(UserTableSeeder::class);

        Model::reguard();
    }
}
