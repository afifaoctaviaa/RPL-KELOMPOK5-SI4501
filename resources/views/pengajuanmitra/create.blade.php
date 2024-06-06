@extends('layout.template-layout')

@section('title', 'BagiBarang | Create Pengajuan Mitra')

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
                    <p class="subtitle">Isi formulir di bawah ini untuk mengajukan kerjasama sebagai mitra.</p>
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
                    <div class="alert alert-danger" id="error-alert">
                        Ada kolom yang masih kosong, pastikan anda sudah mengisi semua kolom!
                    </div>
                @endif

                <div class="col">
                    <div class="timeline">
                        <div class="d-flex align-items-center">
                            <div class="progress progress-1 active" id="progress1"></div>
                            <div class="progress-line"></div>
                            <div class="progress progress-2" id="progress2"></div>
                            <div class="progress-line"></div>
                            <div class="progress progress-3" id="progress3"></div>
                        </div>
                    </div>
                </div>
            </div>

            <form action="{{ route('pengajuanmitra.store') }}" method="POST" enctype="multipart/form-data" id="pengajuanMitraForm">
                @csrf

                {{-- Slide 1: Informasi Umum --}}
                <div class="slide" id="slide1">
                    <div class="row">
                        <div class="col-12">
                            <h2>Informasi Umum</h2>
                            <div class="form-group">
                                <label>Nama Organisasi:</label>
                                <input type="text" class="form-control" name="nama_organisasi" required>
                            </div>
                            <div class="form-group">
                                <label>Alamat Organisasi:</label>
                                <input type="text" class="form-control" name="alamat_organisasi" required>
                            </div>
                            <div class="form-group">
                                <label>Nomor Telepon Organisasi:</label>
                                <input type="text" class="form-control" name="telepon_organisasi" required>
                            </div>
                            <div class="form-group">
                                <label>Email Organisasi:</label>
                                <input type="email" class="form-control" name="email_organisasi" required>
                            </div>
                            <div class="form-group">
                                <label>Website Organisasi:</label>
                                <input type="text" class="form-control" name="website_organisasi">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <a href="#" class="btn primary-button d-block mb-3 w-100" onclick="validateAndShowSlide(2)">Selanjutnya</a>
                        </div>
                    </div>
                </div>

                {{-- Slide 2: Informasi Kontak --}}
                <div class="slide d-none" id="slide2">
                    <div class="row">
                        <div class="col-12">
                            <h2>Informasi Kontak</h2>
                            <div class="form-group">
                                <label>Nama Kontak Person:</label>
                                <input type="text" class="form-control" name="nama_kontak_person" required>
                            </div>
                            <div class="form-group">
                                <label>Jabatan Kontak Person:</label>
                                <input type="text" class="form-control" name="jabatan_kontak_person" required>
                            </div>
                            <div class="form-group">
                                <label>Nomor Telepon Kontak Person:</label>
                                <input type="text" class="form-control" name="telepon_kontak_person" required>
                            </div>
                            <div class="form-group">
                                <label>Email Kontak Person:</label>
                                <input type="email" class="form-control" name="email_kontak_person" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <a href="#" class="btn secondary-button d-block mb-3" onclick="showSlide(1)">Sebelumnya</a>
                        </div>
                        <div class="col-12 col-md-6">
                            <a href="#" class="btn primary-button d-block mb-3 w-100" onclick="validateAndShowSlide(3)">Selanjutnya</a>
                        </div>
                    </div>
                </div>

                {{-- Slide 3: Dokumen Pendukung --}}
                <div class="slide d-none" id="slide3">
                    <div class="row">
                        <div class="col-12">
                            <h2>Dokumen Pendukung</h2>
                            <div class="form-group">
                                <label>Dokumen Legalitas Organisasi:</label>
                                <input type="file" class="form-control" name="dokumen_legalitas"  required>
                            </div>
                            <div class="form-group">
                                <label>Proposal Program:</label>
                                <input type="file" class="form-control" name="proposal_program" required>
                            </div>
                            <div class="form-group">
                                <label>Laporan Keuangan Terbaru:</label>
                                <input type="file" class="form-control" name="laporan_keuangan" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <a href="#" class="btn secondary-button d-block mb-3" onclick="showSlide(2)">Sebelumnya</a>
                        </div>
                        <div class="col-12 col-md-6">
                            <button type="submit" class="btn primary-button d-block mb-3 w-100">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    {{-- End Form Section --}}
  

    <script>
        function showSlide(slideNumber) {
            const slides = document.querySelectorAll('.slide');
            slides.forEach((slide, index) => {
                if (index + 1 === slideNumber) {
                    slide.classList.remove('d-none');
                } else {
                    slide.classList.add('d-none');
                }
            });

            const progress1 = document.getElementById('progress1');
            const progress2 = document.getElementById('progress2');
            const progress3 = document.getElementById('progress3');

            progress1.classList.remove('active');
            progress2.classList.remove('active');
            progress3.classList.remove('active');

            if (slideNumber === 1) {
                progress1.classList.add('active');
            } else if (slideNumber === 2) {
                progress2.classList.add('active');
            } else if (slideNumber === 3) {
                progress3.classList.add('active');
            }
        }

        function validateAndShowSlide(slideNumber) {
            const currentSlide = document.querySelector(`.slide:not(.d-none)`);
            const inputs = currentSlide.querySelectorAll('input[required]');
            let allFilled = true;

            inputs.forEach(input => {
                if (!input.value) {
                    allFilled = false;
                    input.classList.add('is-invalid');
                } else {
                    input.classList.remove('is-invalid');
                }
            });

            if (allFilled) {
                showSlide(slideNumber);
            } else {
                document.getElementById('error-alert').classList.remove('d-none');
            }
        }
    </script>
@endsection
