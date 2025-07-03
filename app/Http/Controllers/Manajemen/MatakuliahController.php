<<<<<<< HEAD
<?php

namespace App\Http\Controllers\Manajemen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Matakuliah;

class MatakuliahController extends Controller
{
    public function index()
    {
        $matakuliah = Matakuliah::all();
        return view('manajemen.matakuliah', compact('matakuliah'));
    }

    public function create()
    {
        return view('manajemen.matakuliah_form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required',
            'nama' => 'required',
            'sks' => 'required|integer',
        ]);
        \App\Models\Matakuliah::create($request->all());
        return redirect()->route('manajemen.matakuliah.index')->with('success', 'Mata kuliah berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $matakuliah = \App\Models\Matakuliah::findOrFail($id);
        return view('manajemen.matakuliah_form', compact('matakuliah'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kode' => 'required',
            'nama' => 'required',
            'sks' => 'required|integer',
        ]);
        $matakuliah = \App\Models\Matakuliah::findOrFail($id);
        $matakuliah->update($request->all());
        return redirect()->route('manajemen.matakuliah.index')->with('success', 'Mata kuliah berhasil diupdate.');
    }

    public function destroy($id)
    {
        $matakuliah = \App\Models\Matakuliah::findOrFail($id);
        $matakuliah->delete();
        return redirect()->route('manajemen.matakuliah.index')->with('success', 'Mata kuliah berhasil dihapus.');
    }
=======
<?php

namespace App\Http\Controllers\Manajemen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Matakuliah;

class MatakuliahController extends Controller
{
    public function index()
    {
        $matakuliah = Matakuliah::all();
        return view('manajemen.matakuliah', compact('matakuliah'));
    }

    public function create()
    {
        return view('manajemen.matakuliah_form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required',
            'nama' => 'required',
            'sks' => 'required|integer',
        ]);
        \App\Models\Matakuliah::create($request->all());
        return redirect()->route('manajemen.matakuliah.index')->with('success', 'Mata kuliah berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $matakuliah = \App\Models\Matakuliah::findOrFail($id);
        return view('manajemen.matakuliah_form', compact('matakuliah'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kode' => 'required',
            'nama' => 'required',
            'sks' => 'required|integer',
        ]);
        $matakuliah = \App\Models\Matakuliah::findOrFail($id);
        $matakuliah->update($request->all());
        return redirect()->route('manajemen.matakuliah.index')->with('success', 'Mata kuliah berhasil diupdate.');
    }

    public function destroy($id)
    {
        $matakuliah = \App\Models\Matakuliah::findOrFail($id);
        $matakuliah->delete();
        return redirect()->route('manajemen.matakuliah.index')->with('success', 'Mata kuliah berhasil dihapus.');
    }
>>>>>>> a148e2d54188b024776fd58f323a6b3508647fb5
} 