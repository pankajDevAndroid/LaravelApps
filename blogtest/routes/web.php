<?php
use Illuminate\Support\Facades\Route;

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


Route::get('/','PagesController@home');
Route::get('/profile','PagesController@profile');
Route::get('/about','PagesController@about');

// Route::get('/', function () {
//     $technology = [
//         'React JS',
//         'React Native',
//         'Laravel',
//         'Android'
//     ];

//     //return view('welcome')->withParams($technology)->withFoo('foo');


//     // return view('welcome')->with([
//     //     'params' => $technology,
//     //     'foo' => 'fooing'
//     // ]);


//     return view('welcome', [
//         'params' => $technology,
//         'foo'=> 'testing param',
//         // 'foo'=> request('title'),
//         // 'foo'=> '<script>alert("Testing Alert")</script>',
//     ]);

// });


// Route::get('/profile', function () {
//     return view('profile');
// });

// Route::get('/about', function () {
//     return view('about');
// });
