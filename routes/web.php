<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookStoreController;


Route::get('/books', [BookStoreController::class, 'index']);
Route::post('/booksStore', [BookStoreController::class, 'store']);
Route::get('/books/{id}/edit', [BookStoreController::class, 'edit']);
Route::put('/books/{id}', [BookStoreController::class, 'update']);
Route::delete('/books/{id}', [BookStoreController::class, 'destroy']);
?>

