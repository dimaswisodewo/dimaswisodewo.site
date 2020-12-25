<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Work;

class WorksController extends Controller
{
    public function index(Request $request)
    {
        $items = Work::all()->where('project_type', 'Unity')->sortByDesc('project_date');
        
        return view('pages.works', ['items' => $items]);
    }

    public function index_jupyter_notebook(Request $request)
    {
        $items = Work::all()->where('project_type', 'Jupyter Notebook')->sortByDesc('project_date');

        return view('pages.works_jupyter_notebook', ['items' => $items]);
    }

    public function index_website(Request $request)
    {
        $items = Work::all()->where('project_type', 'Website')->sortByDesc('project_date');

        return view('pages.works_website', ['items' => $items]);
    }
}
