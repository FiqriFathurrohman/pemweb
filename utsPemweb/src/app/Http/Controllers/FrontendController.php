<?php

namespace App\Http\Controllers;

use App\Models\Beasiswa;

class FrontendController extends Controller
{
    public function index()
    {
        $data = Beasiswa::all();
        return view('frontend.index', compact('data'));
    }
}
