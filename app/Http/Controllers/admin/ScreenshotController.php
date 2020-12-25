<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Screenshot;
use App\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\admin\ScreenshotRequest;

class ScreenshotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Screenshot::with(['works'])->get();
        return view('pages.admin.screenshot.index', ['items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = Work::all();
        return view('pages.admin.screenshot.create', ['items' => $items]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ScreenshotRequest $request)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store('assets/screenshots', 'public');

        Screenshot::create($data);
        return redirect()->route('screenshot.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Screenshot  $screenshot
     * @return \Illuminate\Http\Response
     */
    public function show(Screenshot $screenshot)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Screenshot  $screenshot
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Screenshot::findOrFail($id);
        $works = Work::all();
        return view('pages.admin.screenshot.edit', ['item' => $item, 'works' => $works]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Screenshot  $screenshot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store('assets/screenshots', 'public');
        $item = Screenshot::findOrFail($id);
        Storage::disk('public')->delete($item['image']); // delete local image file
        $item->update($data); // update database
        return redirect()->route('screenshot.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Screenshot  $screenshot
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Screenshot::findOrFail($id);
        // Storage::disk('public')->delete($item['image']); // delete local image file
        $item->delete(); // delete database
        return redirect()->route('screenshot.index');
    }
}
