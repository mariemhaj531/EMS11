<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hero;
use App\Models\Feature;
use App\Models\Realisation;
use App\Models\Testimonial;

class HomeController extends Controller
{
    public function index()
{
    return view('app', [
        'hero' => Hero::first(),
        'features' => Feature::all(),
        'realisations' => Realisation::latest()->take(3)->get(),
        'testimonials' => Testimonial::latest()->take(3)->get(),
    ]);
}
}
