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
Route::get("/",function(){
        //$user = new User;
        $path = (new ReflectionClass("Str"))->getFileName();
        //$func = (new ReflectionFunction("array_map"))->getNumberOfParameters();
        var_dump($path);
        //dd(get_declared_classes());
});

//Route::get("/","RemindersController@getRemind");
//Route::post("postRemind","RemindersController@postRemind");


