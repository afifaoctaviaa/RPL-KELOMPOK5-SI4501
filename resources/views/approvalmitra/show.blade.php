@extends('layout.template-layout')

@section('tittle', 'BagiBarang | Show Approval Mitra')

@section('content')
@include('layout.main-layout')
<div class="card">
    <div class="card-body">
        <h1>Detail Pengajuan Mitra</h1>
        <ul>
            <li><strong>Nama Panti:</strong> {{ $mitras->name }}</li>
            <li><strong>Email:</strong> {{ $mitras->email }}</li>
            <li><strong>Phone:</strong> {{ $mitras->phone }}</li>
            <li><strong>Alamat:</strong> {{ $mitras->alamat }}</li>
            <li><strong>Status:</strong> {{ $mitras->status }}</li>
        </ul>
        <a href="{{ route('mitra.index') }}" class="btn btn-primary">Kembali</a>
    </div>
</div>
@endsection