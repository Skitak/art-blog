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
// Route::group([/*'prefix' => 'admin',*/ 'middleware' => 'ip'], function(){

//     Route::get('hola', function () {
//         return view('welcome');
//     })->name("bonjour");
// });

// Route::prefix('admin')->group(function () {
//     Route::get('users', function () {
//         // Matches The "/admin/users" URL
//     });
// });

// Route::middleware('ip')->name("hola")->group(function(){
//     Route::any('hi', "FrontController@index")->name("amigo");
// });

// Route::get('bonjour/{name}',
// function ($name) {
//     return view('welcome', [$name]);
// })->name('bonjour');

Route::get('/', "FrontController@index")->name('home');

Route::get('article/{name}', "FrontController@article")->name('article');

Route::get('galery/{name}',"FrontController@galery")->name('galery');

Route::get('contact',"FrontController@contact")->name('contact');

Route::get('about',"FrontController@about")->name('about');
