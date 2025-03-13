<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


// local blogfcc.test

/*
Route::get('/', function () {
   // estas funciones se utilizan para hacer pruebas
    // return 'Freen sarocha';

    // podemos retornar un array
    // return ['freen'=> 'sarocha'];

    // funcion original
    // return view('welcome');
//}); 
*/

// cuando no se necesita usar logica podemos acceder directamente al metodo view
// primer parametro recibe la url a la que va a responder
// segundo parametro la vista que queremos mostrar
Route :: view('/', 'welcome');
// Ejercicio
Route :: view('contacto', 'contact');
Route :: view('blog', 'blog');
Route :: view('nosotros', 'about');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';