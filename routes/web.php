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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('transaction', 'TransactionsController');
Route::resource('user', 'UserController');
Route::resource('roleuser', 'RoleUserController');

Route::get('/superadmin', 'SuperadminController@index')->name('superadamin');
Route::get('/administrator', 'AdministratorController@index')->name('administrator');
Route::get('/adminbengkel', 'AdminbengkelController@index')->name('adminbengkel');
Route::get('/direksi', 'DireksiController@index')->name('direksi');
Route::get('/other', 'OtherController@index')->name('other');


Route::get('/user.index','UserController@index');
Route::get('user/edit/{id}','UserController@edit');
Route::get('user/delete/{id}','UserController@destroy');

Route::get('/user.index','RoleUserController@index');
Route::get('roleuser/edit/{id}','RoleUserController@edit');
//Route::get('roleuser/store','RoleUserController@post');