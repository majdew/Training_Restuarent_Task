<?php

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


Auth::routes();

Route::resource('orders', 'OrderController');

Route::resource('payments', 'PaymentController');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('user/profile', function () {
    return 'Hello you are in user profile';
})->name('hello');


Route::get('/hello', function () {
    $url = route('hello');

    return redirect()->route('hello');
});

Route::get('user/{id}/profile', function ($id) {
    $url = route('profile', ['id' => $id]);
    return $url;
})->name('profile');

Route::Get('/', function () {
    return view('hello');
});

Route::get('student/details', function () {
    $url = route('student.details');
    return $url;
})->name('student.details');
