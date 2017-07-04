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

Route::get('/', function () {
    return view('main');
});

Route::get('articles', 'ArticleController@showAllArticles');

Route::get('articles/{id}', 'ArticleController@showArticle');

Route::get('articles/{id}/edit', 'ArticleController@editArticle');

Route::post('articles/{id}/edit', 'ArticleController@editAndSaveArticle');

Route::get('articles/{id}/delete', 'ArticleController@deleteArticle');

Route::get('newArticle', 'ArticleController@newArticle');