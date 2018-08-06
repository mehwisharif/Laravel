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
    //return view('template/pages/index');
//});
// Route::get('home', function () {
// 	//echo "string";die;
//     return view('template/pages/index');
// });
//Route::get('about', function () {
    //return view('template/pages/about');
//});
// Route::get('contact', function () {
//     return view('template/pages/contact');
// });
//Route::get('signin', function () {
   // return view('template/pages/signin');
//});
//Route::get('signup', function () {
    //return view('template/pages/signup');
//});
// Route::get('categories', function () {
//     return view('template/pages/categories');
// });
// Route::get('addpost', function () {
//     return view('template/pages/addpost');
// });

Auth::routes();

//Route::get('/home', 'HomeController@index');
Route::get('/', 'PageController@index');
Route::get('home', 'PageController@home');
Route::get('about', 'PageController@about');


Route::get('contact', 'PageController@contact');




Route::get('categories', 'CategoryController@categories');
// Route::get('categories', 'CategoryController@postLogin');
Route::post('savecategory', 'CategoryController@SaveCat');
Route::delete('delcat/{id}', 'CategoryController@delcat');
Route::get('editcat/{id}', 'CategoryController@editcat');
Route::post('updatecat', 'CategoryController@updatecat');
Route::get('allcategories', 'CategoryController@allcategories');




Route::get('signin', 'RegisterController@signin');
Route::post('signin', 'RegisterController@postLogin');

Route::get('logout', 'RegisterController@logout');




Route::get('signup', 'RegisterController@signup');
Route::post('adduser', 'RegisterController@adduser');
Route::get('allusers', 'RegisterController@allusers');
Route::delete('deluser/{id}', 'RegisterController@deluser');
Route::get('edituser/{id}', 'RegisterController@edituser');
Route::post('updateuser', 'RegisterController@updateuser');





Route::get('addpost', 'PostController@post');
// Route::get('addpost', 'PostController@postLogin');
Route::post('savepost', 'PostController@savepost');
Route::get('allpost', 'PostController@allpost');
Route::delete('delpost/{id}', 'PostController@delpost');
Route::get('editpost/{id}', 'PostController@editpost');
Route::post('updatepost', 'PostController@updatepost');

