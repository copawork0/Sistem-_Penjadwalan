<<<<<<< HEAD
<?php

namespace App\Http\Controllers;

use App\Models\JadwalNonAkademik;

class JadwalNonAkademikPublicController extends Controller
{
    public function index()
    {
        $jadwal = JadwalNonAkademik::all();
        return view('jadwal_non_akademik', compact('jadwal'));
    }
=======
<?php

namespace App\Http\Controllers;

use App\Models\JadwalNonAkademik;

class JadwalNonAkademikPublicController extends Controller
{
    public function index()
    {
        $jadwal = JadwalNonAkademik::all();
        return view('jadwal_non_akademik', compact('jadwal'));
    }
>>>>>>> a148e2d54188b024776fd58f323a6b3508647fb5
} 