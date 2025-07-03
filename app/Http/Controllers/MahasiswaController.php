<<<<<<< HEAD
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = \App\Models\User::where('role', 'mahasiswa')->get();
        return view('mahasiswa', compact('mahasiswa'));
    }
=======
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = \App\Models\User::where('role', 'mahasiswa')->get();
        return view('mahasiswa', compact('mahasiswa'));
    }
>>>>>>> a148e2d54188b024776fd58f323a6b3508647fb5
} 