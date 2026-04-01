<?php
use App\Http\Controllers\EngineerController;

Route::get('/engineers', [EngineerController::class, 'index'])->name('engineers.index');
Route::get('/engineers/create', [EngineerController::class, 'create'])->name('engineers.create');
Route::post('/engineers', [EngineerController::class, 'store'])->name('engineers.store');
;
