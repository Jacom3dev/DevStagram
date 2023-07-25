<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('app');
})->name('home');


/* auth */
Route::get('auth/login', [AuthController::class,'index'])->name('login');
Route::post('auth/login', [AuthController::class,'store'])->name('login');
Route::delete('auth/logout', [AuthController::class,'destroy'])->name('logout');

/* register */
Route::get('register', [RegisterController::class,'index'])->name('register');
Route::post('register', [RegisterController::class,'store'])->name('register');

/* profile */
Route::get('profile-edit',[ProfileController::class,'edit'])->name('profile.edit');
Route::put('profile-edit',[ProfileController::class,'update'])->name('profile.update');

/* posts */
Route::get('{user:username}', [PostController::class,'index'])->name('post.index');
Route::get('post/create', [PostController::class,'create'])->name('post.create');
Route::post('post', [PostController::class,'store'])->name('post.store');
Route::get('{user:username}/post/{post}', [PostController::class,'show'])->name('post.show');
Route::delete('post/{post}', [PostController::class,'destroy'])->name('post.destroy');

/* comments */
Route::post('{user:username}/post/{post}',[CommentController::class,'store'])->name('comment.store');

/* images */
Route::post('upload', [ImageController::class,'store'])->name('image.store');


/* likes */
Route::post('post/{post}/likes',[LikeController::class,'store'])->name('post.likes.store');
Route::delete('post/{post}/likes',[LikeController::class,'destroy'])->name('post.likes.destroy');



