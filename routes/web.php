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

Route::get("index", [
    'as' => 'main-page',
    'uses' => 'PageController@getIndex'
]);

Route::get('product-type/{types}',[
    'as'=>'product_type',
    'uses'=>'PageController@getProductType'
]);

Route::get('product-detail/{id}',[
    'as'=>'product_detail',
    'uses'=>'PageController@getDetail'
]);

Route::get('contact',[
    'as'=>'contact',
    'uses'=>'PageController@getContact'
]);

Route::get('about',[
    'as'=>'about',
    'uses'=>'PageController@getAbout'
]);

Route::get('add-to-cart/{id}',[
    'as'=>"add_basket",
    'uses'=>'PageController@getAddToCart'
]);

Route::get('del-cart/{id}',[
    'as'=>"del_basket",
    'uses'=>'PageController@getDelFromCart'
]);

Route::get("order",[
    'as'=>"order",
    'uses'=>'PageController@getCheckout'
]);

Route::post("order",[
    'as'=>"order",
    'uses'=>'PageController@postCheckout'
])->middleware('checkQuantity');
