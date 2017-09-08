<?php

Route::get('testing', function(){
    echo 'Hello from Reta110 package';
});

Route::get('add/{a}/{b}', 'Reta110\Test\TestController@add');
Route::get('subtract/{a}/{b}', 'Reta110\Test\TestController@subtract');