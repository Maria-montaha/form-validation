<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::get('/', function () {
    return view('welcome');
});

// Route::view('user-form',"user-form");
Route::view('addUser',"user-form");
Route::post('addUser',[FormController::class,'addUser']);

Route::get('listUser',[FormController::class,'listUser']);
Route::get('delete/{id}',[FormController::class,'delete']);
Route::get('edit/{id}',[FormController::class,'edit']);
Route::put("update/{id}", [FormController::class, 'update']);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';

