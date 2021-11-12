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
    $nome = "Rafael";
    $idade = 21;
    $arr = [10,20,30,40,50]; 
    $arrNomes = ["Rafael - 2", "Lili", "Vivi", "Marilene", "Cassiane "];
    
    return view('welcome', 
        ['nome' => $nome, 
         'idade' => $idade,
         'arr' => $arr,
         'arrNomes' => $arrNomes
        ]);
        
    });

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/product', function () {
    return view('product');
});