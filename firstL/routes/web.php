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

//myexamples:

Route::get('/test', function () {
    return view('example');
});

Route::view('/test1', 'welcome'); //'/test1' -> view('example');

Route::get('/test2', function () {
    return redirect('/test');
});

Route::redirect('/test3','/');// '/test3' -> '/'

Route::get('/test3', function(){
	return "This my test3";
});

Route::get('/testid/{id}', function($id){
	return "My id:".$id;
});

Route::get('/testids/{id?}', function($id='123'){
	return "My id static:".$id;
});

Route::get('/testidname/{id}/{name}', function($id, $name){
	return view('example').$id." ".$name;
});

Route::get('/contain/{age}/{name?}', function($age, $name = null){
	return 'Your age: '.$age.' '.'Your name:'.$name;
})->where('name', '[a-zA-Z]+');

Route::get('/contain2/{id}/{name?}', function($id, $name=null){
	return "id: ".$id."Name:".$name;
})->where(['id'=>'[0-9]+', 'name'=>'[a-zA-Z]+']);

Route::get('/providers/{sos?}', function($sos=null){
	return "Providers->RouteService..->function boot :".$sos;
});

Route::get('/hw/{name}/{surname}', function($name, $surname){
	return view('example').$name.'<br> '.view('ex').$surname;
});