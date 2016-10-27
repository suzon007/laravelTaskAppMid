<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/tasks', 'TaskController@index');
Route::post('/tasks', 'TaskController@store');
Route::delete('/tasks/{task}', 'TaskController@destroy');


/**
 * Destroy the given task.
 *
 * @param  Request  $request
 * @param  Task  $task
 * @return Response
 */
// public function destroy(Request $request, Task $task)
// {
//     //
// }
