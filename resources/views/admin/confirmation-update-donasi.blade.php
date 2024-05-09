@extends('layout.template-layout')

@section('tittle', 'BagiBarang | Riwayat Donasi')

@section('content')
@include('layout.main-layout')
    <div id="status-letter" class="bg-light p-5">
        
        <div class="container-fluid bg-white p-4 rounded-3 shadow">
            <h5 class="mb-4">Confirmation</h5>
            <form action="" method="put">
                @csrf
                <div class="card">
                    <div class="card-header">Donasi
                        <div class="card-body">
                            <h5 class="card-tittle">ID : {{$verif->id ?? "None"}}</h5>
                            <h6 class="card-tittle">UserID : {{$verif->user_id ?? "None"}}</h6>
                            <p class="card-text">Nama Barang : {{ $verif->nama_barang ?? "None"}}</p>
                            <p class="card-text">Kategori Barang : {{ $verif->kategori_barang ?? "None"}}</p>
                            <p class="card-text">Detail Barang : {{ $verif->detail_barang ?? "None"}}</p>
                        </div>
                    </div>
                </div>


                <div class="d-flex justify-content-center gap-3 mt-5">
                    <button type="submit" name="reject" class="btn btn-danger px-5"> REJECT </button>
                    <button type="submit" name="approve" class="btn btn-success px-5"> APPROVE </button>
                </div>

            </form>
        </div>
    </div>
    @endsection