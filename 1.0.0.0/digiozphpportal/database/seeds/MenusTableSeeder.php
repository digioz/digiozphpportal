<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Menu;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('name', 'Site Admin')->first();

        Menu::create(array(
            'user_id' => $user->id,
            'name' => 'Home',
            'location' => 'TopMenu',
            'controller' => 'Home',
            'action' => '',
            'visible' => true,
            'sort_order' => 1,
        ));

        Menu::create(array(
            'user_id' => $user->id,
            'name' => 'About',
            'location' => 'TopMenu',
            'controller' => 'Home',
            'action' => 'About',
            'visible' => true,
            'sort_order' => 2,
        ));

        Menu::create(array(
            'user_id' => $user->id,
            'name' => 'Contact',
            'location' => 'TopMenu',
            'controller' => 'Home',
            'action' => 'Contact',
            'visible' => true,
            'sort_order' => 3,
        ));

        Menu::create(array(
            'user_id' => $user->id,
            'name' => 'Forum',
            'location' => 'TopMenu',
            'controller' => 'Forum',
            'action' => '',
            'visible' => true,
            'sort_order' => 4,
        ));

        Menu::create(array(
            'user_id' => $user->id,
            'name' => 'Links',
            'location' => 'TopMenu',
            'controller' => 'Links',
            'action' => '',
            'visible' => true,
            'sort_order' => 5,
        ));

        Menu::create(array(
            'user_id' => $user->id,
            'name' => 'Chat',
            'location' => 'TopMenu',
            'controller' => 'Chat',
            'action' => '',
            'visible' => true,
            'sort_order' => 6,
        ));

        Menu::create(array(
            'user_id' => $user->id,
            'name' => 'Store',
            'location' => 'TopMenu',
            'controller' => 'Store',
            'action' => '',
            'visible' => false,
            'sort_order' => 7,
        ));

        Menu::create(array(
            'user_id' => $user->id,
            'name' => 'Twitter',
            'location' => 'TopMenu',
            'controller' => 'Twitter',
            'action' => '',
            'visible' => false,
            'sort_order' => 8,
        ));

        Menu::create(array(
            'user_id' => $user->id,
            'name' => 'Home',
            'location' => 'LeftMenu',
            'controller' => 'Home',
            'action' => '',
            'visible' => true,
            'sort_order' => 9,
        ));

        Menu::create(array(
            'user_id' => $user->id,
            'name' => 'Pictures',
            'location' => 'LeftMenu',
            'controller' => 'Pictures',
            'action' => '',
            'visible' => true,
            'sort_order' => 10,
        ));

        Menu::create(array(
            'user_id' => $user->id,
            'name' => 'Videos',
            'location' => 'LeftMenu',
            'controller' => 'Videos',
            'action' => '',
            'visible' => true,
            'sort_order' => 11,
        ));
    }
}
