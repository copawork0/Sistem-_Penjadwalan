<<<<<<< HEAD
<?php

namespace App\Http\Controllers\Manajemen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('manajemen.event', compact('events'));
    }

    public function create()
    {
        return view('manajemen.event_form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'tanggal' => 'required|date',
            'status' => 'required',
        ]);
        \App\Models\Event::create($request->all());
        return redirect()->route('manajemen.event.index')->with('success', 'Event berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $event = \App\Models\Event::findOrFail($id);
        return view('manajemen.event_form', compact('event'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'tanggal' => 'required|date',
            'status' => 'required',
        ]);
        $event = \App\Models\Event::findOrFail($id);
        $event->update($request->all());
        return redirect()->route('manajemen.event.index')->with('success', 'Event berhasil diupdate.');
    }

    public function destroy($id)
    {
        $event = \App\Models\Event::findOrFail($id);
        $event->delete();
        return redirect()->route('manajemen.event.index')->with('success', 'Event berhasil dihapus.');
    }

    public function daftar($id)
    {
        $user = auth()->user();
        // Simpan data pendaftaran ke tabel relasi (misal: event_user)
        // Contoh:
        // $event = Event::findOrFail($id);
        // $event->users()->attach($user->id);

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Berhasil mendaftar event!');
    }
=======
<?php

namespace App\Http\Controllers\Manajemen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('manajemen.event', compact('events'));
    }

    public function create()
    {
        return view('manajemen.event_form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'tanggal' => 'required|date',
            'status' => 'required',
        ]);
        \App\Models\Event::create($request->all());
        return redirect()->route('manajemen.event.index')->with('success', 'Event berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $event = \App\Models\Event::findOrFail($id);
        return view('manajemen.event_form', compact('event'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'tanggal' => 'required|date',
            'status' => 'required',
        ]);
        $event = \App\Models\Event::findOrFail($id);
        $event->update($request->all());
        return redirect()->route('manajemen.event.index')->with('success', 'Event berhasil diupdate.');
    }

    public function destroy($id)
    {
        $event = \App\Models\Event::findOrFail($id);
        $event->delete();
        return redirect()->route('manajemen.event.index')->with('success', 'Event berhasil dihapus.');
    }

    public function daftar($id)
    {
        $user = auth()->user();
        // Simpan data pendaftaran ke tabel relasi (misal: event_user)
        // Contoh:
        // $event = Event::findOrFail($id);
        // $event->users()->attach($user->id);

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Berhasil mendaftar event!');
    }
>>>>>>> a148e2d54188b024776fd58f323a6b3508647fb5
} 