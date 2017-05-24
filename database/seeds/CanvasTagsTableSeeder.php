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
                'tag' => 'Costumes',
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

        $argv=array ("Natetheaverage","colorado","the box","soho","nyc","the act","las vegas","mykonos","flash","as3","svg","animation","motion graphics","insomniac","edc","electric daisy carnival","ultra","electronic music","house music","stilts","stilt waliking","circus","house dance","dance,bboy","breakdancer","breakdancing","popping","quadrocopter","swarm","robots","drones","microcontroller","arduino","intel edison","python","prototyping","maker","sculpting","mold making","sfx","masks","costumes","makeup","treehouse","build","create","direct","shirt printing","direction","acting","powerrisers","jumping stilts","php","vuejs","laravel","html","css","js","ec2016","javascript","crazyflie","crazyflie2","lps","loco positioning system","paint","painter","airsrus","foam sculpting","sewing","textiles","sets","props","cosplay","shows","entertainment");
        
        for($i = 0, $size = count($argv); $i < $size; ++$i){

          \DB::table('canvas_tags')->insert(array (
              $i+3 => array (
                'id' => $i+5,
                'tag' => $argv[$i],
                'title' => $argv[$i],
                'subtitle' => $argv[$i],
                'meta_description' => $argv[$i],
                'layout' => 'canvas::frontend.blog.index',
                'reverse_direction' => 0,
                'created_at' => '2017-05-22 01:44:51',
                'updated_at' => '2017-05-22 01:44:51'
              )
            )
          )}
        )} 
        }
    }
}
