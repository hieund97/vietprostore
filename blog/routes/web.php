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

/**
 * Client Zone
 */
Route::group([
    'namespace' => 'Client'
], function(){
    
    Route::get('/gioi-thieu', 'HomeController@about');
    Route::get('/lien-he', 'HomeController@contact');
    Route::get('/', 'HomeController@index');

    Route::group([
        'prefix' => 'gio-hang'
    ], function () {
        Route::get('/', 'CartController@index');
        Route::get('/thanh-toan', 'CartController@checkout');
        Route::get('/thanh-cong', 'CartController@complete');
    });

    Route::group([
        'prefix' => 'san-pham'
    ], function () {
        Route::get('/{product}', 'ProductController@detail');    
        Route::get('/', 'ProductController@shop');
    });  
    
});

/**
 * Admin Zone
 */
Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin'
], function () {

    // Guest routes
    Route::group([
        'middleware' => 'guest'
    ], function(){
        Route::get('login', 'LoginController@showLoginForm');
        Route::post('login', 'LoginController@login');
        
    });

    // Auth routes
    Route::group([
        'middleware' => 'auth'
    ], function(){
        Route::get('/', 'DashboardController@index');

        Route::post('logout', 'LoginController@logout');
        // Admin Product Route
        Route::group([
            'prefix' => 'product'
        ], function () {
            Route::get('/create', 'ProductController@create');
            Route::get('/', 'ProductController@index');
            Route::get('/{productid}/edit', 'ProductController@edit');
        });

        // Admin Users Route
        Route::group([
            'prefix' => 'users'
        ], function () {
            Route::get('/create', 'UserController@create');
            Route::get('/{userid}/edit', 'UserController@edit');
            Route::get('/', 'UserController@index');
        });


        // Admin categories Route
        Route::group([
            'prefix' => 'categories'
        ], function () {
            Route::get('/', 'CategoryController@index');
            Route::get('/{categoryid}/edit', 'CategoryController@edit');
        });

        // Admin orders Route
        Route::group([
            'prefix' => 'orders'
        ], function () {
            Route::get('/{orderid}/edit', 'OrderController@edit');
            Route::get('/', 'OrderController@index');
            Route::get('/processed', 'OrderController@processed');
        }); 
    });         
});