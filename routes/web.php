<?php

use App\Task;

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
    return redirect('/tasks/1');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/tasks', 'indexController@index')->name('index');
Route::get('tasks/completed', 'TaskController@indexcompleted')->name('indexcompleted');
Route::get('/tasks/{channel}', 'indexController@index')->name('index');
Route::get('/create', 'TaskController@create')->name('create');
Route::post('/store', 'TaskController@store')->name('store');
Route::get('/createchannel', 'TaskController@createchannel')->name('createchannel');
Route::post('/storechannel', 'TaskController@storechannel')->name('storechannel');

Route::get('tasks/edit/{id}', 'TaskController@edit')->name('edit');
Route::patch('tasks/edit/{id}', 'TaskController@update')->name('update');



Route::patch('tasks/complete/{id}', 'TaskController@complete')->name('complete');
Route::patch('tasks/focus/{id}', 'TaskController@focus')->name('focus');
Route::patch('tasks/grey/{id}', 'TaskController@grey')->name('grey');
Route::get('/test', function () {
    return view('test');
});


Route::delete('/task/{task}', function (Task $task) {
    $task->delete();

    return back();
})->name('delete');
