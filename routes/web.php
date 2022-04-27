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

    $comics = config('comics');

    $data = [
        'comics' => $comics, 
        // 'nav' => [
        //     [
        //     'link'=> '#',
        //     'text'=> 'characters'
        //     ],
        //     [
        //     'link'=> '#',
        //     'text'=> 'comics'
        //     ],
        //     [
        //     'link'=> '#',
        //     'text'=> 'movies'
        //     ],
        //     [
        //     'link'=> '#',
        //     'text'=> 'tv'
        //     ],
        //     [
        //     'link'=> '#',
        //     'text'=> 'games'
        //     ],
        //     [
        //     'link'=> '#',
        //     'text'=> 'collectibles'
        //     ],
        //     [
        //     'link'=> '#',
        //     'text'=> 'videos'
        //     ],
        //     [
        //     'link'=> '#',
        //     'text'=> 'fans'
        //     ],
        //     [
        //     'link'=> '#',
        //     'text'=> 'news'
        //     ],
        //     [
        //     'link'=> '#',
        //     'text'=> 'shop'
        //     ]
        // ],
    ];

    return view('guest.home', $data);
})->name('home');

Route::get('/comic', function () {
    return view('guest.comic');
});
