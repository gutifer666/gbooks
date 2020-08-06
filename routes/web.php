<?php

use GuzzleHttp\Middleware;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Auth;
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
});
Route::resource('books', 'BookController')->middleware('auth');
Route::get('books/delete/{book}', 'BookController@delete')->middleware('auth');

Route::resource('authors','AuthorController')->middleware('auth');
Route::get('authors/delete/{author}', 'AuthorController@delete')->middleware('auth');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
