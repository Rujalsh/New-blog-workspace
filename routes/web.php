<?php

use App\Services\Newsletter;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Middleware\MustBeAdministrator;
use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PostCommentsController;

Route::get('/dashboard', [NavController::class, 'dashboard'])->name('dashboard');

Route::get('/about', [NavController::class, 'about'])->name('about');
Route::get('/contact', [NavController::class, 'showContactUs'])->name('contact');

Route::get('/', [PostController::class, 'index'])->name('home');


Route::get('/posts/{post:slug}', [PostController::class, 'show']);
Route::post('/posts/{post:slug}/comments', [PostCommentsController::class, 'store']);

Route::post('newsletter', NewsletterController::class);

Route::get('register',[RegisterController::class, 'create'])->middleware('guest');

Route::post('register',[RegisterController::class, 'store'])->middleware('guest');

Route::get('login',[SessionsController::class, 'create'])->middleware('guest')->name('login');
Route::post('login',[SessionsController::class, 'store'])->middleware('guest');

Route::post('logout',[SessionsController::class, 'destroy'])->middleware('auth');

// Route::get('admin/dashboard', function () {
//     return view('admin.dashboard');
// });


Route::middleware('can:admin')->group(function () {
    // Route::resource('admin/posts', AdminPostController::class)->except('show');

    //*****Individual Route **********//
    Route::post('admin/posts', [AdminPostController::class, 'store']);
    Route::get('admin/posts/create', [AdminPostController::class, 'create']);

    Route::get('admin/posts',[AdminPostController::class, 'index']);
    Route::get('admin/posts/{post}/edit', [AdminPostController::class, 'edit']);

    Route::patch('admin/posts/{post}', [AdminPostController::class, 'update']);
    Route::delete('admin/posts/{post}', [AdminPostController::class, 'destory']);

});
//************ */ previous code********
// Route::get('admin/posts/create',[PostController::class, 'create']);
// Route::post('admin/posts',[PostController::class, 'store']);
// Route::get('admin/posts/create',[PostController::class, 'create'])->middleware('admin');
// Route::post('admin/posts',[PostController::class, 'store'])->middleware('admin');


// ->middleware((MustBeAdministrator::class))
