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
    return view('home');
});

Route::get('/products', function () {
    return view('prodotti');
});

Route::get('/contact', function () {

    $data = [
        "contacts" => [
            [
                "name" => "Giuseppe",
                "lastname" => "Urbano",
                "class" => "49",
                "fiori" => 
                    [
                        "type" => "viola",
                        "color" => "purple"
                    ],
            ],

            [
                "name" => "Aldo",
                "lastname" => "Baglio",
                "class" => "102"
            ],

            [
                "name" => "Giovanni",
                "lastname" => "Storti",
                "class" => "70"
            ],

            [
                "name" => "Giacomo",
                "lastname" => "Poretti",
                "class" => "77"
            ],
        ],
    ];

    return view('contatti', $data);

});

Route::get('/socials', function () {
    return view('socials');
});

Route::get('/blog', function () {
    return view('blog');
});


