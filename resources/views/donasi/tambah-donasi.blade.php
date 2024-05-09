@include('layout.main-layout')
@section('tittle', 'BagiBarang | Donasi')
@extends('layout.template-layout')


<?php

if (isset($_GET['jumlah_barang'])) {
    if (!is_numeric($_GET['jumlah_barang'])) {
        abort(404);
    }
}

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/donasi.css') }}">

    <title>BagiBarang | Tambah Donasi</title>
</head>

<body id="donasi">


    {{-- Hero Section --}}
    <section id="hero">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <nav aria-label="breadcrumb" class="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Library</li>
                        </ol>
                    </nav>
                    <h1 class="title">Donasi Barang</h1>
                    <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae eros dapibus,
                        feugiat tellus non, venenatis metus. Duis vulputate leo sed magna vehicula, quis efficitur nibh
                        facilisis. </p>
                </div>
            </div>
        </div>
    </section>
    {{-- End Hero Section --}}


    {{-- Form Section --}}
    <section id="form">
        <div class="container">

            @if (session('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('status') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="row">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        Ada kolom yang masih kosong, pastikan anda sudah mengisi semua kolom!
                    </div>
                @endif

                <div class="col">
                    <div class="timeline">
                        <div class="d-flex align-items-center">
                            <div class="progress progress-1 {{ isset($_GET['jumlah_barang']) ? '' : 'active' }}"></div>
                            <div class="progress-line"></div>
                        </div>
                        <div class="progress progress-3 {{ isset($_GET['jumlah_barang']) ? 'active' : '' }}"></div>
                    </div>
                </div>
            </div>

            <form action="{{ url('tambah-donasi') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label>Jumlah barang yang didonasikan</label>
                            <input type="number" class="form-control" id="jumlah_barang"
                                value="{{ isset($_GET['jumlah_barang']) ? $_GET['jumlah_barang'] : '' }}"
                                {{ isset($_GET['jumlah_barang']) ? 'disabled' : '' }}>
                        </div>
                    </div>
                    <div class="line"></div>

                    @if (isset($_GET['jumlah_barang']))
                        <input type="hidden" name="jumlah_barang" value="{{ $_GET['jumlah_barang'] }}">

                        @for ($i = 1; $i <= $_GET['jumlah_barang']; $i++)
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Nama Barang #{{ $i }}</label>
                                    <input type="text" class="form-control" name="nama_barang[]">
                                </div>

                                <div class="form-group">
                                    <label>Kategori Barang</label>
                                    <select class="form-select" aria-label="Default select example" name="kategori_barang[]">
                                        <option selected value="">Pilih kategori</option>
                                        <option value="Baju">Baju</option>
                                        <option value="Celana">Celana</option>
                                        <option value="Sepatu">Sepatu</option>
                                      </select>
                                </div>

                                <div class="form-group">
                                    <label>Detail Barang</label>
                                    <input type="text" class="form-control" name="detail_barang[]">
                                </div>

                                <div class="form-group">
                                    <label>Upload Foto Barang</label>
                                    <input type="file" class="form-control" name="foto_barang[]">
                                </div>
                            </div>
                            <div class="line"></div>
                        @endfor
                    @endif

                    @if (isset($_GET['jumlah_barang']))
                        <div class="col-12 col-md-6">
                            <a href="#" onclick="window.history.back();"
                                class="btn secondary-button d-block mb-3">Sebelumnya</a>
                        </div>
                    @endif
                    <div class="col-12 col-md-6">
                        @if (isset($_GET['jumlah_barang']))
                            <button type="submit" class="btn primary-button d-block mb-3 w-100">Selanjutnya</button>
                        @else
                            <a href="?jumlah_barang" class="btn primary-button d-block mb-3">Selanjutnya</a>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </section>
    {{-- End Form Section --}}


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script>
        let inputJumlahBarang = document.getElementById('jumlah_barang');

        inputJumlahBarang.addEventListener('input', () => {
            updateHref();
        });

        function updateHref() {
            let jumlahBarangValue = inputJumlahBarang.value;
            let linkButton = document.querySelector('.btn.primary-button');

            // Mengubah href sesuai dengan nilai inputJumlahBarang
            if (jumlahBarangValue !== '') {
                linkButton.href = `?jumlah_barang=${jumlahBarangValue}`;
            } else {
                // Jika nilai inputJumlahBarang kosong, hapus parameter jumlah_barang dari href
                linkButton.removeAttribute('href');
            }
        }
    </script>

</body>

</html>
