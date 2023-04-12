<?php

use App\Http\Controllers\ProfileController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/admin', function () {
    return view ('admin');
})->middleware(['auth', 'admin'])->name('admin');

Route::get('/databarang', function () {
    return view ('databarang');
})->middleware(['auth', 'databarang'])->name('databarang');
    
Route::get('datacostumer', function () {
    return view ('datacostumer');
})->middleware(['auth', 'datacostumer'])->name('datacostumer');

Route::get('datasaldo', function () {
    return view ('datasaldo');
})->middleware(['auth', 'datasaldo'])->name('datasaldo');

Route::get('datakurir', function () {
    return view ('dataKurir');
})->middleware(['auth', 'datakurir'])->name('datakurir');

Route::get('/kurir', function () {
    return view ('Kurir');
})->middleware(['auth', 'kurir'])->name('kurir');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
