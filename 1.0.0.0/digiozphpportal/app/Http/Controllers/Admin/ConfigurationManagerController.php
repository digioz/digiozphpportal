<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Config;

class ConfigurationManagerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
        $configs = Config::latest()->paginate(10);
        return view('admin.configurationmanager.index',compact('configs'))
            ->with('i', (request()->input('config', 1) - 1) * 10);

        return view('admin.configurationmanager.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.configurationmanager.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'configkey' => 'required',
            'configvalue' => 'required',
        ]);

        Config::create($request->all());
        return redirect()->route('configurationmanager.index')
                        ->with('success','Configuration entry added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $config = Config::find($id);
        return view('admin.configurationmanager.show', compact('config'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $config = Config::find($id);
        return view('admin.configurationmanager.edit', compact('config'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        request()->validate([
            'configkey' => 'required',
            'configvalue' => 'required',
            'isencrypted' => 'required',
        ]);

        Config::find($id)->update($request->all());
        return redirect()->route('configurationmanager.index')
                        ->with('success','Config record updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Config::find($id)->delete();
        return redirect()->route('configurationmanager.index')
                        ->with('success','Configuration record deleted successfully');
    }
}
