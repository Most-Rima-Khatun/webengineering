<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Models\Book;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[BookController::class,'index'])->name('books.index');
Route::get('/create',[BookController::class,'create'])->name('books.create');
Route::get('/{id}/show',[BookController::class,'show'])->name('books.show');
Route::post('/',[BookController::class,'store'])->name('books.store');
Route::get('/{id}/edit',[BookController::class,'edit'])->name('books.edit');
Route::put('/{id}/update',[BookController::class,'update'])->name('books.update');
Route::post('/delete',[BookController::class,'destroy'])->name('books.destroy');
