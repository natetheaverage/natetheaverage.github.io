<?php

use Illuminate\Database\Seeder;

class CanvasTagsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('canvas_tags')->delete();
        
        \DB::table('canvas_tags')->insert(array (
            0 => 
            array (
                'id' => 2,
                'tag' => 'masks',
                'title' => 'Mask Production',
                'subtitle' => 'Mask making in all its glory',
                'meta_description' => 'Masks making through clay sculpture and silicon molding process',
                'layout' => 'canvas::frontend.blog.index',
                'reverse_direction' => 0,
                'created_at' => '2017-05-22 01:44:51',
                'updated_at' => '2017-05-22 01:44:51',
            ),
            1 => 
            array (
                'id' => 3,
                'tag' => 'Props',
                'title' => 'Prop Making',
                'subtitle' => 'Cosplay accessories ',
                'meta_description' => 'Props for costume and character work',
                'layout' => 'canvas::frontend.blog.index',
                'reverse_direction' => 0,
                'created_at' => '2017-05-22 01:47:17',
                'updated_at' => '2017-05-22 01:47:17',
            ),
            2 => 
            array (
                'id' => 4,
                'tag' => 'Costume',
                'title' => 'Costume Making',
                'subtitle' => 'Costume production ',
                'meta_description' => 'Costume creation typically is a large degree of pattern creation and sewing various textiles ',
                'layout' => 'canvas::frontend.blog.index',
                'reverse_direction' => 0,
                'created_at' => '2017-05-22 01:50:35',
                'updated_at' => '2017-05-22 01:50:35',
            ),
            3 => 
            array (
                'id' => 5,
                'tag' => 'Making',
                'title' => 'Making',
                'subtitle' => 'To create a thing.',
                'meta_description' => 'Making or to make is what a maker does with everything at their disposal',
                'layout' => 'canvas::frontend.blog.index',
                'reverse_direction' => 0,
                'created_at' => '2017-05-22 01:54:19',
                'updated_at' => '2017-05-22 01:54:19',
            ),
        ));
        
        
    }
}
