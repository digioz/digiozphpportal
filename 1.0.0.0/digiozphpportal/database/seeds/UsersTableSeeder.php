<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use App\Models\Profile;
use App\Models\UserRole;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(array(
            'name' => 'Site Admin',
            'email' => 'webmaster@domain.com',
            'password' => bcrypt('admin'),
        ));

        // Get the created Admin User Record
        $user = User::where('name', 'Site Admin')->first();

        // Create a profile record for the above Admin User
        Profile::create(array(
            'user_id' => $user->id,
            'middle_name' => '',
            'first_name' => 'Site',
            'last_name' => 'Admin',
        ));

        // Get the Administrator Role to assign to above user
        $role = Role::where('name', 'Administrator')->first();

        // Add role to the Admin User
        UserRole::create(array(
            'user_id' => $user->id,
            'role_id' => $role->id,
        ));

    }
}
