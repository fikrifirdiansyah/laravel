<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/test/{namadep}/dan/{nambek}', function ($nama, $nama1) {
//     $depan = $nama;
//     $belakang = $nama1;

//     return "$depan $belakang";
// });

// Route::get('/perkenalan/{depan}/dan/{belakang}', 'PerkenalanController@halo');

// Route::get('/form', 'PerkenalanController@form');
// Route::post('/selamat-datang', 'PerkenalanController@selamat_datang');

Route::get('/', function (){
    return view('index');
});

Route::get('/register', 'HomeController@register');
Route::post('/helo', 'HomeController@helo');
