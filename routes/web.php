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
/*Route::get('/hello', function(){
	return ('Hello World');
});
Route::get('/welcome', function(){
	return 'Selamat Datang';
});
Route::get('/about', function(){
	return 'NIM : 1931710048 <br> NAMA : VENINA YULIYA';
});
Route::get('/articles/{id}', function($id){
	return 'Halaman artikel ini dengan id '.$id;
});

Route::get('/welcome', 'PageController@welcome');
Route::get('/about', 'PageController@about');
Route::get('/articles/{page}', 'PageController@articles');

Route::get('/welcome', 'HomeController@welcome');
Route::get('/about', 'AboutController@about');
Route::get('/articles/{page}', 'ArticleController@articles');

Route::get('/hello', function(){
	return view('hello', ['name'=> 'Andi']);
});

Route::get('/hello', 'WelcomeController@hello');
Route::get('/home', 'HomeController@home');
Route::get('/about', 'AboutController@about');
Route::get('/article/{id}', 'ArticleController@article');
Route::get('/master', 'MasterController@master');
Route::get('/index', 'HomeController@index');*/

//KUIS 1 PWL
Route::get('/all', 'Home1Controller@getAll');
Route::get('/find/{id}', 'ArticleController@getById');
//Route::get('/halopas', 'BerandaController@halopas');
Route::get('/contact', 'ContactController@contact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/manage', 'Home1Controller@index')->name('manage');
Route::get('/article/add','Home1Controller@add');
Route::post('/article/create','Home1Controller@create');
Route::get('/article/edit/{id}','Home1Controller@edit');
Route::post('/article/update/{id}','Home1Controller@update');
Route::get('/article/delete/{id}','Home1Controller@delete');

Route::get('/kelolauser', 'UserController@index')->name('kelolauser');
Route::get('/user/add', 'UserController@add');
Route::post('/user/create','UserController@create');
Route::get('/user/edit/{id}', 'UserController@edit');
Route::post('/user/update/{id}', 'UserController@update');
Route::get('user/delete/{id}', 'UserController@delete');

Route::get('article/cetak_pdf', 'Home1Controller@cetak_pdf');