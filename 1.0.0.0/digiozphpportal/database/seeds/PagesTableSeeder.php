<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Page;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('name', 'Site Admin')->first();

        // Home Page Content
        Page::create(array(
                'user_id' => $user->id,
                'title' => 'Home',
                'url' => '/Home/Index',
                'body' => '<p><span style="font-size: medium;"><strong>Welcome to DigiOz PHP Portal!</strong></span></p>
                            <p>DigiOz PHP Portal is a web based portal system written in PHP using Laravel Framework and currently supports
                            MySQL, PostgreSQL, SQLite and Microsoft SQL Server Databases to allows webmasters to setup and customize an instant
                            website for either business or personal use.</p>
                            <p>Some Features included in this Portal System include:</p>
                            <ul>
                            <li>An Administrative Dashboard, where the Webmaster can Manage the Site and related Features.</li>
                            <li>A Page Manager, to allow Admins to Create new Pages, Edit existing Pages or Delete Them.</li>
                            <li>A Database Driven Configuration System to fine tune the Portal System</li>
                            <li>Some Database Utilities to help Manage the Site Database</li>
                            <li>File Manager, which allows you to add or remove files to your site.</li>
                            <li>Module Manager, allow you to install new Plugins to the Portal.</li>
                            <li>Forum Manager allows you to Manage Forum Posts, Threads, and Users.</li>
                            <li>Poll Manager lets you create new polls to display on the site.</li>
                            <li>The Statistics section lets you see site related statistics such as the number of visitors, number of page Views,
                            etc.</li>
                            <li>Menu Manager lets you add new Menu links both to internal pages and external sites.</li>
                            <li>User Manager lets you manage the registered users of the site.</li>
                            <li>Announcements section let&#39;s you add, edit or remove site wide announcements to the users, which show up on the
                            Home Index Page.</li>
                            <li>Picture Manager lets you create Picture Galleries, and add or remove pictures from the site.</li>
                            <li>Video Manager allows you to upload and display Videos to your site and manage them.</li>
                            <li>Link Manager allows you to create a links page to do link exchagne with other sites similar to yours.</li>
                            <li>Chat Manager lets you manage the Chat Database Table.</li>
                            </ul>
                            <p><strong><span style="font-size: medium;">About DigiOz Multimedia, Inc</span></strong></p>
                            <p><strong><span style="font-size: medium;"></span></strong>DigiOz Multimedia, Inc is a Chicago, Illinois USA based
                            Software Development Company which provides web design for personal and business use, CRM, custom programming for web
                            and PC, design database driven systems for clients, as well as business process modeling and consulting. We also have
                            an active Open Source Community that provides many IT Systems and Web Portals as Open Source Products for Everyone to
                            share and enjoy.</p>
                            <p>Visit us at <a href="http://www.digioz.com">www.digioz.com</a> for more information, or email us at
                            <a href="mailto:support@digioz.com">support@digioz.com</a>. </p>',
                'keywords' => 'DigiOz PHP Portal, CMS, Portal, Web Portal, Laravel',
                'description' => 'DigiOz PHP Portal is a web based portal system written in PHP using Laravel Framework and currently supports
                            MySQL, PostgreSQL, SQLite and Microsoft SQL Server Databases to allows webmasters to setup and customize an instant
                            website for either business or personal use.',
                'visible' => true,
        ));

        // Contact Page Content
        Page::create(array(
                'user_id' => $user->id,
                'title' => 'Contact',
                'url' => '/Home/Contact',
                'body' => '<h2>Contact</h2>
                            <h3>Below is our Contact Information:</h3>
                            <address>1 Main Street<br /> Chicago, IL 60601<br /> <abbr title="Phone">P:</abbr>
                            425.555.0100</address><address><strong>Support:</strong> <a href="mailto:Support@example.com">Support@example.com</a>
                            <br /> <strong>Marketing:</strong> <a href="mailto:Marketing@example.com">Marketing@example.com</a></address>',
                'keywords' => 'Contact, Support',
                'description' => 'Contact the webmaster for any questions you may have about the site.',
                'visible' => true,
        ));

        // About Page Content
        Page::create(array(
                'user_id' => $user->id,
                'title' => 'About',
                'url' => '/Home/About',
                'body' => '<h2>About</h2>
                            <h3>Some information about us:</h3>
                            <p>Use this area to provide additional information.</p>',
                'keywords' => 'About, Information',
                'description' => 'More information about us.',
        'visible' => true,
));

    }
}
