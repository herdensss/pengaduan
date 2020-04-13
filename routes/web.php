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
Route::get('/lapor', 'HandlerController@landing')->name('lapor');
Route::get('/', 'HandlerController@landing')->name('landing');

Route::get('/login', 'AuthController@getLogin')
        ->name('getLogin')
        ->middleware('guest');
    
Route::post('p/login','AuthController@postLogin')
        ->name('postLogin');

Route::post('p/reg','AuthController@postRegister')
        ->name('postRegister');

Route::get('/init', 'HandlerController@init')->name('init')->middleware('auth');

Route::get('/logout', 'AuthController@logout')->name('logout')->middleware('auth');
Route::get('/logout/get','AuthController@logout')->name('logout.get');

Route::middleware('auth')->group(function (){
        Route::get('/dashboard', 'HandlerController@dashboard')->name('dashboard');
        Route::resource('laporan', 'LaporanController');

        Route::resource('laporan','LaporanController');
        Route::get('/user-laporan','LaporanController@userLaporan')->name('laporan.user');
});

Route::get('/register', function () {
    return view('auth.register');
})->name('getRegister')->middleware('guest');
