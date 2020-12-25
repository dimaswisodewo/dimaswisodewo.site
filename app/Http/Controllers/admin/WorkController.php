<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Work;
use App\WorkDetail;
use App\Http\Requests\admin\WorkRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Work::all();
        return view('pages.admin.works.index', ['items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.works.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WorkRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title).'-'.Str::slug($request->short_description);
        Work::create($data);

        return redirect()->route('work.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Work::with(['details', 'platforms', 'technologies', 'roles'])->findOrFail($id);
        return view('pages.admin.works.detail', ['item' => $item]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Work::findOrFail($id);

        return view('pages.admin.works.edit', ['item' => $item]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(WorkRequest $request, $id)
    {
        $data = $request->all();
        $item = Work::findOrFail($id);
        $item->update($data);

        return redirect()->route('work.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $work = Work::findOrFail($id);
        $detail = WorkDetail::where('work_id', $id)->first();

        if (!is_null($detail)) {
            $detail->delete();
        }

        if (!is_null($work)) {
            $work->delete();
        }        

        return redirect()->route('work.index');
    }
}
