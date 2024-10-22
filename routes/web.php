<?php

use App\Http\Controllers\inventarioController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::view( '/', "login")->name( 'login' ) ;
Route::view( '/registro' ,"register")->name('registro') ;
Route::view( '/privada' ,"secret" )->middleware('auth') ->name( 'privada' ) ;
route::resource('/secret',inventarioController::class)->middleware('auth');
Route:: post( '/validar-registro' , [loginController::class, 'register'] )->name( 'validar-registro') ;
Route:: post( '/iniciar-sesion' , [loginController::class, 'login'] )->name( 'iniciar-sesion') ;
Route:: get( '/logout' , [loginController::class, 'logout'] )->name( 'logout') ;

