<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\PostController;

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

//Route::get('/form', function () {return view('form');});


Route::get('/',[PostController::class,'index']);
 Route::get('/create', function () {
     return view('form');
 });
// Route::post("/form",[PostController::class,'create'])->name('admin.create');

Route::post("/post",[PostController::class,'store']);








Route::get('/form' , [TodoController::class, 'form'])->name('form');

Route::resource('todos' ,TodoController::class);

Route::get('/todos/create',[TodoController::class,'create']);
Route::post('/todos/store',[TodoController::class,'store']);






