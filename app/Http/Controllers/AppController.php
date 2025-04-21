<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;

class AppController extends Controller
{
    public function index()
    {
        $apps = Application::all();
        return view('app', compact('apps'));
    }
}
