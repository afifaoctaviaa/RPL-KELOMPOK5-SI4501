@extends('layout.template-layout')

@section('tittle', 'BagiBarang | Pengajuan Mitra')

@section('content')
@include('layout.main-layout')

<h1>Daftar Pengajuan Mitra</h1>
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
    <a href="{{ route('pengajuanmitra.create') }}" class="btn btn-primary ms-4">Buat Pengajuan Baru</a>
<div class="table-responsive sm  ms-3 mt-3">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Alamat</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pengajuans as $mitra)
            <tr>
                <td>{{ $mitra->id }}</td>
                <td>{{ $mitra->name }}</td>
                <td>{{ $mitra->email }}</td>
                <td>{{ $mitra->phone }}</td>
                <td>{{ $mitra->alamat }}</td>
                <td>{{ $mitra->status }}</td>
                <td>
                    <a class="btn btn-primary" href="{{ route('pengajuanmitra.show', $mitra->id) }}">Detail</a>
                    <a class="btn btn-primary" href="{{ route('pengajuanmitra.edit', $mitra->id) }}">Edit</a>
                    <form action="{{ route('pengajuanmitra.destroy', $mitra->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection