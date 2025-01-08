<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ObraController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VotoController;
use App\Http\Controllers\AuthController;

Route::controller(UserController::class)->group(function() {
  //public
  Route::post('/register', 'store');

  //private
  Route::middleware('auth:sanctum')->get('/logout', [AuthController::class, 'logout']); //el mismo usuario
  Route::middleware('auth:sanctum')->get('/perfil/{id}', [UserController::class, 'show']); //el mismo usuario
});

Route::controller(ObraController::class)->group(function() {
  //public
  Route::get('/obras', 'index');
  Route::get('/obras/{id}', 'show');

  //private
  Route::post('/obras', 'store'); //cualquier usuario logueado
  Route::put('/obras/{id}', 'update'); //solo propietario
  Route::delete('/obras/{id}', 'delete'); //solo propietario
});

Route::controller(VotoController::class)->group(function() {
  //private
  Route::get('/obras/{id}/votar', ''); //cualquier usuario logueado
});

Route::controller(AuthController::class)->group(function(){
  Route::post('/login', 'login');
});

