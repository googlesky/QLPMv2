<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function () {
    return View::make('login');
});

/*Code route của trang login*/

Route::get('login.app', function () {
    return View::make('login');
});

Route::post('take_login.app', function () {
    $ipall = Input::all();
//    var_dump($ipall);
    return View::make('action.take_login', array(
        'USERNAME' => $ipall['USERNAME'],
        'PASSWORD' => $ipall['PASSWORD']
    ));
});

/*LogOut*/

Route::get('logout.app',function(){
    return View::make('action.take_logout');
});

/*Code cho trang admin CP*/

Route::get('admincp.app',function(){
    return 'this is admin cp';
});

/*Other Code*/

Route::get('test.app', function () {
    $temp = DB::table('NGUOIDUNG')->where('USERNAME', 'lphieu')->first();
    echo $temp->ID;
//    var_dump($temp);
});

