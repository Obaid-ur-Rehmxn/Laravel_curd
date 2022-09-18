<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\curdcontroller;

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

Route::get('/', [curdcontroller::class, 'index']);
Route::get('/new_feedback', [curdcontroller::class, 'add']);
Route::post('/add_feedback', [curdcontroller::class, 'new']);
Route::get('/edit_feedback/{id}', [curdcontroller::class, 'edit']);
Route::post('/update_feedback/{id}', [curdcontroller::class, 'update']);
Route::get('/delete_feedback/{id}', [curdcontroller::class, 'destroy']);
