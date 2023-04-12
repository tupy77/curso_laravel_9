<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return ('Hola, por fin');
});

Route::get('/blog', function(){
    return ('Hola, blog');
});

Route::get('/user', function(){
    return ('Hola, user');
});

Route::get('/user/{slug}', function($slug){
    return $slug;
});

Route::get('buscar', function(Request $request){
    return $request->all();
});
/* /buscar?query=php */
