@extends('layouts.app')
@section('content')
    <h2>Jadwal Perkuliahan</h2>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>Hari</th>
                <th>Jam</th>
                <th>Mata Kuliah</th>
                <th>Dosen</th>
                <th>Ruangan</th>
            </tr>
        </thead>
        <tbody>
            @forelse($jadwal as $item)
            <tr>
                <td>{{ $item['hari'] }}</td>
                <td>{{ $item['jam'] }}</td>
                <td>{{ $item['matakuliah'] }}</td>
                <td>{{ $item['dosen'] }}</td>
                <td>{{ $item['ruangan'] }}</td>
            </tr>
            @empty
            <tr><td colspan="5" class="text-center">Belum ada jadwal.</td></tr>
            @endforelse
        </tbody>
    </table>
@endsection 