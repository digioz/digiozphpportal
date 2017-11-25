<?php

namespace App\Http\Controllers\Admin;

use DB;
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
        $tables = DB::select('SHOW TABLES');

        return view('admin.databaseutilities.query', compact('tables'));
    }

    public function queryprocess(Request $request)
    {
        $table_name = $request->input('table');

        $data = DB::table($table_name)->get()->toArray();

        return view('admin.databaseutilities.queryprocess', compact('data'));
    }

    public function execute()
    {
        return view('admin.databaseutilities.execute');
    }
}
