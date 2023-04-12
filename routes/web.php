<?php

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('home');
})->name('home'); // Lo del name es para darle un nombre a cada ruta para poder construir los enlaces

Route::get('/blog', function(){
    $posts = [
        ['id' => 1, 'title' => 'PHP', 'slug' => 'php'],
        ['id' => 2, 'title' => 'Laravel', 'slug' => 'laravel']
    ];
    return view('blog',['posts' => $posts]);
    // return ('Hola, blog');
})->name('blog');

Route::get('/user', function(){
    return ('Hola, user')->name('blog');
})->name('user');

Route::get('/blog/{slug}', function($slug){
    $post = $slug;
    return view('post',['post' => $post]);
    // return $slug;
})->name('post');



// Route::get('buscar', function(Request $request){
//     return $request->all();
// });
/* /buscar?query=php */

