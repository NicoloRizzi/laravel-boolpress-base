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

/**
 * HOME
 */
Route::get('/', function () {
    return view('index');
})->name('home');

/**
 * USERS
 */
Route::resource('users', 'UserController');

/**
 * POST
 */
Route::resource('posts', 'PostController');

/**
 * REVIEWS
 */
Route::resource('comment', 'CommentController');