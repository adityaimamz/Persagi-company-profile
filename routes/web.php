<?php


use App\Models\Event;
use App\Models\Article;
use App\Models\BiodataUser;
use App\Http\Controllers\KontakUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\BiodataUser as ControllersBiodataUser;


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
    return view('index', [
        'artikels' => $artikels,
        'events' => $events,
        'title' => 'Beranda'
    ]);
});

route::get('/login', [LoginController::class, 'index'])->name('login');
route::post('/login', [LoginController::class, 'store'])->name('login.store');
route::put('/change', [LoginController::class, 'change'])->name('login.change');
route::get('/logout', [LoginController::class, 'logout'])->name('logout');
route::get('/register', [RegisterController::class, 'index'])->name('register');
route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/profile', function() {
    return view('profile',[
        'title' => 'Profile'
    ]);
}); 

Route::resource('kontak', KontakUser::class);


Route::get('/layanan', function() {
    return view('layanan',[
        'title' => 'Layanan'
    ]);
});

Route::get('/imt', function() {
    return view('status-gizi',[
        'title' => 'Status Gizi'
    ]);
});

Route::resource('myprofile', BiodataController::class)->middleware('auth');

Route::get('/artikel', function() {
    $artikels=Article::paginate(3);
    return view('artikel', [
        'artikels' => $artikels,
        'title' => 'Artikel'
    ]);
}); 

Route::get('/artikel/detail/{slug}', function($slug) {
    $artikel = Article::where('slug', $slug)->first();
    $artikels = Article::where('id', '!=', $slug)->paginate(4); // Mengambil artikel lainnya, kecuali yang sedang ditampilkan
    return view('artikel-detail', [
        'artikel' => $artikel,
        'artikels' => $artikels,
        'title' => 'Artikel'
    ]);
});


Route::get('/event', function() {
    $events=Event::paginate(4);
    return view('event', [
        'events' => $events,
        'title' => 'Event'
    ]);
}); 

Route::get('/event/detail/{slug}', function($slug) {
    $event = Event::where('slug', $slug)->first();
    $events = Event::where('id', '!=', $slug)->paginate(4); // Mengambil event lainnya, kecuali yang sedang ditampilkan
    return view('event-detail', [
        'event' => $event,
        'events' => $events,
        'title' => 'Event'
    ]);
});