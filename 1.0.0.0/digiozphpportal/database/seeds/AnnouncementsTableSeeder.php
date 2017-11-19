<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Announcement;

class AnnouncementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('name', 'Site Admin')->first();

        Announcement::create(array(
            'user_id' => $user->id,
            'name' => 'Test Announcement 1',
            'body' => '<p>This is a test Announcement 1.</p>',
            'visible' => true,
        ));

        Announcement::create(array(
            'user_id' => $user->id,
            'name' => 'Test Announcement 2',
            'body' => '<p>This is a test Announcement 2.</p>',
            'visible' => true,
        ));
    }
}
