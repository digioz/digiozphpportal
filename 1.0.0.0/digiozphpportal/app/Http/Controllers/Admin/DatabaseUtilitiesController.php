<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DatabaseUtilitiesController extends Controller
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
        return view('admin.databaseutilities.index');
    }

    public function backup()
    {
        return view('admin.databaseutilities.backup');
    }

    public function query()
    {
        return view('admin.databaseutilities.query');
    }

    public function execute()
    {
        return view('admin.databaseutilities.execute');
    }
}
