<?php


use Illuminate\Support\Facades\Route;

Route::get('/saludo', function () {
    return "Hola mundo desde laravel...";
});

Route::get('/galaria/{num}', function ($num) {
    return "Este es el codigo de la foto desde laravel: ".$num;
}) -> where('num', '[0-9]+');

Route::view('/galeria', 'pagGaleria', ['valor' => 15]) -> name('xGaleria'); 

Route::get('/lista', function (){
    return view('pagLista');
}) -> name('xLista');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



/*
Route::get('/', function () {
    return view('welcome');
}) -> name('xInicio');
*/