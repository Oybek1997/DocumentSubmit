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




//Route::view('/','home');
//Route::post('submit','HomeController@save');
Route::resource('/admin/users','Home');

//Route::get('/', function () {
  //  return view('users');
//});

//Route::get('/','Authentication\RegisterController@validator')->name('data.verify');


Auth::routes();

//Route::get('/', 'HomeController@index');


//Route::get('insert','Document_createController@insertform');
//Route::post('create','Document_createController@insert');
Route::get('view-records','StudViewController@index');

Route::resource('admin/users','AdminUsersController');

Route::get('/admin',function (){
    return view('admin.index');
});



Route::view('/','Entering.entering');
Route::post('submit1','HomeController@field');

Route::post('submit2','HomeController@show_users');
Route::get('view-records','ShowController@index');

//Route::view('/','home');
//Route::post('submit','HomeController@save');
