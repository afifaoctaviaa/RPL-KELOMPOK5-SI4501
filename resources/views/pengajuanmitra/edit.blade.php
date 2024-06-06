@extends('layout.template-layout')

@section('tittle', 'BagiBarang | Edit Pengajuan Mitra')

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
                        <li class="breadcrumb-item active" aria-current="page">Edit Pengajuan Mitra</li>
                    </ol>
                </nav>
                <h1 class="title">Edit Pengajuan Mitra</h1>
                <p class="subtitle">Edit detail pengajuan mitra Anda.</p>
            </div>
        </div>
    </div>
</section>
{{-- End Hero Section --}}

<section id="form">
    <div class="container">
        <form action="{{ route('pengajuanmitra.update', $pengajuans->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                {{-- Informasi Umum --}}
                <div class="col-md-6">
                    <div class="slide w-1/2">
                        <div class="row">
                            <div class="col-12">
                                <h2>Informasi Umum</h2>
                                <div class="form-group">
                                    <label>Nama Organisasi:</label>
                                    <input type="text" name="nama_organisasi" class="form-control" value="{{ $pengajuans->nama_organisasi }}" required>
                                </div>
                                <div class="form-group">
                                    <label>Alamat Organisasi:</label>
                                    <input type="text" name="alamat_organisasi" class="form-control" value="{{ $pengajuans->alamat_organisasi }}" required>
                                </div>
                                <div class="form-group">
                                    <label>Nomor Telepon Organisasi:</label>
                                    <input type="text" name="telepon_organisasi" class="form-control" value="{{ $pengajuans->telepon_organisasi }}" required>
                                </div>
                                <div class="form-group">
                                    <label>Email Organisasi:</label>
                                    <input type="email" name="email_organisasi" class="form-control" value="{{ $pengajuans->email_organisasi }}" required>
                                </div>
                                <div class="form-group">
                                    <label>Website Organisasi:</label>
                                    <input type="text" name="website_organisasi" class="form-control" value="{{ $pengajuans->website_organisasi }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Informasi Kontak --}}
                <div class="col-md-6">
                    <div class="slide w-1/2">
                        <div class="row">
                            <div class="col-12">
                                <h2>Informasi Kontak</h2>
                                <div class="form-group">
                                    <label>Nama Kontak Person:</label>
                                    <input type="text" name="nama_kontak_person" class="form-control" value="{{ $pengajuans->nama_kontak_person }}" required>
                                </div>
                                <div class="form-group">
                                    <label>Jabatan Kontak Person:</label>
                                    <input type="text" name="jabatan_kontak_person" class="form-control" value="{{ $pengajuans->jabatan_kontak_person }}" required>
                                </div>
                                <div class="form-group">
                                    <label>Nomor Telepon Kontak Person:</label>
                                    <input type="text" name="telepon_kontak_person" class="form-control" value="{{ $pengajuans->telepon_kontak_person }}" required>
                                </div>
                                <div class="form-group">
                                    <label>Email Kontak Person:</label>
                                    <input type="email" name="email_kontak_person" class="form-control" value="{{ $pengajuans->email_kontak_person }}" required>
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
                            <input type="file" name="dokumen_legalitas" class="form-control">
                            <small>Current: <a href="{{ asset('storage/' . $pengajuans->dokumen_legalitas) }}" target="_blank">Lihat Dokumen</a></small>
                        </div>
                        <div class="form-group">
                            <label>Proposal Program:</label>
                            <input type="file" name="proposal_program" class="form-control">
                            <small>Current: <a href="{{ asset('storage/' . $pengajuans->proposal_program) }}" target="_blank">Lihat Dokumen</a></small>
                        </div>
                        <div class="form-group">
                            <label>Laporan Keuangan Terbaru:</label>
                            <input type="file" name="laporan_keuangan" class="form-control">
                            <small>Current: <a href="{{ asset('storage/' . $pengajuans->laporan_keuangan) }}" target="_blank">Lihat Dokumen</a></small>
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
                    <button type="submit" class="btn primary-button d-block mb-3 w-100">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</section>

@endsection
