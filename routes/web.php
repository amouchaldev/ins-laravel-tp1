<?php

use Illuminate\Http\Request;
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
    return view('home');
})->name('home');

Route::group(['as' => 'contact.', 'prefix' => 'contact'], function () {

    Route::get('/', function () {
        return view('contact');
    })->name('index');
    
    Route::post('received', function (Request $request) {
        $name = $request->input('name');
        return view('thankyou', compact('name'));
    })->name('received');

});
