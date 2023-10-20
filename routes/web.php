<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

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
    return view('front.layout.index');
});
Route::get('/singlepost', function () {
    return view('front.pages.singlepost');
});
Route::get('/components', function () {
    return view('front.pages.components');
});
Route::get('/nosidebar', function () {
    return view('front.pages.nosidebar');
});


Route::get("/", [HomeController::class, "index"]);


Route::get('/dashboard', [AdminHomeController:: class, "index"]);
Route::get('/posts', [PostController:: class, "index"])->name('posts.index');
Route::get('/posts/create', [PostController:: class, "create"])->name('posts.create');
Route::post('/posts/store', [PostController:: class, "store"])->name('posts.store');
Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.delete');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{id}', [PostController::class, 'update'])->name('posts.update');
Route::resource('comments', CommentController::class);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
