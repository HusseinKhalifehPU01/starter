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

//return view a html page and this is a mistake call the view from controller
//Route::get('/', function () {
//    $data=[];
//    $data['id'] = 5;
//    $data['name'] = 'Hussein Khalifeh';
//    return view('welcome',$data) ;
//});
//
//
//Route::get('index', 'Front\UserController@getIndex');
//
////return string
//Route::get('/test1', function () {
//    return 'welcome to first page with route';
//});
//
//
//Route::get('/landing',function(){
//    return view('landing') ;
//});
//
//
//Route::get('/about',function(){
//    return view('about') ;
//});
//
////required parameter
//Route::get('/test2/{id}', function ($id) {
//    return $id;
//});
//
////optional parameter
//Route::get('/test3/{id?}', function ($id) {
//    return 'welcome: '.$id;
//});
//
//
////route name
//Route::get('/show-number/{id}', function ($id) {
//    return $id;
//}) -> name('a');
//
//
//Route::get('/test3/{id?}', function () {
//    return 'welcome';
//}) -> name('b');
//
//
//Route::namespace('Front')->group(function(){
//    //all route only access controller or methods in folder name Front
////    Route::get('users','UserController@showUserName');
////    Route::get('users1','UserController2@showUserName2');
//});


//
////groups
//Route::prefix('user') ->group(function(){
//
////    Route::get('show','UserController@showUserName');
////    Route::get('delete','UserController2@showUserName');
////    Route::get('edit','UserController2@showUserName');
////    Route::get('update','UserController2@showUserName');
//});

//
//Route::group(['prefix' => 'users', 'middleware' => 'auth'],function(){
//
//    //set of routes
//    Route::get('/',function(){
//        return 'work';
//    });
////    Route::get('show','UserController@showUserName');
////    Route::get('delete','UserController2@showUserName');
////    Route::get('edit','UserController2@showUserName');
////    Route::get('update','UserController2@showUserName');
//});


//Route::get('check',function(){
//    return 'middleware';
//}) -> middleware('auth');
//
//
//Route::fallback(function () {
//    //
//    return 'Error 404 page not found';
//});
//
//
//Route::group(['namespace' => 'Admin'],function(){
//
//    Route::get('second','SecondController@showString0') ;
//    Route::get('second1','SecondController@showString1') -> middleware('auth') ;
//    Route::get('second2','SecondController@showString2');
//    Route::get('second3','SecondController@showString3');
//});
//
//
//Route::get('login',function(){
//   return 'must be log in to visit this route';
//}) -> name('login');
//
//
//Route::resource('news','NewsController');

Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])-> name('home')-> middleware('verified');


Route::get('/', function () {
    return 'Home';
});


Route::get('/dashboard', function () {
    return 'dashboard';
});

