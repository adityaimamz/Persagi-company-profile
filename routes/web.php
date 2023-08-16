<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use App\Models\Article;
use App\Models\Event;

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
    $events=Event::all();
    return view('index', compact('artikels','events'));
});

route::get('/login', [LoginController::class, 'index'])->name('login');
route::post('/login', [LoginController::class, 'store'])->name('login.store');
route::get('/logout', [LoginController::class, 'logout'])->name('logout');
route::get('/register', [RegisterController::class, 'index'])->name('register');
route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/profile', function() {
    return view('profile');
}); 

Route::get('/kontak', function() {
    return view('kontak');
}); 

Route::get('/artikel', function() {
    $artikels=Article::paginate(3);
    return view('artikel', compact('artikels'));
}); 

Route::get('/event', function() {
    $events=Event::paginate(4);
    return view('event', compact('events'));
}); 