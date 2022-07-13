<?php

use Illuminate\Support\Facades\Route;


Route::get('/',function(){
    
    $uuid = '123e4567-e89b-12d3-a456-426614174000'; //hardcoded for testing

    return view('test_form',compact('uuid'));
});
