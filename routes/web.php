<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/





Route::get('register', 'App\Http\Controllers\RegisterController@register_form');

Route::post('register', 'App\Http\Controllers\RegisterController@do_register');

Route::get('login',
    'App\Http\Controllers\RegisterController@login_form'

);

Route::post('login', 'App\Http\Controllers\RegisterController@do_login'


);


Route::get('logout', 'App\Http\Controllers\RegisterController@logout');



Route::get('/', function () {
    return view('welcomer');

});

Route::get('benvenuto', function () {
    return view('benvenuto');

});
Route::get('home', 'App\Http\Controllers\StoryController@home');

Route::get('quiz', function () {
    return view('quiz');
});

Route::get('frasi', function () {
    return view('frasi');
});

Route::get('mystories', 'App\Http\Controllers\StoryController@mystories');

Route::get('mystories/lista', 'App\Http\Controllers\StoryController@lista');

Route::get('otherstories',
    'App\Http\Controllers\StoryController@other_stories'

);

Route::get(
    'otherstoriesc',
    'App\Http\Controllers\StoryController@other_storiesc'

);

Route::get('comments', function () {
    return view('comments');
});

Route::get('quotes/search/{query}', 'App\Http\Controllers\QuotesController@search_quotes');

Route::get('quotes/searchg/{query}', 'App\Http\Controllers\QuotesController@search_gifs');

Route::post('mystories/add', 'App\Http\Controllers\StoryController@add');

Route::get('otherstories/like/{story_id}', 'App\Http\Controllers\StoryController@like');

Route::get('otherstories/search/{q}/{tipo}', 'App\Http\Controllers\StoryController@search');

Route::get('otherstories/comments/{story_id}', 'App\Http\Controllers\StoryController@comments');

Route::get('otherstories/comments_s/{story_id}', 'App\Http\Controllers\StoryController@comment_show');

Route::post('otherstories/comments_s/{story_id}', 'App\Http\Controllers\StoryController@add_comment');

Route::get('otherstories/comments/get/{story_id}', 'App\Http\Controllers\StoryController@get_comments');

Route::get('otherstories/report/{story_id}', 'App\Http\Controllers\StoryController@segnala');

Route::get('places', function () {

    return view('places');
});

