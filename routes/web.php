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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::match(['get','post'],'/','AdminController@login')->name('login');

Route::get('/logout','AdminController@logout')->name('logout');

Route::get('/admin/dashboard','AdminController@dash')->name('dash');


Route::get('/admin/dashboard/settings','AdminController@settings')->name('settings');
Route::patch('/admin/dashboard/settings','AdminController@profile_edit')->name('profile_edit');

Route::post('/admin/dashboard/check-pwd','AdminController@checkPassword')->name('checkPassword');




//Auth::routes();
