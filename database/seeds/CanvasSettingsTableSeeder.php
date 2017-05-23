<?php

use Illuminate\Database\Seeder;

class CanvasSettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('canvas_settings')->delete();
        
        \DB::table('canvas_settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'setting_name' => 'blog_author',
                'setting_value' => 'Nate Leite',
            ),
            1 => 
            array (
                'id' => 2,
                'setting_name' => 'blog_title',
                'setting_value' => 'NateTheAverage',
            ),
            2 => 
            array (
                'id' => 3,
                'setting_name' => 'blog_subtitle',
                'setting_value' => 'Stay Delicious & Keep Bouncing',
            ),
            3 => 
            array (
                'id' => 4,
                'setting_name' => 'blog_description',
                'setting_value' => 'Nate Leite AKA NateTheAverage a professional fantasist. Creating realities from the dream stream flowing out of us all. This site could prove to be a bit overwhelming being as I am a polymath in training. ',
            ),
            4 => 
            array (
                'id' => 5,
                'setting_name' => 'blog_seo',
                'setting_value' => 'Natetheaverage,colorado,the box,soho,nyc,the act,las vegas,mykonos,flash,as3,svg,animation,motion graphics,insomniac,edc,electric daisy carnival,ultra,electronic music,house music,stilts,circus,house dance,dance,bboy,breakdancer,breakdancing,popping,quadrocopter,swarm,robots,drones,microcontroller,arduino,intel ediso,python,prototyping,maker,sculpting,mold making,sfx,masks,costumes,makeup,treehouse,build,create,direct,shirt printing,direction,acting,powerrisers,jumping stilts,php,vuejs,laravel,html,css,js,ec2016,javascript,crazyflie,crazyflie2,lps,loco positioning system,paint,painter,airsrus,foam sculpting,sewing,textiles,sets,props,cosplay',
            ),
            5 => 
            array (
                'id' => 6,
                'setting_name' => 'disqus_name',
                'setting_value' => '',
            ),
            6 => 
            array (
                'id' => 7,
                'setting_name' => 'ga_id',
                'setting_value' => 'UA-12866689-1',
            ),
            7 => 
            array (
                'id' => 8,
                'setting_name' => 'twitter_card_type',
                'setting_value' => 'none',
            ),
            8 => 
            array (
                'id' => 9,
                'setting_name' => 'canvas_version',
                'setting_value' => 'v3.3.0',
            ),
            9 => 
            array (
                'id' => 10,
                'setting_name' => 'installed',
                'setting_value' => '1495403916',
            ),
            10 => 
            array (
                'id' => 11,
                'setting_name' => 'social_header_icons_user_id',
                'setting_value' => '1',
            ),
            11 => 
            array (
                'id' => 12,
                'setting_name' => 'latest_release',
                'setting_value' => 'v3.3.0',
            ),
            12 => 
            array (
                'id' => 13,
                'setting_name' => 'custom_css',
                'setting_value' => '',
            ),
            13 => 
            array (
                'id' => 14,
                'setting_name' => 'custom_js',
                'setting_value' => '',
            ),
            14 => 
            array (
                'id' => 15,
                'setting_name' => 'active_theme',
                'setting_value' => 'cnvs-paper-dark',
            ),
        ));
        
        
    }
}
