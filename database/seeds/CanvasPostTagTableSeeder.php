<?php

use Illuminate\Database\Seeder;

class CanvasPostTagTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('canvas_post_tag')->delete();
        
        \DB::table('canvas_post_tag')->insert(array (
            0 => 
            array (
                'post_id' => 2,
                'tag_id' => 5,
                'created_at' => '2017-05-22 01:56:06',
                'updated_at' => '2017-05-22 01:56:06',
            ),
            1 => 
            array (
                'post_id' => 3,
                'tag_id' => 8,
                'created_at' => '2017-05-24 08:48:39',
                'updated_at' => '2017-05-24 08:48:39',
            ),
            2 => 
            array (
                'post_id' => 3,
                'tag_id' => 11,
                'created_at' => '2017-05-24 08:48:39',
                'updated_at' => '2017-05-24 08:48:39',
            ),
            3 => 
            array (
                'post_id' => 3,
                'tag_id' => 19,
                'created_at' => '2017-05-24 08:48:39',
                'updated_at' => '2017-05-24 08:48:39',
            ),
            4 => 
            array (
                'post_id' => 3,
                'tag_id' => 21,
                'created_at' => '2017-05-24 08:48:39',
                'updated_at' => '2017-05-24 08:48:39',
            ),
            5 => 
            array (
                'post_id' => 3,
                'tag_id' => 25,
                'created_at' => '2017-05-24 08:48:39',
                'updated_at' => '2017-05-24 08:48:39',
            ),
            6 => 
            array (
                'post_id' => 3,
                'tag_id' => 26,
                'created_at' => '2017-05-24 08:48:39',
                'updated_at' => '2017-05-24 08:48:39',
            ),
            7 => 
            array (
                'post_id' => 3,
                'tag_id' => 27,
                'created_at' => '2017-05-24 08:48:39',
                'updated_at' => '2017-05-24 08:48:39',
            ),
            8 => 
            array (
                'post_id' => 3,
                'tag_id' => 30,
                'created_at' => '2017-05-24 08:48:39',
                'updated_at' => '2017-05-24 08:48:39',
            ),
            9 => 
            array (
                'post_id' => 3,
                'tag_id' => 55,
                'created_at' => '2017-05-24 08:48:39',
                'updated_at' => '2017-05-24 08:48:39',
            ),
            10 => 
            array (
                'post_id' => 3,
                'tag_id' => 78,
                'created_at' => '2017-05-24 08:48:39',
                'updated_at' => '2017-05-24 08:48:39',
            ),
            11 => 
            array (
                'post_id' => 3,
                'tag_id' => 84,
                'created_at' => '2017-05-24 08:48:39',
                'updated_at' => '2017-05-24 08:48:39',
            ),
            12 => 
            array (
                'post_id' => 3,
                'tag_id' => 90,
                'created_at' => '2017-05-24 08:48:39',
                'updated_at' => '2017-05-24 08:48:39',
            ),
            13 => 
            array (
                'post_id' => 3,
                'tag_id' => 108,
                'created_at' => '2017-05-24 08:48:39',
                'updated_at' => '2017-05-24 08:48:39',
            ),
        ));
        
        
    }
}
