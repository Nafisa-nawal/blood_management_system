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

Route::get('/', 'FrontController@index')->name('home.index');

Route::group(['prefix'=>'home'],function(){

    Route::get('/', 'HomeController@index')->name('home.index');
    

});




Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){

    Route::get('/','Admin\AdminController@index')->name('admin.index');
    
   

    Route::get('/user-management','Admin\UserManagementController@index')->name('admin-usermanagement.list');

    Route::get('/user-management/user-approve/{user_id}','Admin\UserManagementController@approve')->name('admin-usermanagement.user-approved');

    Route::get('/user-management/user-block/{user_id}','Admin\UserManagementController@block')->name('admin-usermanagement.user-block');
    
    
 
});

Route::group(['prefix'=>'user','middleware'=>'auth'],function(){

    Route::get('/','User\UserController@index')->name('user.index'); // show user dashboard
    
    Route::get('/profile/{user_id}','User\UserController@info')->name('user.profile');// show user Info
    Route::get('/Changeprofile/{user_id}','User\UserController@change_info')->name('userChange.profile');
    Route::post('/Changeprofile/{user_id}','User\UserController@update_info');
    
    Route::get('/needblood/create','User\BloodNeedController@create')->name('bloodneed.create'); //create Blood Request
    Route::post('/needblood/create','User\BloodNeedController@store');// Post method
    
    Route::get('/needblood/history','User\BloodNeedController@index')->name('bloodneed.history'); // Show all blood request create history

    Route::get('/needblood/edit/{id}','User\BloodNeedController@edit')->name('bloodneed.edit'); //edit Blood Request
    Route::post('/needblood/edit/{id}','User\BloodNeedController@update');// edit Post method

    Route::get('/needblood/response/{id}','User\BloodNeedController@response')->name('bloodneed.response'); //taking blood
    Route::post('/needblood/response/{id}','User\BloodNeedController@response_update');// taking blood Post method

    Route::get('/needblood/delete/{id}','User\BloodNeedController@destroy')->name('bloodneed.delete'); //delete Blood Request

    Route::get('/donateblood/available-post','User\DonateBloodController@index')->name('donate.available'); // Show all blood request history
    
    Route::get('/donateblood/donate/{id}','User\DonateBloodController@edit')->name('donate.process'); //donate
    Route::post('/donateblood/donate/{id}','User\DonateBloodController@update');// donate Post method

    Route::get('/donateblood/history','User\DonateBloodController@history')->name('donate.history'); // Show all blood request history


    Route::get('/donar-list','User\DonarController@index')->name('donar.list'); //donar's list with filter
    Route::post('/donar-list','User\DonarController@filter'); //donar's list
 
    
 
     
     
 
 });





Auth::routes(); //authentication 

Route::get('/logout', 'LogoutController@index')->name('logout');;


