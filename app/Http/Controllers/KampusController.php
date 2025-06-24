<?php

namespace App\Http\Controllers;

use App\Models\Kampus;
use Illuminate\Http\Request;

class KampusController extends Controller
{
    public function index()
    {
        $kampus = Kampus::with('program_studi')->get();
        return view('kampus.index', compact('kampus'));
    }

    public function show($id)
    {
        $kampus = Kampus::with('program_studi')->findOrFail($id);
        return view('kampus.show', compact('kampus'));
    }
}
