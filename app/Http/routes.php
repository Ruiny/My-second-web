<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {

    return "<h1>This is the header 1</h1>";

});

Route::get('/test', function () {
    $network=array("abc","def");
    return view("test",["name"=>$network]);
});

Route::get('/abc/{name?}', function ($name=null) {
    return "Hello ".$name;
});

Route::get('/hello/{name?}', function ($name=null) {
    return view("test",["name"=>$name]);
});


// all routes about product
Route::get('/products', 'ProductController@index');
Route::get('/product/show/{id}', 'ProductController@show');
Route::get('/product/edit/{id?}', 'ProductController@edit');
Route::get('/product/save/{id?}', 'ProductController@save');
Route::get('/product/delete/{id}', 'ProductController@delete');

Route::get('/product/testsend', 'ProductController@testsend');
Route::get('/product/testreceive', 'ProductController@testreceive');

Route::get('/main', 'ProductController@main');

Route::get('/reg/profile', ['middleware' => 'age', function()
{
    return "You are welcome!";
}]);

Route::get('/user/login', 'UserController@login');
Route::get('/user/submitLogin', 'UserController@submitLogin');



Route::get('/welcome', ['middleware' => 'myauth',function () {
    return view("welcome");
}]);