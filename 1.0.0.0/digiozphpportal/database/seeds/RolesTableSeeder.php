<?php

use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(array('name' => 'Administrator'));
        Role::create(array('name' => 'Guest'));
        Role::create(array('name' => 'Standard Members'));
        Role::create(array('name' => 'Moderator'));
    }
}
