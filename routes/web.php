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

Route::get('/', 'GlobalController@index');
Route::get('/home', 'GlobalController@index');
Route::get('/tentang-staff', 'GlobalController@staff');
Route::get('/tentang-miraima', 'GlobalController@tentang');
Route::get('/kontak', 'GlobalController@kontak' );
Route::get('/gallery', 'GlobalController@gallery' );

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dasboard', function ()
    {
        return view('dasboard');
    })->name('dasboard');
});
