<?php

namespace App\Http\Controllers;

use App\Models\PenerimaBeasiswa;

class HomeController extends Controller
{
    public function index()
    {
        $penerimas = PenerimaBeasiswa::all();
        return view('frontend.home', compact('penerimas'));
    }
}
