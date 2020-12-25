<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Work;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $items = Work::all();
        return view('pages.admin.dashboard', ['items' => $items]);
    }
}
