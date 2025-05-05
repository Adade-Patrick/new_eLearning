<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ElevesController;
use App\Http\Controllers\{
    PrimaireController,
    AnneeScolaireController,
    ClassesController,
    AdminController,
    Auth\RegisterController,
};


Route::get('/', function () {
    return view('index');
})->name('home');




// Route de connexion

Route::get('/auth',function(){
    return view('auth.login');
})->name('auth.form.login');

Route::post('/auth/login',[UserController::class, 'login'])->name('auth.login');
Route::post('/auth/logout',[UserController::class, 'logout'])->name('auth.logout');
Route::get('/auth/user/register/forms',[UserController::class, 'create'])->name('auth.user.create');
Route::post('/auth/user/register',[UserController::class, 'store'])->name('auth.register');

//admin require
require __DIR__.'/admin_route.php';

//eleves require
require __DIR__.'/eleves_route.php';


  // Pages de cycles et de cours
  Route::prefix('cycle')->group(function () {
    Route::view('/primaire', 'test.cycle_primaire')->name('cycle_primaire');
    Route::view('/college', 'test.cycle_college')->name('cycle_college');
    Route::view('/lycee', 'test.cycle_lycee')->name('cycle_lycee');

    // Table lists primaire
    Route::view('/table_list_cp1', 'test.table_list_cp1')->name('table_list_cp1');
    Route::view('/table_list_cp2', 'test.table_list_cp2')->name('table_list_cp2');
    Route::view('/table_list_ce1', 'test.table_list_ce1')->name('table_list_ce1');
    Route::view('/table_list_ce2', 'test.table_list_ce2')->name('table_list_ce2');
    Route::view('/table_list_cm1', 'test.table_list_cm1')->name('table_list_cm1');
    Route::view('/table_list_cm2', 'test.table_list_cm2')->name('table_list_cm2');

    //Route eleve
    Route::view('/add_eleve', 'traitements.eleve.add_eleve')->name('add_eleve');

    // Table lists collège
    Route::view('/table_list_6eme', 'test.table_list_6eme')->name('table_list_6eme');
    Route::view('/table_list_5eme', 'test.table_list_5eme')->name('table_list_5eme');
    Route::view('/table_list_4eme', 'test.table_list_4eme')->name('table_list_4eme');
    Route::view('/table_list_3eme', 'test.table_list_3eme')->name('table_list_3eme');
});

Route::view('/cours', 'test.cours')->name('cours');

 // Année scolaire
 Route::get('/anneeScolaire', [AnneeScolaireController::class, 'index'])->name('annees.index');
 Route::post('/ajouter-annee', [AnneeScolaireController::class, 'store'])->name('annees.store');
 Route::delete('/annees-scolaires/{id}', [AnneeScolaireController::class, 'destroy'])->name('annees.destroy');

  // Classes
  Route::get('/classe', [ClassesController::class, 'index'])->name('classes.index');
  Route::post('/ajoute-classe', [ClassesController::class, 'store'])->name('classes.store');
  Route::delete('/classe/{id}', [ClassesController::class, 'destroy'])->name('classes.destroy');

      //  Zone de test
      Route::view('/admin/dashboard', 'admin.dashboard')->name('dashboard');
