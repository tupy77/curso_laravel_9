<?php

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('home');
});

Route::get('/blog', function(){
    $posts = [
        ['id' => 1, 'title' => 'PHP', 'slug' => 'php'],
        ['id' => 2, 'title' => 'Laravel', 'slug' => 'laravel']
    ];
    return view('blog',['posts' => $posts]);
    // return ('Hola, blog');
});

Route::get('/user', function(){
    return ('Hola, user');
});

Route::get('/blog/{slug}', function($slug){
    $post = $slug;
    return view('post',['post' => $post]);
    // return $slug;
});



// Route::get('buscar', function(Request $request){
//     return $request->all();
// });
/* /buscar?query=php */

