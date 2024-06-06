@extends('layout.template-layout')

@section('tittle', 'BagiBarang | Riwayat Donasi')

@section('content')
    @include('layout.main-layout')
    <div id="status-letter" class="bg-light p-5">

        <div class="container-fluid bg-white p-4 rounded-3 shadow">
            <h5 class="mb-4">Confirmation</h5>
            <form action="{{ url('/verifikasi-update') . '/' . $verif->id }}" method="post">
                @csrf
                @method('put')
                <div class="card"> 
                    <div class="card-header">Donasi
                        <div class="card-body">
                            <h5 class="card-tittle">ID : {{ $verif->id }}</h5>
                            <h6 class="card-tittle">UserID : {{ $verif->user_id }}</h6>
                            <p class="card-text">Nama Barang : {{ $verif->nama_barang }}</p>
                            <p class="card-text">Kategori Barang : {{ $verif->kategori_barang }}</p>
                            <p class="card-text">Detail Barang : {{ $verif->detail_barang }}</p>
                        </div>
                    </div>
                </div>


                <div class="d-flex justify-content-center gap-3 mt-5">
                    <button type="submit" name="status" class="btn btn-danger px-5" value="REJECT"> REJECT </button>
                    <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                        class="btn btn-success px-5"> APPROVE </button>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Masukkan Alamat Pengiriman</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <input type="text" name="alamat" class="form-control">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="status" value="APPROVED" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
