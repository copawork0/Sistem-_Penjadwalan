<<<<<<< HEAD
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\JadwalNonAkademik;
use App\Models\Jadwal;
use App\Models\Event;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        // Ambil jadwal hari ini (misal berdasarkan hari)
        $hariIni = Carbon::now()->locale('id')->isoFormat('dddd'); // contoh: 'Kamis'
        // Debug nilai hari ini
        // dd($hariIni);
        $jadwalHariIni = Jadwal::where('hari', $hariIni)->get();
        // Debug hasil query jadwal hari ini
        // dd($jadwalHariIni);

        // Ambil event yang statusnya aktif
        $eventAktif = Event::where('status', 'aktif')->get();

        $jadwalNonAkademik = JadwalNonAkademik::all();

        return view('dashboard', compact('user', 'jadwalHariIni', 'eventAktif', 'jadwalNonAkademik', 'hariIni'));
    }
=======
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\JadwalNonAkademik;
use App\Models\Jadwal;
use App\Models\Event;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        // Ambil jadwal hari ini (misal berdasarkan hari)
        $hariIni = Carbon::now()->locale('id')->isoFormat('dddd'); // contoh: 'Kamis'
        // Debug nilai hari ini
        // dd($hariIni);
        $jadwalHariIni = Jadwal::where('hari', $hariIni)->get();
        // Debug hasil query jadwal hari ini
        // dd($jadwalHariIni);

        // Ambil event yang statusnya aktif
        $eventAktif = Event::where('status', 'aktif')->get();

        $jadwalNonAkademik = JadwalNonAkademik::all();

        return view('dashboard', compact('user', 'jadwalHariIni', 'eventAktif', 'jadwalNonAkademik', 'hariIni'));
    }
>>>>>>> a148e2d54188b024776fd58f323a6b3508647fb5
} 