<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JournalController;


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
    return view('welcome');
});
Route::get('/journal', 'App\Http\Controllers\JournalController@index')->name('journal.index');
Route::get('/journal/create', 'App\Http\Controllers\JournalController@create')->name('journal.create');
Route::post('/journal', 'App\Http\Controllers\JournalController@store')->name('journal.store');
Route::delete('/journal/{id}', 'App\Http\Controllers\JournalController@destroy')->name('journal.destroy');
Route::get('/journal/{id}/edit', 'App\Http\Controllers\JournalController@edit')->name('journal.edit');
Route::put('/journal/{id}', 'App\Http\Controllers\JournalController@update')->name('journal.update');
Route::get('/journal/{id}', 'App\Http\Controllers\JournalController@show')->name('journal.show');

Route::get('/test', [JournalController::class, 'test']);
