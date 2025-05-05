<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ElevesController;

Route::get('/eleves/create', [ElevesController::class, 'create'])->name('eleves.create');
Route::post('/eleves/store', [ElevesController::class, 'store'])->name('eleves.store');


?>
