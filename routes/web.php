<?php

use App\Http\Controllers\DataController;
use App\Http\Controllers\BalitaController;
use App\Http\Controllers\BumilController;
use App\Http\Controllers\ChatbotController;
use App\Http\Controllers\LansiaController;
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
})->name('welcome');;

Route::post('/chat-bot',[ChatbotController::class,'chat_bot'])->name('chat_bot');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/program', function () {
    return view('program');
})->middleware(['auth', 'verified'])->name('program');

Route::middleware(['web'])->group(function () {
    Route::get('/data', [DataController::class, 'data'])->middleware(['auth', 'verified'])->name('data');
    Route::delete('/hapus_balita/{balitas}', [DataController::class, 'hapus_balita'])->middleware(['auth', 'verified'])->name('hapus_balita');
    Route::delete('/hapus_lansia/{lansias}', [DataController::class, 'hapus_lansia'])->middleware(['auth', 'verified'])->name('hapus_lansia');
    Route::delete('/hapus_bumil/{bumils}', [DataController::class, 'hapus_bumil'])->middleware(['auth', 'verified'])->name('hapus_bumil');
});

Route::middleware(['web'])->group(function () {
    Route::get('/balita/daftar', [BalitaController::class, 'create_balita'])->middleware(['auth', 'verified'])->name('create_balita');
    Route::post('/balita/daftar', [BalitaController::class, 'store_balita'])->middleware(['auth', 'verified'])->name('store_balita');
    Route::get('/bumil/daftar', [BumilController::class, 'create_bumil'])->middleware(['auth', 'verified'])->name('create_bumil');
    Route::post('/bumil/daftar', [BumilController::class, 'store_bumil'])->middleware(['auth', 'verified'])->name('store_bumil');
    Route::get('/lansia/daftar', [LansiaController::class, 'create_lansia'])->middleware(['auth', 'verified'])->name('create_lansia');
    Route::post('/lansia/daftar', [LansiaController::class, 'store_lansia'])->middleware(['auth', 'verified'])->name('store_lansia');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
