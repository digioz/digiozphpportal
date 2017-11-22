<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ConfigsTableSeeder::class);
        $this->call(PagesTableSeeder::class);
        $this->call(AnnouncementsTableSeeder::class);
        $this->call(MenusTableSeeder::class);
        $this->call(PluginsTableSeeder::class);
        $this->call(ZonesTableSeeder::class);
    }
}
