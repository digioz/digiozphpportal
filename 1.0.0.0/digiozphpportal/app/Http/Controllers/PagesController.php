<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class PagesController extends Controller
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

    public function index(Request $request, $url)
    {
        if ($url == null || $url == '')
        {
            $url = '/Home/Index';
        }

        $page = Page::where('url', $url)->first();

        if ($page == null)
        {
            return redirect()->route('home');
        }

        return view('page.index')->with(['page' => $page]);
    }
}
