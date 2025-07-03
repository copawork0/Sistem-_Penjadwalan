@extends('layouts.app')
@section('content')
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif
    <h2>Event Perkuliahan</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Nama Event</th>
                <th>Tanggal</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($events as $event)
                <tr>
                    <td>{{ $event->nama }}</td>
                    <td>{{ $event->tanggal }}</td>
                    <td>{{ $event->status }}</td>
                    <td>
                        <form action="{{ route('event.daftar', $event->id) }}" method="POST" style="display:inline;">
                            @csrf
                            <button type="submit" class="btn btn-success">Daftar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">Belum ada event.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection 