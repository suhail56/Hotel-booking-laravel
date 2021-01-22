<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\room;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\bookcontrol;
use App\Http\Controllers\mgrlogin;
use App\Http\Controllers\contcontrol;


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
    return view('welcome');
});
Route::get('hotel', function () {
    return view('home');
});
Route::get('hotelbk', function () {
    return view('home1');
});
Route::get('about', function () {
    return view('about');
});
Route::get('rooms', function () {
    return view('rooms');
});
Route::get('contactss', function () {
    return view('contact1');
});
Route::get('login1', function () {
    return view('login1');
});
Route::get('admin', function () {
    return view('admin');
});
Route::get('adbooking', function () {
    return view('adbooking');
});
Route::get('adrooms', function () {
    return view('adrooms');
});
Route::resource('room',room::class);
Route::post('ins',[room::class,'store']);
Route::get('delete/{id}',[room::class,'destroy']);
Route::get('roomviewdb',[room::class,'roomview']);
Route::resource('logincontroller',logincontroller::class);
Route::resource('bookcontrol',bookcontrol::class);
Route::get('deletebook/{id}',[bookcontrol::class,'destroy']);
Route::get('book/{id},{roomname}',[bookcontrol::class,'edit']);
Route::resource('bookviewad',bookcontrol::class);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('manager', function () {
    return view('manager');
});
Route::get('mgrbookings', function () {
    return view('mgrbookings');
});
Route::get('mgrbookview',[room::class,'mgrview']);
Route::get('mgrrooms',[bookcontrol::class,'mgrroomview']);
Route::get('mgrlogins', function () {
    return view('mgrlogins');
});
Route::resource('mgrlogin',mgrlogin::class);
Route::get('images/{image},{image2},{image3}', function () {
    return view('imgs');
});
Route::get('imges/{id}',[room::class,'imgviws']);
Route::resource('contcontrol',contcontrol::class);
Route::get('msgs',[contcontrol::class,'create']);
Route::get('deletemsg/{id}',[contcontrol::class,'destroy']);