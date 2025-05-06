<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EleveController;
use App\Http\Controllers\ProfController;
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

require __DIR__.'/annee_scolaire_route.php';

require __DIR__.'/classe_route.php';

require __DIR__.'/eleves_route.php';

require __DIR__.'/prof_route.php';


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




    // Table lists collège
    Route::view('/table_list_6eme', 'test.table_list_6eme')->name('table_list_6eme');
    Route::view('/table_list_5eme', 'test.table_list_5eme')->name('table_list_5eme');
    Route::view('/table_list_4eme', 'test.table_list_4eme')->name('table_list_4eme');
    Route::view('/table_list_3eme', 'test.table_list_3eme')->name('table_list_3eme');
});

Route::view('/cours', 'test.cours')->name('cours');





      //  Zone de test
      Route::view('/admin/dashboard', 'admin.dashboard')->name('dashboard');
