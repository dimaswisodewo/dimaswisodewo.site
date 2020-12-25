<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\WorkDetailRequest;
use App\WorkDetail;
use App\Work;
use App\Screenshot;
use App\Video;
use App\WorkRole;
use App\WorkTechnology;
use Illuminate\Http\Request;

class WorkDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = WorkDetail::with(['works'])->get();
        return view('pages.admin.work-details.index', ['items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $details = WorkDetail::pluck('work_id')->all();
        $items = Work::whereNotIn('id', $details)->select('title', 'id')->get();

        return view('pages.admin.work-details.create', ['items' => $items]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WorkDetailRequest $request)
    {
        $data = $request->all();
        // $data['work_id'] = $request->work_id;
        WorkDetail::create($data);

        return redirect()->route('work-detail.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = WorkDetail::findOrFail($id);
        $works = Work::get();

        return view('pages.admin.work-details.edit', ['item' => $item, 'works' => $works]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(WorkDetailRequest $request, $id)
    {
        $data = $request->all();

        $item = WorkDetail::findOrFail($id);
        $item->update($data);

        return redirect()->route('work-detail.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = WorkDetail::findOrFail($id);
        $item->delete();

        return redirect()->route('work-detail.index');
    }
}
