<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TrashController;

Route::get('/', [AdminController::class, 'index'])->name('admin.index');
Route::get('add', [AdminController::class, 'create'])->name('admin.create');
Route::post('store', [AdminController::class, 'store'])->name('admin.store');
Route::get('edit/{id}', [AdminController::class, 'edit'])->name('admin.edit');
Route::post('update/{id}', [AdminController::class,'update'])->name('admin.update');
Route::post('delete/{id}', [AdminController::class, 'delete'])->name('admin.delete');


Route::get('trash', [TrashController::class, 'index'])->name('trash.index');
Route::post('trash-undo/{id}', [TrashController::class, 'undo'])->name('trash.undo');
Route::post('trash-undo-all', [TrashController::class, 'undoall'])->name('trash.undoall');
Route::post('trash/{id}', [TrashController::class, 'delete'])->name('trash.delete');
