<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassesController;


  // Classes
  Route::get('/classe', [ClassesController::class, 'index'])->name('classe.index');
  Route::post('/ajoute-classe', [ClassesController::class, 'store'])->name('classe.store');
  Route::delete('/classe/{id}', [ClassesController::class, 'destroy'])->name('classe.destroy');

?>
