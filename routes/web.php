<?php

use App\Notifications\NewVisit;
use App\Notifications\InvoicePaid;
use App\User;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Abrahim-package');
});


Route::get('/file','FileController@index');

Route::post('/uploads','FileController@showupload');

Route::get('/download/{id}','FileController@add');

Route::get('/notify', function(){
    
    $user = User::find(1);
    
    $user->notify(new InvoicePaid("A new user has visited on your application."));
 
  return view('welcome');
    
});

/*---------------------------------------*/

Route::get('/post','PostController@index');

Route::post('/posts/create','PostController@store');

Route::get('/show','PostController@show')->name('home');


/*-------proper working if uncomment-----------*/

// Route::get('/register','RegistrationController@create');
// Route::post('/register','RegistrationController@store');

// Route::get('/login','SessionsController@create');
// Route::post('/login','SessionsController@store');

// Route::get('/logout','SessionsController@destroy');
/*------------------------------*/




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('subs',function(){
    
    if (Gate::allows('subs-only', Auth::user())) {
        return view('subs');
    }
    else{
        
        return 'you are not subscriber';
    }
});


Route::get('/test', 'TestController@store');


Route::get('twitterUserTimeLine', 'TwitterController@twitterUserTimeLine');
Route::get('twitterUserTimeLineSecond', 'TwitterSecondController@twitterUserTimeLine');

Route::post('tweet', ['as'=>'post.tweet','uses'=>'TwitterController@tweet']);
Route::post('tweetsecond', ['as'=>'postsecond.tweetsecond','uses'=>'TwitterSecondController@tweet']);