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
    'uses' => 'PageController@index'
]);

Route::get('product-type/{types}', [
    'as' => 'product_type',
    'uses' => 'PageController@getProductType'
]);

Route::get('product-detail/{id}', [
    'as' => 'product_detail',
    'uses' => 'PageController@getDetail'
]);

Route::get('contact', [
    'as' => 'contact',
    'uses' => 'PageController@getContact'
]);

Route::get('about', [
    'as' => 'about',
    'uses' => 'PageController@getAbout'
]);

Route::get('add-to-cart/{id}', [
    'as' => "add_basket",
    'uses' => 'CartController@store'
]);

Route::get('del-cart/{id}', [
    'as' => "del_basket",
    'uses' => 'CartController@destroy'
]);

Route::get("order", [
    'as' => "order",
    'uses' => 'OrderController@index'
]);

Route::post("order", [
    'as' => "order",
    'uses' => 'OrderController@store'
])->middleware('checkQuantity');

Route::get('login', [
    'as' => 'login',
    'uses' => 'PageController@getLogin'
]);

Route::post('login', [
    'as' => 'login',
    'uses' => 'PageController@postLogin'
]);

Route::get('sign-up', [
    'as' => 'signup',
    'uses' => 'PageController@getSignup'
]);

Route::post('sign-up', [
    'as' => 'signup',
    'uses' => 'PageController@postSignup'
]);

Route::get('sign-out', [
    'as' => 'signout',
    'uses' => 'PageController@postSignout'
]);

//Route::post('add-product', [
//    'as' => 'add-product',
//    'uses' => 'PageController@postAddproduct'
//]);

Route::get('search',[
    'as' => "search",
    'uses' => "PageController@getSearch"
]);
//Admin -------------------------------------------------------------------
Route::group(['namespace'=>'admin', 'middleware'=>'adminLogin'], function (){
    Route::get('admin',[
        'as' => "admin",
        'uses' => "AdminController@index"
    ]);

    Route::get('cate',[
        'as' => "cate",
        'uses' => "CateController@create"
    ]);

    Route::post('cate',[
        'as' => "cate",
        'uses' => "CateController@store"
    ]);

    Route::get('edit-cate/{id}',[
        'as' => "edit",
        'uses' => "CateController@edit"
    ]);

    Route::get('edit-cate/{id}',[
        'as' => "edit",
        'uses' => "CateController@update"
    ]);

    Route::get('del-cate/{id}',[
        'as' => "delete",
        'uses' => "CateController@destroy"
    ]);
});



