<?php


use App\Models\Event;
use App\Models\Article;
use App\Models\BiodataUser;
use App\Http\Controllers\KontakUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\KonsultasiController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\BiodataUser as ControllersBiodataUser;
use App\Models\Bmi_boys;
use App\Models\Bmi_girls;
use App\Models\dataset;
use App\Models\Lhfa_boys;
use App\Models\Lhfa_girls;
use App\Models\Wfa_boys;
use App\Models\Wfa_girls;
use App\Models\Wfh_boys;
use App\Models\Wfh_girls;
use App\Models\Wfl_boys;
use App\Models\Wfl_girls;

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

Route::resource('konsultasi', KonsultasiController::class);

Route::resource('myprofile', BiodataController::class);

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

Route::post('/dataset', function(Request $request) {
    // dataset 
    if($request->jenisKelamin == "laki-laki") {
        $wfa = Wfa_boys::where('Month', $request->usiaDiukur)->first();
        $lhfa = Lhfa_boys::where('Month', $request->usiaDiukur)->first();
        $bmi = Bmi_boys::where('Month', $request->usiaDiukur)->first();
        if($request->usiaDiukur < 24) {
            $wfl = Wfl_boys::where('Length', $request->tinggiBadan)->first();
        }elseif($request->usiaDiukur >= 24) {
            $wfh = Wfh_boys::where('Height', $request->tinggiBadan)->first();
        }
    }else {
        $wfa = Wfa_girls::where('Month', $request->usiaDiukur)->first();
        $lhfa = Lhfa_girls::where('Month', $request->usiaDiukur)->first();
        $bmi = Bmi_girls::where('Month', $request->usiaDiukur)->first();
        if($request->usiaDiukur < 24) {
            $wfl = Wfl_girls::where('Length', $request->tinggiBadan)->first();
        }elseif($request->usiaDiukur >= 24) {
            $wfh = Wfh_girls::where('Height', $request->tinggiBadan)->first();
        }
    }

    // rumus perhitungan wfa 
    if($request->beratBadan < $wfa->SD0) {
        $hasil_wfa = (float)(($request->beratBadan - $wfa->SD0) / ($wfa->SD0 - $wfa->SD1neg));
    }elseif($request->beratBadan > $wfa->SD0) {
        $hasil_wfa = (float)(($request->beratBadan - $wfa->SD0) / ($wfa->SD1 - $wfa->SD0));
    }
    // rumus perhitungan lhfa
    if($request->tinggiBadan < $lhfa->SD0) {
        $hasil_lhfa = (float)(($request->tinggiBadan - $lhfa->SD0) / ($lhfa->SD0 - $lhfa->SD1neg));
    }elseif($request->tinggiBadan > $lhfa->SD0) {
        $hasil_lhfa = (float)(($request->tinggiBadan - $lhfa->SD0) / ($lhfa->SD1 - $lhfa->SD0));
    }
    // rumus perhitungan BMI
    $imt = $request->beratBadan / (pow(($request->tinggiBadan / 100), 2));
    if($imt < $bmi->SD0) {
        $hasil_imt = (float)(($imt - $bmi->SD0) / ($bmi->SD0 - $bmi->SD1neg));
    }elseif($imt > $bmi->SD0) {
        $hasil_imt = (float)(($imt - $bmi->SD0) / ($bmi->SD1 - $bmi->SD0));
    }

    
    // rumus perhitungan wfl & wfh 
    if($request->usiaDiukur < 24) {
        if($request->beratBadan < $wfl->SD0) {
            $hasil_wfl = (float)(($request->beratBadan - $wfl->SD0) / ($wfl->SD0 - $wfl->SD1neg));
        }elseif($request->beratBadan > $wfl->SD0) {
            $hasil_wfl = (float)(($request->beratBadan - $wfl->SD0) / ($wfl->SD1 - $wfl->SD0));
        }
    }
    if($request->usiaDiukur >= 24) {
        if($request->beratBadan < $wfh->SD0) {
            $hasil_wfh = (float)(($request->beratBadan - $wfh->SD0) / ($wfh->SD0 - $wfh->SD1neg));
        }elseif($request->beratBadan > $wfh->SD0) {
            $hasil_wfh = (float)(($request->beratBadan - $wfh->SD0) / ($wfh->SD1 - $wfh->SD0));
        }
    }

    // klasifikasi wfa 
    if($hasil_wfa < -3) {
        $data_wfa = [
            'Nilai' => number_format($hasil_wfa, 2),
            'Pesan' => "Berat badan sanget kurang"
        ];
    }elseif($hasil_wfa >= -3 && $hasil_wfa < -2) {
        $data_wfa = [
            'Nilai' => number_format($hasil_wfa, 2),
            'Pesan' => "Berat badan kurang"
        ];
    }elseif($hasil_wfa >= -2 && $hasil_wfa < 1) {
        $data_wfa = [
            'Nilai' => number_format($hasil_wfa, 2),
            'Pesan' => "Berat badan Normal"
        ];
    }elseif($hasil_wfa > 1) {
        $data_wfa = [
            'Nilai' => number_format($hasil_wfa, 2),
            'Pesan' => "Resiko Berat badan Lebih"
        ];
    }

    // klasifikasi lhfa 
    if($hasil_lhfa < -3) {
        $data_lhfa = [
            'Nilai' => number_format($hasil_lhfa, 2),
            'Pesan' => "Sangat Pendek"
        ];
    }elseif($hasil_lhfa >= -3 && $hasil_lhfa < -2) {
        $data_lhfa = [
            'Nilai' => number_format($hasil_lhfa, 2),
            'Pesan' => "Pendek"
        ];
    }elseif($hasil_lhfa >= -2 && $hasil_lhfa < 1) {
        $data_lhfa = [
            'Nilai' => number_format($hasil_lhfa, 2),
            'Pesan' => "Normal"
        ];
    }elseif($hasil_lhfa > 1) {
        $data_lhfa = [
            'Nilai' => number_format($hasil_lhfa, 2),
            'Pesan' => "Tinggi"
        ];
    }

    // klasifikasi imt 
    if($hasil_imt < -3) {
        $data_imt = [
            'Nilai' => number_format($hasil_imt, 2),
            'Pesan' => "Gizi Buruk"
        ];
    }elseif($hasil_imt >= -3 && $hasil_imt < -2) {
        $data_imt = [
            'Nilai' => number_format($hasil_imt, 2),
            'Pesan' => "Gizi Kurang"
        ];
    }elseif($hasil_imt >= -2 && $hasil_imt < 1) {
        $data_imt = [
            'Nilai' => number_format($hasil_imt, 2),
            'Pesan' => "Gizi Baik (Normal)"
        ];
    }elseif($hasil_imt >= 1 && $hasil_imt < 2) {
        $data_imt = [
            'Nilai' => number_format($hasil_imt, 2),
            'Pesan' => "Beresiko Gizi Lebih"
        ];
    }elseif($hasil_imt >= 2 && $hasil_imt < 3) {
        $data_imt = [
            'Nilai' => number_format($hasil_imt, 2),
            'Pesan' => "Gizi Lebih"
        ];
    }elseif($hasil_imt > 3) {
        $data_imt = [
            'Nilai' => number_format($hasil_imt, 2),
            'Pesan' => "Obesitas"
        ];
    }

    if($request->usiaDiukur < 24) {
        // klasifikasi wfl 
        if($hasil_wfl < -3) {
            $data_wfl = [
                'Nilai' => number_format($hasil_wfl, 2),
                'Pesan' => "Gizi Buruk"
            ];
        }elseif($hasil_wfl >= -3 && $hasil_wfl < -2) {
            $data_wfl = [
                'Nilai' => number_format($hasil_wfl, 2),
                'Pesan' => "Gizi Kurang"
            ];
        }elseif($hasil_wfl >= -2 && $hasil_wfl < 1) {
            $data_wfl = [
                'Nilai' => number_format($hasil_wfl, 2),
                'Pesan' => "Gizi Baik (Normal)"
            ];
        }elseif($hasil_wfl >= 1 && $hasil_wfl < 2) {
            $data_wfl = [
                'Nilai' => number_format($hasil_wfl, 2),
                'Pesan' => "Beresiko Gizi Lebih"
            ];
        }elseif($hasil_wfl >= 2 && $hasil_wfl < 3) {
            $data_wfl = [
                'Nilai' => number_format($hasil_wfl, 2),
                'Pesan' => "Gizi Lebih"
            ];
        }elseif($hasil_wfl > 3) {
            $data_wfl = [
                'Nilai' => number_format($hasil_wfl, 2),
                'Pesan' => "Obesitas"
            ];
        }
    }

    if($request->usiaDiukur >= 24) {
        // klasifikasi wfh
        if($hasil_wfh < -3) {
            $data_wfh = [
                'Nilai' => number_format($hasil_wfh, 2),
                'Pesan' => "Gizi Buruk"
            ];
        }elseif($hasil_wfh >= -3 && $hasil_wfh < -2) {
            $data_wfh = [
                'Nilai' => number_format($hasil_wfh, 2),
                'Pesan' => "Gizi Kurang"
            ];
        }elseif($hasil_wfh >= -2 && $hasil_wfh < 1) {
            $data_wfh = [
                'Nilai' => number_format($hasil_wfh, 2),
                'Pesan' => "Gizi Baik (Normal)"
            ];
        }elseif($hasil_wfh >= 1 && $hasil_wfh < 2) {
            $data_wfh = [
                'Nilai' => number_format($hasil_wfh, 2),
                'Pesan' => "Beresiko Gizi Lebih"
            ];
        }elseif($hasil_wfh >= 2 && $hasil_wfh < 3) {
            $data_wfh = [
                'Nilai' => number_format($hasil_wfh, 2),
                'Pesan' => "Gizi Lebih"
            ];
        }elseif($hasil_wfh > 3) {
            $data_wfh = [
                'Nilai' => number_format($hasil_wfh, 2),
                'Pesan' => "Obesitas"
            ];
        }
    }


    if($request->usiaDiukur < 24) {
        return response()->json([
            'data' => [
                'wfa' => $data_wfa,
                'lhfa' => $data_lhfa,
                'imt' => $data_imt,
                'wfl' => $data_wfl
            ],
        ]);
    }

    if($request->usiaDiukur >= 24) {
        return response()->json([
            'data' => [
                'wfa' => $data_wfa,
                'lhfa' => $data_lhfa,
                'imt' => $data_imt,
                'wfh' => $data_wfh
            ],
        ]);
    }
})->name('dataset'); 