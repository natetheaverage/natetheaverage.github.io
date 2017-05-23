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
        $this->call('Canvas\DatabaseSeeder');
        $this->call('CanvasPostsTableSeeder');
        $this->call('CanvasPostTagTableSeeder');
        $this->call('CanvasSettingsTableSeeder');
        $this->call('CanvasTagsTableSeeder');
        $this->call('CanvasUsersTableSeeder');
    }
}
