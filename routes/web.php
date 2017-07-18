<?php

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

$welcomeController = function () {
    return view('welcome');
};
Route::get('/', $welcomeController);
$tasksController = function (){
    echo 'You are here, tasksController';
};
Route::get('/tasks', $tasksController);
$tasksCreateController = function (){

};
Route::get('/tasks/create', $tasksCreateController)->name('tasks.create');
