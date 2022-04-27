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

// Route::get('/', function () {
//     $data = [
//         'nav' => [
//             [
//             'link'=> '#',
//             'text'=> 'characters'
//             ],
//             [
//             'link'=> '#',
//             'text'=> 'comics'
//             ],
//             [
//             'link'=> '#',
//             'text'=> 'movies'
//             ],
//             [
//             'link'=> '#',
//             'text'=> 'tv'
//             ],
//             [
//             'link'=> '#',
//             'text'=> 'games'
//             ],
//             [
//             'link'=> '#',
//             'text'=> 'collectibles'
//             ],
//             [
//             'link'=> '#',
//             'text'=> 'videos'
//             ],
//             [
//             'link'=> '#',
//             'text'=> 'fans'
//             ],
//             [
//             'link'=> '#',
//             'text'=> 'news'
//             ],
//             [
//             'link'=> '#',
//             'text'=> 'shop'
//             ]
//         ],
//     ];
//     return view('guest.home');
// });

Route::get('/', function () {
    $parametri = [
        'nav' =>  [
            [
                'text' => 'About',
                'link' => 'about' 
            ],
            [
                'text' => 'Contacts',
                'link' => 'contacts' 
            ],
            [
                'text' => 'Our products',
                'link' => 'products' 
            ],
        ]
    ];
    return view('guest.home', $parametri);
})->name('home');