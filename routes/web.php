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
    return view('welcome');
});


//required parameters
//Route::get('ID/{id}',function($id) {
//    echo 'ID: '.$id;
//});

//optional parameters
//Route::get('user/{name?}', function ($name = 'TutorialsPoint') {
//    return $name;
//});

//named routes
//Route::get('user/profile', 'UserController@showProfile')->name('profile');


//controller routes
//Route::get(‘base URI’,’controller@method’);

Route::get('profile', [
    'middleware' => 'auth',
    'uses' => 'UserController@showProfile'
]);

Route::get('/usercontroller/path', [
    'middleware' => 'First',
    'uses' => '\App\Http\Controllers\UserController@showPath'
]);

Route::resource('my','\App\Http\Controllers\MyController');

//implicit Controllers
Route::controller(‘base URI’,’<class-name-of-the-controller>’);
