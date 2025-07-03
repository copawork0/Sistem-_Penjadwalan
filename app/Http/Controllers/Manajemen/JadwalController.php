<<<<<<< HEAD
<?php

namespace App\Http\Controllers\Manajemen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jadwal;

class JadwalController extends Controller
{
    public function index()
    {
        $jadwal = Jadwal::all();
        return view('manajemen.jadwal', compact('jadwal'));
    }

    public function create()
    {
        return view('manajemen.jadwal_form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'hari' => 'required',
            'jam' => 'required',
            'matakuliah' => 'required',
            'dosen' => 'required',
            'ruangan' => 'required',
        ]);
        \App\Models\Jadwal::create($request->all());
        return redirect()->route('manajemen.jadwal.index')->with('success', 'Jadwal berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $jadwal = \App\Models\Jadwal::findOrFail($id);
        return view('manajemen.jadwal_form', compact('jadwal'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'hari' => 'required',
            'jam' => 'required',
            'matakuliah' => 'required',
            'dosen' => 'required',
            'ruangan' => 'required',
        ]);
        $jadwal = \App\Models\Jadwal::findOrFail($id);
        $jadwal->update($request->all());
        return redirect()->route('manajemen.jadwal.index')->with('success', 'Jadwal berhasil diupdate.');
    }

    public function destroy($id)
    {
        $jadwal = \App\Models\Jadwal::findOrFail($id);
        $jadwal->delete();
        return redirect()->route('manajemen.jadwal.index')->with('success', 'Jadwal berhasil dihapus.');
    }
=======
<?php

namespace App\Http\Controllers\Manajemen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jadwal;

class JadwalController extends Controller
{
    public function index()
    {
        $jadwal = Jadwal::all();
        return view('manajemen.jadwal', compact('jadwal'));
    }

    public function create()
    {
        return view('manajemen.jadwal_form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'hari' => 'required',
            'jam' => 'required',
            'matakuliah' => 'required',
            'dosen' => 'required',
            'ruangan' => 'required',
        ]);
        \App\Models\Jadwal::create($request->all());
        return redirect()->route('manajemen.jadwal.index')->with('success', 'Jadwal berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $jadwal = \App\Models\Jadwal::findOrFail($id);
        return view('manajemen.jadwal_form', compact('jadwal'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'hari' => 'required',
            'jam' => 'required',
            'matakuliah' => 'required',
            'dosen' => 'required',
            'ruangan' => 'required',
        ]);
        $jadwal = \App\Models\Jadwal::findOrFail($id);
        $jadwal->update($request->all());
        return redirect()->route('manajemen.jadwal.index')->with('success', 'Jadwal berhasil diupdate.');
    }

    public function destroy($id)
    {
        $jadwal = \App\Models\Jadwal::findOrFail($id);
        $jadwal->delete();
        return redirect()->route('manajemen.jadwal.index')->with('success', 'Jadwal berhasil dihapus.');
    }
>>>>>>> a148e2d54188b024776fd58f323a6b3508647fb5
} 