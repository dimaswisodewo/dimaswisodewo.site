<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\WorkPlatform;
use App\Work;
use Illuminate\Http\Request;

class WorkPlatformController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = WorkPlatform::with(['works'])->get();

        return view('pages.admin.platforms.index', ['items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = Work::all();

        return view('pages.admin.platforms.create', ['items' => $items]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        WorkPlatform::create($data);

        return redirect()->route('platform.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\WorkPlatform  $workPlatform
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\WorkPlatform  $workPlatform
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = WorkPlatform::findOrFail($id);
        $work = Work::all();

        return view('pages.admin.platforms.edit', ['item' => $item, 'work' => $work]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\WorkPlatform  $workPlatform
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $item = WorkPlatform::findOrFail($id);
        $item->update($data);
        
        return redirect()->route('platform.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\WorkPlatform  $workPlatform
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = WorkPlatform::findOrFail($id);
        $data->delete();

        return redirect()->route('platform.index');
    }
}
