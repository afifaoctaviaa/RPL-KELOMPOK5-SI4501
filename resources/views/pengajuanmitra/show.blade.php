@extends('layout.template-layout')

@section('tittle', 'BagiBarang | Show Pengajuan Mitra')

@section('content')
@include('layout.main-layout')

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
                <h1 class="title">Pengajuan Mitra</h1>
                <p class="subtitle">Detail pengajuan mitra Anda.</p>
            </div>
        </div>
    </div>
</section>
{{-- End Hero Section --}}

<section id="form">
    <div class="container">
        <div class="row">
            {{-- Informasi Umum --}}
            <div class="col-md-6">
                <div class="slide w-1/2">
                    <div class="row">
                        <div class="col-12">
                            <h2>Informasi Umum</h2>
                            <div class="form-group">
                                <label>Nama Organisasi:</label>
                                <p>{{ $pengajuans->nama_organisasi }}</p>
                            </div>
                            <div class="form-group">
                                <label>Alamat Organisasi:</label>
                                <p>{{ $pengajuans->alamat_organisasi }}</p>
                            </div>
                            <div class="form-group">
                                <label>Nomor Telepon Organisasi:</label>
                                <p>{{ $pengajuans->telepon_organisasi }}</p>
                            </div>
                            <div class="form-group">
                                <label>Email Organisasi:</label>
                                <p>{{ $pengajuans->email_organisasi }}</p>
                            </div>
                            <div class="form-group">
                                <label>Website Organisasi:</label>
                                <p>{{ $pengajuans->website_organisasi }}</p>
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
                                <p>{{ $pengajuans->nama_kontak_person }}</p>
                            </div>
                            <div class="form-group">
                                <label>Jabatan Kontak Person:</label>
                                <p>{{ $pengajuans->jabatan_kontak_person }}</p>
                            </div>
                            <div class="form-group">
                                <label>Nomor Telepon Kontak Person:</label>
                                <p>{{ $pengajuans->telepon_kontak_person }}</p>
                            </div>
                            <div class="form-group">
                                <label>Email Kontak Person:</label>
                                <p>{{ $pengajuans->email_kontak_person }}</p>
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
                        <a href="{{ asset('storage/' . $pengajuans->dokumen_legalitas) }}" target="_blank">Lihat
                            Dokumen</a>
                    </div>
                    <div class="form-group">
                        <label>Proposal Program:</label>
                        <a href="{{ asset('storage/' . $pengajuans->proposal_program) }}" target="_blank">Lihat
                            Dokumen</a>
                    </div>
                    <div class="form-group">
                        <label>Laporan Keuangan Terbaru:</label>
                        <a href="{{ asset('storage/' . $pengajuans->laporan_keuangan) }}" target="_blank">Lihat
                            Dokumen</a>
                    </div>
                </div>
            </div>
            <div class="line"></div>
        </div>

        <div class="row">
            <div class="col-12 col-md-3 mb-2">
                <a href="{{ route('pengajuanmitra.index') }}" class="btn secondary-button d-block mb-3">Kembali</a>
            </div>
            <div class="col-12 col-md-3">
                <a href="{{ route('pengajuanmitra.edit', $pengajuans->id) }}" class="btn primary-button d-block mb-3 w-100">Edit</a>
            </div>
        </div>
    </div>
</section>

@endsection