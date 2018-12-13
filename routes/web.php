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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/path', function(){
    return realpath(base_path('resources/views'));
});

Route::get('/user', function(){
    return 'user';
});

/*
Route::get('/users', function(){
    $users = [
        '0' => [
            'first_name' => 'Sajeeva',
            'last_name' => 'Hasith',
            'location' => 'Colombo'
        ],
        '1' => [
            'first_name' => 'Thisitha',
            'last_name' => 'Manaram',
            'location' => 'Monaragala'
        ],
    ];
    return $users;
});
*/

// return demo data in UserController
Route::get('/users', 'UsersController@index');

// return user create form
Route::get('/users/create', 'UsersController@create');

// post method for create user 
Route::post('/users', 'UsersController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'PagesController@index');

Route::get('/blade', 'PagesController@blade');

Route::get('/userlist', 'UsersController@userlist')
    ->middleware('authenticated');

Route::group(['middleware' => 'authenticated'], function(){
    Route::get('/profile', 'PagesController@profile');

    Route::get('/settings', 'PagesController@settings');
});
