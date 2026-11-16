<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/chi-siamo', function () {
    return view('about-us');
})->name('about');

Route::get('/contattaci', function () {
    return view('contacts');
})->name('contacts');

// Rotta pubblica per visualizzare tutti i libri aggiunti
Route::get('/libri', [BookController::class, 'index'])->name('books.index');

// Rotte protette da autenticazione
Route::middleware('auth')->group(function () {
    Route::get('/consiglia-libro', [BookController::class, 'create'])->name('books.suggest');
    Route::post('/consiglia-libro', [BookController::class, 'store'])->name('books.store');
    
    // Rotta per eliminare il libro
    Route::delete('/libri/{book}', [BookController::class, 'destroy'])->name('books.destroy');
});