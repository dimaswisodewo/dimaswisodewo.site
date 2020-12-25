<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\WorkTechnology;
use App\Work;
use Illuminate\Http\Request;

class WorkTechnologyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = WorkTechnology::with(['works'])->get();
        return view('pages.admin.technologies.index', ['items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = Work::all();

        return view('pages.admin.technologies.create', ['items' => $items]);
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
        WorkTechnology::create($data);

        return redirect()->route('technology.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\WorkTechnology  $workTechnology
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\WorkTechnology  $workTechnology
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = WorkTechnology::findOrFail($id);
        $work = Work::all();

        return view('pages.admin.technologies.edit', ['item' => $item, 'work' => $work]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\WorkTechnology  $workTechnology
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $item = WorkTechnology::findOrFail($id);
        $item->update($data);

        return redirect()->route('technology.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\WorkTechnology  $workTechnology
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = WorkTechnology::findOrFail($id);
        $item->delete();

        return redirect()->route('technology.index');
    }
}
