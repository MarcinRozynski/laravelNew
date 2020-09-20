<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

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


Route::get('/', [NewsController::class, 'getAuthors']);
Route::get('/articles', [NewsController::class, 'getArticles']);
Route::get('/article/{news}', [NewsController::class, 'article']);
Route::get('/top', [NewsController::class, 'getTop']);
Route::get('/authors', [NewsController::class, 'showAuthors']);
Route::get('/author/{user}', [NewsController::class, 'index']);
Route::POST('submit', [NewsController::class, 'save']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');