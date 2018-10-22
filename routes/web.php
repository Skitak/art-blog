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

Route::get('/', "FrontController@index")->name('home');

Route::get('contact',"FrontController@contact")->name('contact');

Route::get('about',"FrontController@about")->name('about');

Route::get('article/{article}', "FrontController@article")->name('article');
Route::get('article/{article}/next', "FrontController@nextArticle")->name('article.next');
Route::get('article/{article}/previous', "FrontController@previousArticle")->name('article.previous');

Route::name('galery.')->prefix("galery")->group(function(){
    Route::get('/', "FrontController@galery")->name("home");
    Route::get('{category}',"FrontController@galeryCategory")->name('category');
    Route::get('{category}/{subcategory}',"FrontController@galerysubCategory")->name('sub-category');
    Route::get('/{category}/{subcategory}/{galery}', "FrontController@galeryShow")->name("show");
});

Route::name('admin.')->prefix("admin")->group(function(){
    Route::get('/', "BackController@index")->name("home");
});

Auth::routes();

Route::resource('articles', 'ArticleController');
Route::resource('galeries', 'GaleryController');
Route::resource('comments', 'CommentController');
