<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('ar/accueil');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();

// routes ar
Route::get('ar/contact', [App\Http\Controllers\PageController::class, 'contact'])->name('arcontacts');
Route::get('ar/apropos', [App\Http\Controllers\PageController::class, 'apropos'])->name('arapropos');
Route::get('ar/galleries', [App\Http\Controllers\PageController::class, 'galleries'])->name('argalleries');
Route::get('ar/acceuil', [App\Http\Controllers\PageController::class, 'acceuil'])->name('aracceuils');

// routes fr
Route::get('fr/contact', [App\Http\Controllers\RoutefrController::class, 'contact'])->name('frcontacts');
Route::get('fr/apropos', [App\Http\Controllers\RoutefrController::class, 'apropos'])->name('frapropos');
Route::get('fr/galleries', [App\Http\Controllers\RoutefrController::class, 'galleries'])->name('frgalleries');
Route::get('fr/acceuil', [App\Http\Controllers\RoutefrController::class, 'acceuil'])->name('fracceuils');