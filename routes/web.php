<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserClothesController;
use App\Http\Controllers\UploadController;


Route::get('/postc', [UserClothesController::class, 'index'])->name('postc');

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
    return view('home');
});

Route::get('/home', function () {
    return view('home');
})->name('home');
//



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/post/title', [PostController::class, 'title'])->name('post.title');
    Route::get('/post/select', [PostController::class, 'select'])->name('post.select');
    Route::get('/post/recommend', [PostController::class, 'recommend'])->name('post.recommend');
    Route::get('/post/decision', [PostController::class, 'decision'])->name('post.decision');
    Route::get('/post/chat', [PostController::class, 'chat'])->name('post.chat');

    Route::get('/post/index', [PostController::class, 'index'])->name('post.index');
    Route::get('/post/create', [PostController::class, 'create'])->name('post.create');
    Route::post('/post/store', [PostController::class, 'store'])->name('post.store');
    Route::get('/post/{id}', [PostController::class, 'edit'])->name('post.edit');
    Route::patch('/post/{id}', [PostController::class, 'update'])->name('post.update');
    Route::delete('/post/{id}', [PostController::class, 'destroy'])->name('post.destroy');


    Route::get('/post/title', [PostController::class, 'title'])->name('post.title');
    Route::get('/post/select', [PostController::class, 'select'])->name('post.select');
    Route::get('/post/recommend', [PostController::class, 'recommend'])->name('post.recommend');
    Route::get('/post/decision', [PostController::class, 'decision'])->name('post.decision');
    
    
    Route::get('/myposts', [PostController::class, 'myPosts'])->name('myposts');
    Route::get('/clothes', [PostController::class, 'clothes'])->name('clothes');
    Route::get('/decision', [PostController::class, 'decision']) ->name('decision');
    Route::get('/upload', [PostController::class, 'upload']) ->name('upload');

    Route::post('/upload', [UploadController::class, 'upload'])->name('upload.submit');
    Route::post('/decision', [PostController::class, 'handleDecision'])->name('decision');


    Route::get('/background', [PostController::class, 'background'])->name('background');
    Route::get('/payment', [PostController::class, 'payment'])->name('payment');

});

require __DIR__.'/auth.php';

