<?php

use Illuminate\Database\Seeder;

class CanvasUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('canvas_users')->delete();
        
        \DB::table('canvas_users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'first_name' => 'Nathan',
                'last_name' => 'Leite',
                'display_name' => 'NateTheAverage',
                'role' => 1,
                'url' => 'https://natetheaverage.com',
                'twitter' => 'natetheaverage',
                'facebook' => 'natetheaverage',
                'github' => 'natetheaverage',
                'linkedin' => 'natetheaverage',
                'resume_cv' => '/storage/NathanLeite2016-condensed.odt.pdf',
                'address' => '201 Englewood Pkwy. Unit A Englewood, Co. 80110',
                'city' => 'Denver',
                'country' => 'United States',
                'bio' => 'Bangarang!',
                'job' => 'Fantisist',
                'phone' => '720-560-6882',
                'gender' => 'Male',
                'relationship' => 'Single',
                'birthday' => '1979-08-24',
                'email' => 'natetheaverage@gmail.com',
                'password' => '$2y$10$rhp9zxIWbs/e/HoILQE2Ou7EA8SqRTRW60qF4VgTuNLezCTMM872S',
                'remember_token' => 'CrgoRLZzewq5xMFr1msQXKVkS6O4RGEZb9V3TPvcyndbHaoc6tk1wvV0yNNI',
                'created_at' => '2017-05-21 16:54:22',
                'updated_at' => '2017-05-21 19:00:56',
            ),
        ));
        
        
    }
}
