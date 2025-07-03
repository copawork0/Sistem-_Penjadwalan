<?php

namespace App\Http\Controllers\Manajemen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UKM;

class UKMController extends Controller
{
    public function index()
    {
        $ukms = UKM::all();
        return view('manajemen.ukm', compact('ukms'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_ukm' => 'required|string|max:255',
            'pembina' => 'required|string|max:255',
        ]);

        \App\Models\UKM::create([
            'nama_ukm' => $request->nama_ukm,
            'pembina' => $request->pembina,
        ]);

        return redirect()->back()->with('success', 'UKM berhasil ditambahkan!');
    }
} 