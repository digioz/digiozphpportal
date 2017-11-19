<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchPagesController extends Controller
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

    public function index()
    {
        return view('searchpages.index');
    }
}
