<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Models\Menu;
use App\Models\Config;
use Illuminate\Support\Facades\DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Fix for running on mac
        Schema::defaultStringLength(191);

        // Get Site Name and Store it in Session Variable
        try {
            $configobject = Config::where('configkey', 'SiteName')->first();

            if ($configobject != null)
            {
                $configarray = $configobject->toarray();
                $sitename = $configarray['configvalue'];
                session(['sitename' => $sitename]);
            }
        }
        catch (\Exception $e) {
            session(['sitename' => 'DigiOz PHP Portal']);
        }

		// Top Navigation Menu Data
        view()->composer('menus.topnav', function($view)
		{
			$view->with('menus', Menu::where('location', 'TopMenu')->where('visible', true)->get());
		});

        // Left Navigation Menu Data
        view()->composer('menus.leftnav', function($view)
		{
			$view->with('menus', Menu::where('location', 'LeftMenu')->where('visible', true)->get());
		});

        // Who Is Online Menu Data
        view()->composer('menus.whoisonline', function($view)
		{
			$view->with('visitorcount', DB::table('sessions')->select('*')->count());
		});
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
