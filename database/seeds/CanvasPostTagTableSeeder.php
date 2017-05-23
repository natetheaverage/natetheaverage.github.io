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
        ));
        
        
    }
}
