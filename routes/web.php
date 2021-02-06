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
    $admin = \App\Models\User::where('email', 'admin@admin.com')->first();

    $admin->notify(new \App\Notifications\TestNotification());

    return view('welcome');
});
