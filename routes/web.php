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

Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");
Route::get('/about', 'App\Http\Controllers\HomeController@about')->name("home.about");

Route::get('/job_openings', 'App\Http\Controllers\JobOpeningsController@index')->name("job_openings.index");
Route::get('/job_openings/detail/{id}', 'App\Http\Controllers\JobOpeningsController@detail')->name("job_openings.detail");

Route::get('/admin', 'App\Http\Controllers\AdminHomeController@index')->name("admin.home.index");
Route::get('/admin/job_openings', 'App\Http\Controllers\AdminJobOpeningsController@index')->name("admin.job_openings.index");
Route::get('/admin/job_openings/create', 'App\Http\Controllers\AdminJobOpeningsController@create')->name("admin.job_openings.create");
Route::post('/admin/job_openings/store', 'App\Http\Controllers\AdminJobOpeningsController@store')->name("admin.job_openings.store");
Route::post('/admin/job_openings/{id}/delete', 'App\Http\Controllers\AdminJobOpeningsController@delete')->name("admin.job_openings.delete");
Route::get('/admin/job_openings/{id}/edit', 'App\Http\Controllers\AdminJobOpeningsController@edit')->name("admin.job_openings.edit");
Route::post('/admin/job_openings/{id}/update', 'App\Http\Controllers\AdminJobOpeningsController@update')->name("admin.job_openings.update");

Auth::routes();
