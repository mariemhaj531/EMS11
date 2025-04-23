<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AproposController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\HomeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('/', [HomeController::class, 'index']);
Route::get('/', function () {
    return view('app');
});
Route::get('/apps', [AppController::class, 'index']);


Route::post('/subscribe', [NewsletterController::class, 'subscribe'])->name('subscribe');

Route::get('/apropos', function () {
    return view('layouts.apropos');
});
Route::get('/apropos', [AproposController::class, 'index'])->name('apropos');


Route::get('/contact', function () {
    return view('layouts.contact');
});
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

// Route::get('/services', function () {
//     return view('layouts.services');
// });



