@extends('layouts.app')
@section('content')
    <h2>Unit Kegiatan Mahasiswa (UKM)</h2>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>Nama UKM</th>
                <th>Pembina</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($ukms as $ukm)
            <tr>
                <td>{{ $ukm['nama'] }}</td>
                <td>{{ $ukm['pembina'] }}</td>
                <td><button class="btn btn-success btn-sm">Daftar</button></td>
            </tr>
            @empty
            <tr><td colspan="3" class="text-center">Belum ada UKM.</td></tr>
            @endforelse
        </tbody>
    </table>
@endsection 