<?php
//
///*
//|--------------------------------------------------------------------------
//| Application Routes
//|--------------------------------------------------------------------------
//|
//| Here is where you can register all of the routes for an application.
//| It's a breeze. Simply tell Laravel the URIs it should respond to
//| and give it the controller to call when that URI is requested.
//|
//*/
//
//Route::get('/fuck', function () {
//    //return view('welcome');
//    return "Fuck U";
//});
//
Route::get('/', function () {
    return view('welcome');

});

//
//Route::get('/post/{id}', function ($id) {
//    //return view('welcome');
//    return "$id";
//});
//
//Route::get('post/admin/examples',array('as'=>'admin.post',function(){
//    $url=route('admin.post');
//    return "This url is ".$url;
//}));


//Route::get('/a/{x}','PostController');

//Route::resource('post','PostController');

Route::get('contact','PostController@contact');

Route::get('posture/{id}/{name}/{pass}','PostController@posture');

Route::get('/insert',function(){
    DB::insert('insert into test(title,body) value(?,?)',['PHP With Laravel','Try it bro .Its awesome.']);
});