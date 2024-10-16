<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransactionController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/trans',[TransactionController::class,'showAllTrans'])->name('showAllTrans');

//CREATE
Route::get('/trans/create',[TransactionController::class, 'createTran'] )->name('createTran');
Route::post('/trans/store',[TransactionController::class, 'storeTran'] )->name('storeTran');

//READ
Route::get('trans/{id}',[TransactionController::class,'viewTran'])->name('viewTran');

//UPDATE
Route::get('/trans/{id}/edit',[TransactionController::class,'editTran'])->name('editTran');
Route::put('/trans/{id}/update',[TransactionController::class,'updateTran'])->name('updateTran');

//DELETE
Route::delete('/trans/{id}/delete',[TransactionController::class,'deleteTran'])->name('deleteTran');
