<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [HomeController::class, 'welcome']);
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware('auth')->name('dashboard');
// Route::get('/dashboard',[HomeController::class,'userindex'])->middleware('auth')->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [HomeController::class, 'userindex'])->name('dashboard');
    Route::get('/user/post', [PostController::class, 'userindex'])->name('user/post');
    Route::get('/user/post/create', [PostController::class, 'usercreate'])->name('user/post/create');
    Route::post('/user/post/save', [PostController::class, 'usersave'])->name('user/post/save');
    Route::get('/user/post/edit/{id}', [PostController::class, 'useredit'])->name('user/post/edit');
    Route::put('/user/post/update/{id}', [PostController::class, 'userupdate'])->name('user/post/update');
    Route::get('/user/post/delete/{id}', [PostController::class, 'userdelete'])->name('user/post/delete');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [HomeController::class, 'index']);
    Route::get('/admin/post', [PostController::class, 'index'])->name('admin/post');
    Route::get('/admin/post/create', [PostController::class, 'create'])->name('admin/post/create');
    Route::post('/admin/post/save', [PostController::class, 'save'])->name('admin/post/save');
    Route::get('/admin/post/edit/{id}', [PostController::class, 'edit'])->name('admin/post/edit');
    Route::put('/admin/post/update/{id}', [PostController::class, 'update'])->name('admin/post/update');
    Route::get('/admin/post/delete/{id}', [PostController::class, 'delete'])->name('admin/post/delete');
    
});
require __DIR__.'/auth.php';

//Route::get('admin/dashboard', [HomeController::class, 'index'])->middleware(['auth','admin']);
