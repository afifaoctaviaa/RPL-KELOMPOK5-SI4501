
@include('layout.main-layout')
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Landingpage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="css/landingpage.css" rel="stylesheet">
     <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/donasi.css') }}">
</head>
<style>
    span {
        background: url('images/image 1.png');
    }
</style>

<body></body>
{{-- Hero Section --}}
<section id="hero">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <nav aria-label="breadcrumb" class="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Pengajuan Mitra</li>
                    </ol>
                </nav>
                <h1 class="title"> Mitra</h1>
                <p class="subtitle">Detail mitra Anda.</p>
            </div>
        </div>
    </div>
</section>
{{-- End Hero Section --}}

<section id="form">
    <div class="container">
    <div class="row mb-4">
            <div class="col-12 text-center">
                <img src="{{ asset('storage/foto_mitra/' . $mitras->foto_mitra) }}" alt="Foto Mitra" class="img-fluid" style="max-width: 100%; height: auto;">
            </div>
        </div>
        <div class="row">
            {{-- Informasi Umum --}}
            <div class="col-md-6">
                <div class="slide w-1/2">
                    <div class="row">
                        <div class="col-12">
                            <h2>Informasi Umum</h2>
                            <div class="form-group">
                                <label>Nama Organisasi:</label>
                                <p>{{ $mitras->nama_organisasi }}</p>
                            </div>
                            <div class="form-group">
                                <label>Alamat Organisasi:</label>
                                <p>{{ $mitras->alamat_organisasi }}</p>
                            </div>
                            <div class="form-group">
                                <label>Nomor Telepon Organisasi:</label>
                                <p>{{ $mitras->telepon_organisasi }}</p>
                            </div>
                            <div class="form-group">
                                <label>Email Organisasi:</label>
                                <p>{{ $mitras->email_organisasi }}</p>
                            </div>
                            <div class="form-group">
                                <label>Website Organisasi:</label>
                                <p>{{ $mitras->website_organisasi }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

            {{-- Informasi Kontak --}}
            <div class="col-md-6">

                {{-- Informasi Kontak --}}
                <div class="slide w-1/2">
                    <div class="row">
                        <div class="col-12">
                            <h2>Informasi Kontak</h2>
                            <div class="form-group">
                                <label>Nama Kontak Person:</label>
                                <p>{{ $mitras->nama_kontak_person }}</p>
                            </div>
                            <div class="form-group">
                                <label>Jabatan Kontak Person:</label>
                                <p>{{ $mitras->jabatan_kontak_person }}</p>
                            </div>
                            <div class="form-group">
                                <label>Nomor Telepon Kontak Person:</label>
                                <p>{{ $mitras->telepon_kontak_person }}</p>
                            </div>
                            <div class="form-group">
                                <label>Email Kontak Person:</label>
                                <p>{{ $mitras->email_kontak_person }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          
        </div>


        <div class="line"></div>
        {{-- Dokumen Pendukung --}}
        <div class="slide">
            <div class="row">
                <div class="col-12">
                    <h2>Dokumen Pendukung</h2>
                    <div class="form-group">
                        <label>Dokumen Legalitas Organisasi:</label>
                        <a href="{{ asset('storage/dokumen_legalitas/' . $mitras->dokumen_legalitas) }}" target="_blank">Lihat
                            Dokumen</a>
                    </div>
                    <div class="form-group">
                        <label>Proposal Program:</label>
                        <a href="{{ asset('storage/proposal_program/' . $mitras->proposal_program) }}" target="_blank">Lihat
                            Dokumen</a>
                    </div>
                    <div class="form-group">
                        <label>Laporan Keuangan Terbaru:</label>
                        <a href="{{ asset('storage/laporan_keuangan/' . $mitras->laporan_keuangan) }}" target="_blank">Lihat
                            Dokumen</a>
                    </div>
                </div>
            </div>
            <div class="line"></div>
        </div>

        <div class="row">
            <div class="col-12 col-md-3 mb-2">
                <a href="{{ route('landingpage') }}" class="btn secondary-button d-block mb-3">Kembali</a>
            </div>
        </div>
    </div>
</section>
</body>

</html>