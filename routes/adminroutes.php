<?php
use Illuminate\Support\Facades\Route;
//for superadmin

Route::group(['prefix' => 'backside/admin', 'as' => 'backside.admin.'], function () {
    //    auth
    Route::get('register', ['as' => 'register', 'uses' => 'Auth\AdminRegisterController@create']);
    Route::post('register', ['as' => 'registered', 'uses' => 'Auth\AdminRegisterController@store']);
    Route::post('logout', ['as' => 'logout', 'uses' => 'Auth\AdminLoginController@logout']);
    Route::get('login', ['as' => 'login', 'uses' => 'Auth\AdminLoginController@loginform']);
    Route::post('login', ['as' => 'logined', 'uses' => 'Auth\AdminLoginController@login']);



});


?>
