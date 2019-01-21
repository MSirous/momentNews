<?php

use Illuminate\Http\Request;

//Route::get('/news', 'NewsController@index');
Route::middleware('auth:api')->group(function () {
//    Route::get('/newsSend', 'NewsController@store');
});
