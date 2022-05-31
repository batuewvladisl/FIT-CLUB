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
    return view('welcome');
    })->name('welcome'); ;

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

require __DIR__.'/auth.php';

Route::post('/home', 'App\Http\Controllers\ContactController@submit')->middleware('auth')->name('users');

Route::get('/home', 'App\Http\Controllers\ContactController@showByUser')->middleware('auth')->name('home');

Route::get('/user-delete/{id}/delete', 'App\Http\Controllers\ContactController@deleteMessage')->name('user-delete');

Route::get('/admin/{id}', 'App\Http\Controllers\AdminController@showAnketa')->middleware(['auth', 'isadmin'])->name('show-anketa');

Route::post('/admin/{id}', 'App\Http\Controllers\AdminController@showAnketaSubmit')->middleware(['auth', 'isadmin'])->name('show-anketa-submit');
    
Route::get('/admin', 'App\Http\Controllers\AdminController@showAll')->middleware(['auth', 'isadmin'])->name('admin');
