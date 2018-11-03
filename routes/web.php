<?php

 

 // $stripe= resolve('App\Billing\Stripe');

 // dd($stripe);



//Route::get('/tasks','TasksController@index'); 

//Route::get('/tasks/{task}','TasksController@show');

Route::get('/','PostsController@index')->name('home');

Route::get('posts/create','PostsController@create');

Route::post('/posts','PostsController@store');

Route::get('/posts/{post}','PostsController@show');

Route::get('/posts/tags/{tag}','TagsController@index');

Route::post('/posts/{post}/comments','CommentsController@store');

Route::get('/register','RegistrationController@create');

Route::post('register','RegistrationController@store');

Route::get('/login1','SessionsController@create');

Route::post('/login','SessionsController@store');

Route::get('/logout','SessionsController@destroy');


Route::get("/demo", function(){
 
  return view('demo');
});