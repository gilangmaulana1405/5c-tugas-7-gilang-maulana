<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ForumController;

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
Route::get('/forum', [ForumController::class, 'index']);
Route::get('/', [ForumController::class, 'index']);

Route::get('/forumForm', [ForumController::class, 'show'])->name('forumForm');
Route::get('/deleteForum/{$id}', [ForumController::class, 'delete'])->name('deleteForum');
Route::post('/createForum', [ForumController::class, 'insert'])->name('createForum');

Route::get('/insertUserForm', [UserController::class, 'show'])->name('InserUserForm');
Route::delete('/deleteUser/{$id}', [UserController::class, 'destroy'])->name('deleteUser');
Route::post('/insertUser', [UserController::class, 'insert'])->name('insertUser');
