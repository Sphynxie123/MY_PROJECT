<?php

use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\Cache;
use App\Http\Controllers;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

// Route::get('/', [Controllers\ControllerV1::class, 'index'])->name('index');
Route::get('/', [Controllers\ControllerV1::class, 'index']);


Route::prefix('/products')->name('products.')->group(function() {
    Route::get('/create', [Controllers\ControllerV1::class, 'create'])->name('create');
    Route::get('/edit', [Controllers\ControllerV1::class, 'edit'])->name('edit');
    Route::get('/show', [Controllers\ControllerV1::class, 'show'])->name('show');
});


// Route::get('/contact', function (){
//     return view('contact');
// });

// Route::get('products', function (){
//     return view('products');
// });

// Route::get('signnup', function (){
//     return view('signnup');
// });

// Route::get('aboutus', function (){
//     return view('aboutus');
// });
