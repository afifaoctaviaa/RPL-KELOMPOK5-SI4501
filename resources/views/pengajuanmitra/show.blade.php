@extends('layout.template-layout')

@section('tittle', 'BagiBarang | Show Pengajuan Mitra')

@section('content')
@include('layout.main-layout')
<div class="card">
    <div class="card-body">
        <h1>Detail Pengajuan Mitra</h1>
        <ul>
            <li><strong>Nama Panti:</strong> {{ $pengajuans->name }}</li>
            <li><strong>Email:</strong> {{ $pengajuans->email }}</li>
            <li><strong>Phone:</strong> {{ $pengajuans->phone }}</li>
            <li><strong>Alamat:</strong> {{ $pengajuans->alamat }}</li>
            <li><strong>Status:</strong> {{ $pengajuans->status }}</li>
        </ul>
        <a href="{{ route('pengajuanmitra.index') }}" class="btn btn-primary">Kembali</a>
    </div>
</div>
@endsection