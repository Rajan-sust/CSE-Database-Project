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
    return view('welcome');
});



Route::post('/', 'MailController@sendMessage');
Route::post('/home', 'MailController@sendMessage');

Route::get('/book', function () {
    return view('books');
});

Route::get('/upload/video', 'UserController@vupcheck');
Route::post('/upload/video', 'UserController@video');
Route::get('/archive/video','UserController@varccheck');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/writeblog','BlogController@formBlog');
Route::post('/writeblog','BlogController@postBlog');
Route::get('/archive/blog','BlogController@barccheck');
Route::post('/archive/blog','BlogController@addUpvote');



Route::get('/askquestion','QuestionController@askQuestion');
Route::post('/askquestion','QuestionController@postQuestion');


Route::get('/archive/question','QuestionController@archiveCheck');
Route::post('/archive/question','QuestionController@postComment');

Route::get('/profile','ProfileController@profile');
Route::post('/profile','ProfileController@update_avatar');

Route::get('/delete/{user_id}/{comment_id}','QuestionController@delete');
