<?php

use Illuminate\Database\Seeder;
use App\Models\Plugin;

class PluginsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Plugin::create(array(
            'name' => 'Chat',
            'dll' => '',
            'isenabled' => true,
            'visible' => true,
        ));

        Plugin::create(array(
            'name' => 'Store',
            'dll' => '',
            'isenabled' => false,
            'visible' => false,
        ));

        Plugin::create(array(
            'name' => 'Twitter',
            'dll' => '',
            'isenabled' => false,
            'visible' => false,
        ));

        Plugin::create(array(
            'name' => 'WhoIsOnline',
            'dll' => '',
            'isenabled' => true,
            'visible' => true,
        ));

        Plugin::create(array(
            'name' => 'SlideShow',
            'dll' => '',
            'isenabled' => false,
            'visible' => false,
        ));

        Plugin::create(array(
            'name' => 'Comments',
            'dll' => '',
            'isenabled' => false,
            'visible' => false,
        ));
    }
}
