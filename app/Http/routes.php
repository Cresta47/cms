<?php
use App\Test;
use App\Section;
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
    DB::insert('insert into tests(title,body) value(?,?)',['Ruby With Laravel','Try it bro .Its awesome.']);
});

Route::get('/read',function(){
    $data=DB::select('select * from tests where test_id=?',[1]);
   foreach ($data as $test){
       return $test->title;
   }
});

Route::get('/update',function(){
    DB::update('update test set title=? where test_id=?',['PHP','1']);
    $data=DB::select('select * from tests where test_id=?',[1]);
    foreach ($data as $test){
        return $test->title;
    }

});

Route::get('/delete',function(){
    $result=DB::delete('delete from tests where test_id=?',[1]);
    return $result;
});

Route::get('/extract',function(){
   $tests=Test::find(2);

    //foreach ($tests as $test){
        return $tests->title;
    //}
});

Route::get('/insertSec',function(){
    DB::insert('insert into section(section_name) values(?)',['A']);
});

Route::get('/extractsec',function(){
    $sections=App\Section::find('1');

         return $sections->section_name;

});

Route::get('/findwhere',function(){
   $tests=App\Test::where(['test_id'=>2]);
//    foreach ($tests as $test) {
        return $tests;
//    }
});

Route::get('/findsection',function(){
    $sections=Section::where('section_id',2);
    foreach (sections as $section) {
    return $section->title;
    }
});