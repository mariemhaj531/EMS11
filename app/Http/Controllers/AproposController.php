<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apropos;

class AproposController extends Controller
{
    public function index()
    {
        $infos = Apropos::all();
        return view('layouts.apropos', compact('infos'));
    }
}
