<?php

use App\Models\Task;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CategoriesController;


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
    return view('home' , [
        "title" => "Home"
    ]);
})->middleware('auth');

Route::get('/tasks', [TasksController::class, 'index'])->middleware('auth');
Route::get('/task--{id}', [TasksController::class, 'show'])->middleware('auth');
Route::get('/task-add', [TasksController::class, 'create'])->middleware('auth');
Route::post('/task', [TasksController::class, 'store'])->middleware('auth');
Route::get('/task-delete{id}', [TasksController::class, 'destroy'])->middleware('auth');
Route::get('/task-edit{id}', [TasksController::class, 'edit'])->middleware('auth');
Route::post('/tasks-update{id}', [TasksController::class, 'update'])->middleware('auth');

Route::get('/categories', [CategoriesController::class, 'index'])->middleware('auth');
Route::get('/category-add', [CategoriesController::class, 'create'])->middleware('auth');
Route::post('/category', [CategoriesController::class, 'store'])->middleware('auth');
Route::get('/category-delete{id}', [CategoriesController::class, 'destroy'])->middleware('auth');
Route::get('/category-edit{id}', [CategoriesController::class, 'edit'])->middleware('auth');
Route::post('/category-update{id}', [CategoriesController::class, 'update'])->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);