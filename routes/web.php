<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontendController;
use App\Http\Controllers\userController;
use App\Http\Controllers\todoController;
use App\Http\Controllers\EmailController;
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

    Route::get('/', [frontendController::class, 'index'])->name('index');
    Route::get('/login', [frontendController::class, 'login'])->name('login');
    Route::get('/register', [frontendController::class, 'register'])->name('register');


    Route::post('/loginPost', [userController::class, 'loginPost'])->name('loginPost');
    Route::middleware('auth')->group(function(){
    Route::post('/registerPost', [userController::class, 'registerPost'])->name('registerPost');
    Route::get('/deconnexion', [userController::class, 'deconnexion'])->name('deconnexion');


    Route::get('/indexTodo', [todoController::class, 'indexTodo'])->name('indexTodo');
    Route::get('/ajout', [todoController::class, 'ajout'])->name('ajout');
    Route::get('/read', [todoController::class, 'read'])->name('read');
    Route::get('/read_a_faire', [todoController::class, 'read_a_faire'])->name('read_a_faire');
    Route::get('/read_en_cours', [todoController::class, 'read_en_cours'])->name('read_en_cours');
    Route::get('/read_terminer', [todoController::class, 'read_terminer'])->name('read_terminer');
    Route::post('/ajoutPost', [todoController::class, 'ajoutPost'])->name('ajoutPost');
    Route::get('/show.{id}', [todoController::class, 'show'])->name('show');
    Route::post('/updatePost.{id}', [todoController::class, 'updatePost'])->name('updatePost');
    
    Route::get('/delete.{id}', [todoController::class, 'delete'])->name('delete');

    Route::get('/change.{id}', [todoController::class, 'change'])->name('change');

   

    Route::get('/sendWelcomeEmail/{id}', [EmailController::class, 'sendWelcomeEmail']);
    
    Route::post('/collaborate', [todoController::class, 'collaborate'])->name('collaborate');
    


});