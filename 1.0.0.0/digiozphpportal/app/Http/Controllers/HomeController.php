<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Config;
use App\Models\Announcement;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page = Page::where('title', 'Home')->first();
        $announcecount = Config::where('configkey', 'NumberOfAnnouncements')->first();
        $announcements = Announcement::where('visible', true)->orderBy('id', 'desc')->take($announcecount->configvalue)->get();;

        return view('home.welcome')->with(['page' => $page, 'announcements' => $announcements]);
    }

    public function about()
    {
        $page = Page::where('title', 'About')->first();

        return view('home.about')->with(['page' => $page]);
    }

    public function contact()
    {
        $page = Page::where('title', 'Contact')->first();

        return view('home.contact')->with(['page' => $page]);
    }

    public function announcements()
    {
        $announcements = Announcement::where('visible', true)->orderBy('id', 'desc')->get();

        return view('home.announcements')->with(['announcements' => $announcements]);
    }
}
