<?php

use Illuminate\Database\Seeder;
use App\Models\Zone;

class ZonesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Zone::create(array(
            'name' => 'Top',
            'zone_type' => 'Module',
        ));

        Zone::create(array(
            'name' => 'TopMenu',
            'zone_type' => 'Menu',
        ));

        Zone::create(array(
            'name' => 'Left',
            'zone_type' => 'Module',
        ));

        Zone::create(array(
            'name' => 'LeftMenu',
            'zone_type' => 'Menu',
        ));

        Zone::create(array(
            'name' => 'BodyTop',
            'zone_type' => 'Module',
        ));

        Zone::create(array(
            'name' => 'BodyBottom',
            'zone_type' => 'Module',
        ));

        Zone::create(array(
            'name' => 'Bottom',
            'zone_type' => 'Module',
        ));
    }
}
