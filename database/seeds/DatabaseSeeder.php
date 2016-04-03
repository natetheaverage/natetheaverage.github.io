<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{


    protected $toTruncate = [
        'mei_mails',
        'users',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        DB::statement('SET FOREIGN_KEY_CHECKS = 0'); // disable foreign key constraints

        foreach($this->toTruncate as $table){
            DB::table($table)->truncate();
        }

        factory('App\MeiMail', 5)->create();
        //$this->call(UserTableSeeder::class);
        //$this->call(UserTableSeeder::class);

        DB::statement('SET FOREIGN_KEY_CHECKS = 1'); // enable foreign key constraints
        Model::reguard();
    }
}
