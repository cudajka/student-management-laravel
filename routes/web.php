<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/students')->group(function () {
    Route::get('/index', [StudentController::class, 'index'])->name('students.index');
    Route::get('/create', [StudentController::class, 'create'])->name('students.create');
    Route::post('/store', [StudentController::class, 'store'])->name('students.store');
    Route::get('/edit/{id}', [StudentController::class, 'edit'])->name('students.edit');
    Route::post('/update', [StudentController::class, 'update'])->name('students.update');
    Route::get('/delete/{id}', [StudentController::class, 'delete'])->name('students.delete');
});
