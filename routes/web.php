<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use Illuminate\Support\Facades\Gate;
use App\Models\Product;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/admin-area', function () {
        return 'Halaman khusus admin';
    })->middleware('role:admin');

    Route::get('/editor-area', function () {
        return 'Halaman khusus editor';
    })->middleware('role:admin,editor');

    Route::get('/user-area', function () {
        return 'Halaman pengguna yang sudah login';
    });
});

Route::get('/posts/{post}/edit-test', function (Post $post) {
    Gate::authorize('update', $post);

    return 'Anda diizinkan mengedit post ini.';
})->middleware('auth');

Route::get('/eager-loading-demo', function () {
    $products = Product::with('category')
        ->latest()
        ->take(10)
        ->get();

    return view('eager-loading-demo', compact('products'));
})->middleware('auth');


Route::get('/products', function () {
    $products = Product::with('category')
        ->latest()
        ->get();

    return view('products.index', compact('products'));
})->name('products.index');


require __DIR__.'/auth.php';
