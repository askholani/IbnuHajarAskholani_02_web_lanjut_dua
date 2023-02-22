<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageContoller;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticlesController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/' ,[PageContoller::class, 'index']);
// Route::get('/about' ,[PageContoller::class, 'about']);
// Route::get('/articles/{id}' ,[PageContoller::class, 'articles']);

Route::get('/articles/{id}' ,[ArticlesController::class, 'articles']);
Route::get('/about' ,[AboutController::class, 'about']);
Route::get('/' ,[HomeController::class, 'index']);
