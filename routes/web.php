<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsletterController;

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

Route::get('/', function () {
    return view('app');
});
Route::post('/subscribe', [NewsletterController::class, 'subscribe'])->name('subscribe');

Route::get('/apropos', function () {
    return view('layouts.apropos');
});
// Route::get('/services', function () {
//     return view('layouts.services');
// });

Route::get('/contact', function () {
    return view('layouts.contact');
});



