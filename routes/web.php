<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StudentController::class, 'index'])->name('index');
Route::get('create', [StudentController::class, 'create'])->name('mhs.create');
Route::post('create', [StudentController::class, 'store'])->name('mhs.store');
Route::get('edit/{student}', [StudentController::class, 'edit'])->name('mhs.edit');
Route::post('edit/{student}', [StudentController::class, 'update'])->name('mhs.update');
Route::delete('delete/{student}', [StudentController::class, 'delete'])->name('mhs.delete');


// latihan vue
Route::any('{slug}', function () {
    return view('latihan1');
});
