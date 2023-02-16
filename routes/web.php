<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TextController; 
use App\Http\Controllers\UserRegister;
use App\Http\Controllers\ArticleController ;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/register',[UserRegister::class ,'register'])->name('registration') ;
Route::get('/accueil',[ArticleController::class ,'index1'] )->name('home');
Route::prefix('article')->group(function (){
    Route::get('/{id}/details',[ArticleController::class,'details'])->name('detail');
    Route::get('/{article}/edit',[ArticleController::class,'edit'])->name('show.edit');
    Route::post('/',[ArticleController::class ,'index'] )->name('articles.register');
    Route::put('/{article}/update' ,[ArticleController::class ,'update']);
    Route::delete('/{article}/delete' ,[ArticleController::class ,'deleter'])->name('show.delete');
});