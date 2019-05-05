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




Route::get ('/register',function () {
    return view('register');

});

Route::get('/', function () {
    return view('welcome');

});



/*Route::get('/register', function () {
    return view('register');
    
});*/


Route::get('/saveData', function () {
    return view('saveData',[

    	
    	'email' => request('email'),
    	'password' => request('password')


    ]


);
    
});







Route::get('/login', function () {
    return view('login');
    
});

Auth::routes();




Route::get('/home', function () {
    return view('welcome');;}
)->middleware('auth');



Route::get('/insertProject', function () {
    return view('newProject');;}
)->middleware('auth');



Route::get('/insertProjectDB','ProjectsController@insertProject')->middleware('auth');

Route::get('/editProject', function () {
    return view('editProject');;})->middleware('auth');

Route::get('/editProjectAction','ProjectsController@edit')->middleware('auth');



?>


