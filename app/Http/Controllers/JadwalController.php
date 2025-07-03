<<<<<<< HEAD
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal;

class JadwalController extends Controller
{
    public function index()
    {
        $jadwal = Jadwal::all();
        return view('jadwal', compact('jadwal'));
    }
=======
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal;

class JadwalController extends Controller
{
    public function index()
    {
        $jadwal = Jadwal::all();
        return view('jadwal', compact('jadwal'));
    }
>>>>>>> a148e2d54188b024776fd58f323a6b3508647fb5
} 