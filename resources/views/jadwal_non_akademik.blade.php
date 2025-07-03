@extends('layouts.app')
@section('content')
    <h2>Jadwal Non-Akademik</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Kegiatan</th>
                <th>Tanggal</th>
                <th>Jam</th>
                <th>Lokasi</th>
                <th>Penanggung Jawab</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @forelse($jadwal as $item)
            <tr>
                <td>{{ $item->nama_kegiatan }}</td>
                <td>{{ $item->tanggal }}</td>
                <td>{{ $item->jam }}</td>
                <td>{{ $item->lokasi }}</td>
                <td>{{ $item->penanggung_jawab }}</td>
                <td>{{ $item->keterangan }}</td>
            </tr>
            @empty
            <tr><td colspan="6" class="text-center">Belum ada jadwal non-akademik.</td></tr>
            @endforelse
        </tbody>
    </table>
@endsection 