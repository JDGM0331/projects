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
});

Route::get('allusers', function () {
    $users = App\Models\User::all();
    return view('allusers')->with('users', $users);
});

Route::get('user/{id}', function ($id) {
    $user = App\Models\User::find($id);
    return view('user')->with('user', $user);
});
