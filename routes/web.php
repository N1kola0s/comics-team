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
    $name = Route::currentRouteName();
    
    $comics= config ('comics');
    return view('comics.index', compact('comics'));
})->name('home');



Route::get('/characters', function () {
    $name = Route::currentRouteName();
    /* dd($name); */
    
    return ('characters');
})->name('characters');

Route::get('/comics', function () {
    $name = Route::currentRouteName();
    /* dd($name); */
    
    return 'comics';
})->name('comics');

Route::get('/movies', function () {
    $name = Route::currentRouteName();
    /* dd($name); */
    
    return 'movies';
})->name('movies');

Route::get('/tv', function () {
    $name = Route::currentRouteName();
    /* dd($name); */
    
    return 'tv';
})->name('tv');

Route::get('/games', function () {
    $name = Route::currentRouteName();
    /* dd($name); */
    
    return 'games';
})->name('games');

Route::get('/collectibles', function () {
    $name = Route::currentRouteName();
    /* dd($name); */
    
    return 'collectibles';
})->name('collectibles');

Route::get('/videos', function () {
    $name = Route::currentRouteName();
    /* dd($name); */
    
    return 'videos';
})->name('videos');

Route::get('/fans', function () {
    
    $name = Route::currentRouteName();
    /* dd($name); */
    return 'fans';
})->name('fans');

Route::get('/news', function () {
    $name = Route::currentRouteName();
    /* dd($name); */
    
    return 'news';
})->name('news');

Route::get('/shop', function () {
    $name = Route::currentRouteName();
    /* dd($name); */
    
    return 'shop';
})->name('shop');


Route::get('/{id}', function($id){
    
    $comics = config('comics');
    /* dd(count($comics));
    dd($id); */
    if($id >= 0 && is_numeric ($id) && $id < count($comics)) {
        /* dd($id); */
        /* dd($comics[$id]); */
        $comic = $comics[$id];
        return view('comics.show', compact('comic'));
    } else {
        /* dd('Abort! 404'); */
        abort(404);
    }

}) -> name ('comics.show');