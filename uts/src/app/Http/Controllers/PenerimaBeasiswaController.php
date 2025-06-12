<?php

namespace App\Http\Controllers;

use App\Models\PenerimaBeasiswa;

class PenerimaBeasiswaController extends Controller
{
    public function index()
    {
        $penerimas = PenerimaBeasiswa::all();
        return view('frontend.penerima-beasiswa.index', compact('penerimas'));
    }
}
