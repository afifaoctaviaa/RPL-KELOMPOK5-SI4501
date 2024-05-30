@extends('layout.template-layout')

@section('tittle', 'BagiBarang | Create Pengajuan Mitra')

@section('content')
@include('layout.main-layout')

<h1>Buat Pengajuan Mitra</h1>
<div class="card">
    <div class="card-body">
        <form action="{{ route('pengajuanmitra.update', $pengajuans->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Nama Panti</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ $pengajuans->name }}" required></input>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" name="email" class="form-control" value="{{ $pengajuans->email }}" required ></input>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input id="phone" name="phone" required class="form-control" value="{{ $pengajuans->phone}}"></input>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input id="alamat" name="alamat" required class="form-control" value="{{ $pengajuans->alamat }}"></input>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-success  w-50 p-2 mt-4">Update </button>
            </div>
        </form>
    </div>
</div>