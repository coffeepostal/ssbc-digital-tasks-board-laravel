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

Route::get('/', 'PagesController@index');
Route::get('/task-board', 'PagesController@task_board');
Route::get('/brew-details', 'PagesController@brew_details');

Route::resource('tasks', 'TasksController');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
