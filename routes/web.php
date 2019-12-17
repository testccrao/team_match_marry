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
Route::get('/login',function(){return view('login');});
// Route::post('/login/with','UsersController@login_with')->name('login_with');
Route::post('/sfka','UsersController@login_with')->name('login.with');
Route::post('/create/1','ProofController@create_proof_thing')->name('create_1');
Route::post('/create/0','ProofController@create_proof_img')->name('create_0');
