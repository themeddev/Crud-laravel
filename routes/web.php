<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnounceController;
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


Route::get('/anounces', [AnounceController::class, 'index'])->name('anounces.index');
Route::get('/anounces/create', [AnounceController::class, 'create'])->name('anounces.create');
Route::post('/anounces', [AnounceController::class, 'store'])->name('anounces.store');
Route::get('/anounces/{anounce}/show', [AnounceController::class, 'show'])->name('anounces.show');
Route::get('/anounces/{anounce}', [AnounceController::class, 'confirme'])->name('anounces.confirme');
Route::get('/anounces/{anounce}/edit', [AnounceController::class, 'edit'])->name('anounces.edit');
Route::put('/anounces/{anounce}', [AnounceController::class, 'update'])->name('anounces.update');
Route::delete('/anounces/{anounce}', [AnounceController::class, 'destroy'])->name('anounces.destroy');

