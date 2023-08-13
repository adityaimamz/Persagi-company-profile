<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use App\Models\Article;


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
    $artikels=Article::all();
    return view('index', compact('artikels'));
});

route::get('/login', [LoginController::class, 'index'])->name('login');
route::get('/register', [RegisterController::class, 'index'])->name('register');