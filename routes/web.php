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

Route::get('',[
    'as'=>'client.home.index',
    'uses' => 'HomeController@index'
]);

Route::get('gioi-thieu',[
    'as'=>'client.home.about',
    'uses' => 'HomeController@about'
]);
Route::group(['prefix' => 'gio-hang'], function () {
    Route::get('',[
        'as'=>'client.cart.cart',
        'uses' => 'CartController@cart'
    ]);
    Route::get('thanh-toan',[
        'as'=>'client.cart.checkout',
        'uses' => 'CartController@checkout'
    ]);
    Route::get('hoan-thanh',[
        'as'=>'client.cart.complete',
        'uses' => 'CartController@complete'
    ]);
    
});
Route::get('lien-he',[
    'as'=>'client.home.contact',
    'uses' => 'HomeController@contact'
]);
Route::group(['prefix' => 'san-pham'], function () {

    Route::get('{id}',[
        'as'=>'client.product.detail',
        'uses' => 'ProductController@detail'
    ]);
    Route::get('',[
        'as'=>'client.product.shop',
        'uses' => 'ProductController@shop'
    ]);
});
