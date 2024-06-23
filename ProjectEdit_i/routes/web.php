<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});
Route::get('/adduser', function () {
    return view('pages.adduser');
});

//fetchData
Route::get('/', [AdminController::class, 'fetchData'])->name('fetchData');

//addData
Route::post('adduser', [AdminController::class, 'addData'])->name('adduser');

//Edit and Update data
Route::get('editData/{id}', [AdminController::class, 'editData'])->name('editData');
Route::post('updateData/{id}', [AdminController::class, 'updateData'])->name('updateData');

//Delete data
Route::get('delete/{id}', [AdminController::class, 'deleteData'])->name('delete');