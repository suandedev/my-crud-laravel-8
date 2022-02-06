<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChairController;

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

Route::get('/chair', [ChairController::class, 'index']);
Route::get('/chair/create', [ChairController::class, 'create']);
Route::post('/chair/store', [ChairController::class, 'store']);
Route::get('/chair/{id}/edit', [ChairController::class, 'edit']);
Route::put('/chair/{id}/update', [ChairController::class, 'update']);
Route::delete('/chair/{id}/delete', [ChairController::class, 'delete']);
Route::get('/chair/{id}/show', [ChairController::class, 'show']);
