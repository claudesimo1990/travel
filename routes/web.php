<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Booking\BookingController;
use App\Http\Controllers\Profile\ProfileController;
use App\Http\Controllers\Site\AppController;
use App\Http\Controllers\Posts\PostsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AppController::class, 'home'])->name('app.home');
Route::get('/posts', [PostsController::class, 'index'])->name('posts.index');
Route::get('/posts/travels/create', [PostsController::class, 'travels'])->name('posts.travel.create');
Route::get('/posts/coli/create', [PostsController::class, 'coli'])->name('posts.coli.create');

//BOOKING
Route::get('/posts/{post:slug}', [BookingController::class, 'show'])->name('post.show');
Route::post('posts/{post:slug}/travel', [BookingController::class, 'travel'])->name('post.booking');

//AUTH
Route::get('/login', [LoginController::class, 'form'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/register', [RegisterController::class, 'form'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

//PROFILE
Route::get('/profile/{user}', [ProfileController::class, 'show'])->name('profile.show');
Route::get('/profile/{user}/account', [ProfileController::class, 'account'])->name('profile.account');
Route::get('/profile/{user}/password', [ProfileController::class, 'password'])->name('profile.password');
Route::get('/profile/{user}/notifications', [ProfileController::class, 'notifications'])->name('profile.notifications');
Route::get('/profile/{user}/posts', [ProfileController::class, 'posts'])->name('profile.posts');

