<?php
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;


Route::get('/Home',[IndexController::class,'ShowHome'])->name('Home.show');
Route::get('/Fragrences',[IndexController::class,'ShowPerfumes'])->name('Perfumes.show');
Route::get('/About',[IndexController::class,'ShowAbout'])->name('About');
Route::get('Parfum/{id}',[IndexController::class,'ShowParfum'])->name('Parfum.show');

Route::get('/SignIn',[ClientController::class, 'showSignIn'])->name('sign.show');
Route::post('/StoreClient',[ClientController::class,'Store'])->name('Store.client');
Route::get('/Login',[ ClientController::class,'showLogin'])->name('login.show');
Route::post('Auth',[ClientController::class,'AuthenficationUser'])->name('Auth');