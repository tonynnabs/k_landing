<?php

use Illuminate\Support\Facades\Route;

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
    $coins = Http::withHeaders(['Authorization' => 'Bearer 1|8fNooKF0MMdXVgnXxMGLXg07JFjj3kK6tUD22stD'])
            ->get('https://app.wekollect.co/api/coins')->json();

    return view('welcome')->with('coins', collect($coins['data'])->take(6));
    // return view('welcome');
});

Route::get('/privacy-policy', function() {
    return view('privacy-policy');
});
