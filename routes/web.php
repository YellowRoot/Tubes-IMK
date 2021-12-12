<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Member;

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
    return view('website.dashboard');
});

Route::get('/member', function () {
    return view('website.member');
});

Route::get('/staff', function () {
    return view('website.staff');
});

Route::get('/transaksi', function () {
    return view('website.transaksi');
});
