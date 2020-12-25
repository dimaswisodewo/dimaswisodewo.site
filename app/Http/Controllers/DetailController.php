<?php

namespace App\Http\Controllers;
use App\Work;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index(Request $request, $slug)
    {
        $item = Work::with(['details', 'platforms', 'technologies', 'roles'])->where('slug', $slug)->firstOrFail();
        return view('pages.details', ['item' => $item]);
    }

}
