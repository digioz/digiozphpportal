<?php

namespace App\Http\Controllers\Admin;
use Auth;
use App\Models\Page;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;

class PageManagerController extends Controller
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
        $pages = Page::latest()->paginate(5);
        return view('admin.pagemanager.index',compact('pages'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

        return view('admin.pagemanager.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.pagemanager.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $request->request->add(['user_id' => $user->id]);

        request()->validate([
            'title' => 'required',
            'url' => 'required',
            'body' => 'required',
        ]);

        Page::create($request->all());
        return redirect()->route('pagemanager.index')
                        ->with('success','Article created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $page = Page::find($id);
        return view('admin.pagemanager.show', compact('page'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $page = Page::find($id);
        return view('admin.pagemanager.edit', compact('page'));
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
        $user = Auth::user();
        $request->request->add(['user_id' => $user->id]);

        request()->validate([
            'title' => 'required',
            'url' => 'required',
            'body' => 'required',
        ]);

        Page::find($id)->update($request->all());
        return redirect()->route('pagemanager.index')
                        ->with('success','Page updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Page::find($id)->delete();
        return redirect()->route('pagemanager.index')
                        ->with('success','Page deleted successfully');
    }
}
