<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\CommentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::post('/users/{id}/comments', [CommentController::class, 'store'])->name('comment.store');
Route::get('/users/{id}/comments/create', [CommentController::class, 'create'])->name('comments.create');
Route::get('/users/{id}/comments', [CommentController::class, 'index'])->name('comments.index');

Route::Delete('users/{id}', [UserController::class, 'destroy'])->name('user.destroy');
Route::put('/users/{id}', [UserController::class, 'update'])->name('user.update');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('user.store');
Route::get('/users/{id}', [UserController::class, 'show'])->name('user.show');




Route::get('/', function () {
    return view('welcome');
});