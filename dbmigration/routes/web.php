<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Filesystem\Filesystem;
use App\Services\Twitter;
use App\Repositories\UserRepositoriy;

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

/*  

 GET /projects (index)

 GET /projects/create (create)

 GET /projects/1 (show)

 POST /projects (store)

 GET /projects/1/edit (edit)

 PATCH /projects/1 (update)

 DELETE /projects/1 (destroy)

*/

// app()->singleton('App\Services\Twitter', function () {
//     return new App\Services\Twitter('sdfdsfdsfsfdsfds');
// });



//services & providers 

// Route::get('/', function (Twitter $twitter) {
//     // it is for provider 
//     dd($twitter);

//     // it is for only service
//     //dd('App\Example');

//     return view('welcome');
// });


// for interfaces here 
// Route::get('/', function (UserRepositoriy $user) {

//     dd($user);

//     return view('welcome');
// });

Route::get('/', function (Twitter $twitter) {

    //dd($twitter);

    return view('welcome');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::resource('projects', 'ProjectsController');

Route::post('projects/{project}/tasks', 'ProjectTasksController@store');

//Route::patch('tasks/{task}', 'ProjectTasksController@update');

Route::post('completed-tsks/{task}', 'CompletedTasksController@store');

Route::delete('completed-tsks/{task}', 'CompletedTasksController@destroy');
