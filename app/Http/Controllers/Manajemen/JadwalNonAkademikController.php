<?php

namespace App\Http\Controllers\Manajemen;

use App\Http\Controllers\Controller;
use App\Models\JadwalNonAkademik;
use Illuminate\Http\Request;

class JadwalNonAkademikController extends Controller
{
    public function index()
    {
        $jadwal = JadwalNonAkademik::all();
        return view('manajemen.jadwal_non_akademik', compact('jadwal'));
    }

    public function create()
    {
        return view('manajemen.jadwal_non_akademik_form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kegiatan' => 'required',
            'tanggal' => 'required|date',
            'jam' => 'required',
            'lokasi' => 'required',
            'penanggung_jawab' => 'required',
            'keterangan' => 'nullable',
        ]);
        JadwalNonAkademik::create($request->all());
        return redirect()->route('manajemen.jadwal-non-akademik.index')->with('success', 'Jadwal non-akademik berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $jadwal = JadwalNonAkademik::findOrFail($id);
        return view('manajemen.jadwal_non_akademik_form', compact('jadwal'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_kegiatan' => 'required',
            'tanggal' => 'required|date',
            'jam' => 'required',
            'lokasi' => 'required',
            'penanggung_jawab' => 'required',
            'keterangan' => 'nullable',
        ]);
        $jadwal = JadwalNonAkademik::findOrFail($id);
        $jadwal->update($request->all());
        return redirect()->route('manajemen.jadwal-non-akademik.index')->with('success', 'Jadwal non-akademik berhasil diupdate.');
    }

    public function destroy($id)
    {
        $jadwal = JadwalNonAkademik::findOrFail($id);
        $jadwal->delete();
        return redirect()->route('manajemen.jadwal-non-akademik.index')->with('success', 'Jadwal non-akademik berhasil dihapus.');
    }
} 