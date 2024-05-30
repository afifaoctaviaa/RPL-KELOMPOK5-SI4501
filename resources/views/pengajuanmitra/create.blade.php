@extends('layout.template-layout')

@section('tittle', 'BagiBarang | Create Pengajuan Mitra')

@section('content')
@include('layout.main-layout')

<h1>Buat Pengajuan Mitra</h1>
<div class="card">
    <div class="card-body">
        <form action="{{ route('pengajuanmitra.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama Panti</label>
                <input type="text" id="name" name="name" class="form-control" required></input>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" name="email" class="form-control" required></input>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input id="phone" name="phone" required class="form-control"></input>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input id="alamat" name="alamat" required class="form-control"></input>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary  w-50 p-2 mt-4">Kirim</button>
            </div>
        </form>
    </div>
</div>