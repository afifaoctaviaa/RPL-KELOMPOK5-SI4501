@extends('layout.template-layout')

@section('title', 'BagiBarang | Approval Mitra')

@section('content')
@include('layout.main-layout')

<h1>Mitra Approval</h1>
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<div class="table-responsive sm ms-3 mt-3">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Organisasi</th>
                <th>Nama Kontak Person</th>
                <th>Telepon</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pengajuans as $pengajuan)
                <tr>
                    <td>{{ $pengajuan->id }}</td>
                    <td>{{ $pengajuan->nama_organisasi }}</td>
                    <td>{{ $pengajuan->nama_kontak_person }}</td>
                    <td>{{ $pengajuan->telepon_kontak_person }}</td>
                    <td>{{ $pengajuan->email_kontak_person }}</td>
                    <td>{{ $pengajuan->alamat_organisasi }}</td>
                    <td>{{ $pengajuan->status }}</td>
                    <td>
                        <a href="{{ route('mitra.show', $pengajuan->id) }}" class="btn btn-primary">Show</a>
                        <form action="{{ route('mitra.update', $pengajuan->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="status" value="approved">
                            <button type="submit" class="btn btn-success">Approve</button>
                        </form>
                        <form action="{{ route('mitra.update', $pengajuan->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="status" value="rejected">
                            <button type="submit" class="btn btn-warning">Reject</button>
                        </form>
                        <form action="{{ route('mitra.destroy', $pengajuan->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Apakah anda yakin?');" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
