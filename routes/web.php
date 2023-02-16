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
Route::middleware(['guest'])->group(function (){


Route::get('/register',[UserRegister::class ,'register'])->name('registration') ;
Route::post('/register',[UserRegister::class ,'HandlerRegister'])->name('registration') ;
Route::get('/login',[UserRegister::class ,'login'])->name('login') ;
Route::post('/login',[UserRegister::class ,'HandlerLogin'])->name('login');
});

Route::get('/accueil',[ArticleController::class ,'index1'] )->name('home1');

Route::middleware(['auth'])->group(function (){
Route::prefix('article')->group(function (){
    Route::get('/{id}/details',[ArticleController::class,'details'])->name('detail')->withoutMiddleware(['auth']);
    Route::get('/{article}/edit',[ArticleController::class,'edit'])->name('show.edit');
    Route::post('/',[ArticleController::class ,'index'] )->name('articles.register');
    Route::put('/{article}/update' ,[ArticleController::class ,'update']);
    Route::delete('/{article}/delete' ,[ArticleController::class ,'deleter'])->name('show.delete');
    
    
    
});
Route::get('/home',[UserRegister::class ,'dasbord'])->name('home');
Route::get('/logout',[UserRegister::class,'logout'])->name('logout') ;
Route::get('/mine',[ArticleController::class ,'mine'])->name('mine') ;
});