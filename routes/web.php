<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

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

Route::get('/getAllProjects', [ProjectController::class, 'getAllProjects']);
Route::get('/insertProject', [ProjectController::class, 'insertProject']);
Route::get('/updateProject', [ProjectController::class, 'updateProject']);
Route::get('/deleteProject', [ProjectController::class, 'deleteProject']);