<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\WorkRole;
use App\Work;
use Illuminate\Http\Request;

class WorkRoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = WorkRole::all();

        return view('pages.admin.roles.index', ['items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = Work::all();

        return view('pages.admin.roles.create', ['items' => $items]);
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
        WorkRole::create($data);
        return redirect()->route('role.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\WorkRole  $workRole
     * @return \Illuminate\Http\Response
     */
    public function show(WorkRole $workRole)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\WorkRole  $workRole
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = WorkRole::findOrFail($id);
        $work = Work::all();

        return view('pages.admin.roles.edit', ['item' => $item, 'work' => $work]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\WorkRole  $workRole
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        WorkRole::findOrFail($id)->update($request->all());
        return redirect()->route('role.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\WorkRole  $workRole
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        WorkRole::findOrFail($id)->delete();
        return redirect()->route('role.index');
    }
}
