<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::group(['prefix' => 'v1', 'namespace'=>'Api\V1'], function () {
    /******* Protected Route ********/
    Route::group(['middleware' => ['auth:api']], function () {

        /************ Authenticated Common Route ***********/
        Route::get('/user', function () {
            return Auth::user();
        });
        /****************** Admin Route ********************/
        Route::group(['middleware' => 'admin'], function () {
            /****** category route *******/
            Route::post('/category', 'CategoryController@store');
            Route::post('/category/{slug}', 'CategoryController@update');
            Route::delete('/category/{slug}', 'CategoryController@destroy');
            /****** Brand route *******/
            Route::post('/brand', 'BrandController@store');
            Route::post('/brand/{slug}', 'BrandController@update');
            Route::delete('/brand/{slug}', 'BrandController@destroy');
            /********** Product route *******/
            Route::post('/product', 'ProductController@store');
            Route::delete('/product/{id}', 'ProductController@destroy');
            Route::get('/product/trashed', 'ProductController@trashed');
        });
        /****************** Customer Route ******************/
        Route::group(['middleware' => 'customer'], function () {
           // customer route here
        });

    });

    /*************** unauthenticated route *******************/
    // register route
    Route::post('register', 'AuthController@create');
    // login route
    Route::post('login', 'AuthController@login');

    /********** category route *******/
    //All category
    Route::get('/categories', 'CategoryController@index');
    // single category
    Route::get('/category/{slug}', 'CategoryController@show');

    /********** Brand route *******/
    //brand list
    Route::get('/brands', 'BrandController@index');
    Route::get('/brand/{slug}', 'BrandController@show');

    /********** Product route *******/
    Route::get('/products', 'ProductController@index');
    Route::get('/product/{id}', 'ProductController@show');
    Route::get('/product/photos/{id}', 'ProductController@photos');
});

