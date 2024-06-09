@include('layout.main-layout')
@extends('layout.template-layout')

@section('tittle', 'BagiBarang | Dashboard Admin')

<main class="container mt-4">
    <div class="row mb-4 justify-content-center">
        <div class="col-md-3">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative"
                style="background-color: #A8DADC;">
                <div class="col p-4 d-flex flex-column position-static">
                    <h3 class="mb-0">Jumlah User</h3>
                    <p class="card-text mb-auto mt-2"></p>
                    <a href="/manageuser" class="icon-link gap-1 icon-link-hover stretched-link ">
                        Check Jumlah User
                        <svg class="bi">
                            <use xlink:href="#chevron-right" />
                        </svg>
                    </a>
                </div>

            </div>
        </div>
        <div class="col-md-3">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative"
                style="background-color: #A8DADC;">
                <div class="col p-4 d-flex flex-column position-static">
                    <h3 class="mb-0">Edit FAQs</h3>
                    <h3 class="mb-0">Edit FAQs</h3>
                    <p class="mb-auto mt-2"></p>
                    <a href="/manageFaq" class="icon-link gap-1 icon-link-hover stretched-link">
                        Check FAQs
                    <a href="/manageFaq" class="icon-link gap-1 icon-link-hover stretched-link">
                        Check FAQs
                        <svg class="bi">
                            <use xlink:href="#chevron-right" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative"
                style="background-color: #A8DADC;">
                <div class="col p-4 d-flex flex-column position-static">
                    <h3 class="mb-0">Review</h3>
                    <h3 class="mb-0">Review</h3>
                    <p class="mb-auto mt-2"></p>
                    <a href="/admin/reviews" class="icon-link gap-1 icon-link-hover stretched-link">
                        Check Review
                    <a href="/admin/reviews" class="icon-link gap-1 icon-link-hover stretched-link">
                        Check Review
                        <svg class="bi">
                            <use xlink:href="#chevron-right" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative"
                style="background-color: #A8DADC;">
                <div class="col p-4 d-flex flex-column position-static">
                    <h3 class="mb-0">Approval Mitra</h3>
                    <p class="mb-auto mt-2"></p>
                    <a href="/mitra" class="icon-link gap-1 icon-link-hover stretched-link">
                        Check Mitra
                        <svg class="bi">
                            <use xlink:href="#chevron-right" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <!-- Artikel -->
        <div class="row mb-2">
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative text-light"
                    style="background-color: #395144;">
                    <div class="col p-4 d-flex flex-column position-static">
                        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-auto position-relative text-light"
                            style="background-color: #395144;">
                            <div class="col p-4 d-flex flex-column position-static">
                                <h3 class="mb-0">Artikel Kami</h3>
                                <ul class="list-unstyled">
                                    @foreach ($artikels as $artikel)
                                        <li>
                                            <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top text-light"
                                                href="#">
                                               <!-- <svg class="bd-placeholder-img" width="100%" height="96"
                                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                                    preserveAspectRatio="xMidYMid slice" focusable="false">
                                                    <rect width="100%" height="100%" fill="#777" />
                                                </svg> -->
                                                
                                              <img src="{{ asset('storage/artikel/' . $artikel->photo) }}" width="100%" height="96" alt="">
                                                <div class="col-lg-8">
                                                    <h6 class="mb-0">{{$artikel->judul}}</h6>
                                                    <small class="text-light">{{ Carbon\Carbon::parse($artikel->created_at)->diffForHumans() }}</small>
                                                </div>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                                <a href="/artikel" class="icon-link gap-1 icon-link-hover stretched-link text-light">
                                    Artikel
                                    <svg class="bi">
                                        <use xlink:href="#chevron-right" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative"
                style="background-color: #A8DADC;">
                <div class="col p-4 d-flex flex-column position-static">
                    <h3 class="mb-0">Approval Mitra</h3>
                    <p class="mb-auto mt-2"></p>
                    <a href="/mitra" class="icon-link gap-1 icon-link-hover stretched-link">
                        Check Mitra
                        <svg class="bi">
                            <use xlink:href="#chevron-right" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <!-- Artikel -->
        <div class="row mb-2">
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative text-light"
                    style="background-color: #395144;">
                    <div class="col p-4 d-flex flex-column position-static">
                        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-auto position-relative text-light"
                            style="background-color: #395144;">
                            <div class="col p-4 d-flex flex-column position-static">
                                <h3 class="mb-0">Artikel Kami</h3>
                                <ul class="list-unstyled">
                                    @foreach ($artikels as $artikel)
                                        <li>
                                            <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top text-light"
                                                href="#">
                                               <!-- <svg class="bd-placeholder-img" width="100%" height="96"
                                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                                    preserveAspectRatio="xMidYMid slice" focusable="false">
                                                    <rect width="100%" height="100%" fill="#777" />
                                                </svg> -->
                                                
                                              <img src="{{ asset('storage/artikel/' . $artikel->photo) }}" width="100%" height="96" alt="">
                                                <div class="col-lg-8">
                                                    <h6 class="mb-0">{{$artikel->judul}}</h6>
                                                    <small class="text-light">{{ Carbon\Carbon::parse($artikel->created_at)->diffForHumans() }}</small>
                                                </div>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                                <a href="/artikel" class="icon-link gap-1 icon-link-hover stretched-link text-light">
                                    Artikel
                                    <svg class="bi">
                                        <use xlink:href="#chevron-right" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Daftar Donasi -->
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative text-light"
                    style="background-color: #395144;">
                    <div class="col p-4 d-flex flex-column position-static">
                        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-auto position-relative text-light"
                            style="background-color: #395144;">
                            <div class="col p-4 d-flex flex-column position-static">
                                <h3 class="mb-0">Daftar Donasi</h3>
                                <ul class="list-unstyled">
                </div>
            </div>
            <!-- Daftar Donasi -->
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative text-light"
                    style="background-color: #395144;">
                    <div class="col p-4 d-flex flex-column position-static">
                        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-auto position-relative text-light"
                            style="background-color: #395144;">
                            <div class="col p-4 d-flex flex-column position-static">
                                <h3 class="mb-0">Daftar Donasi</h3>
                                <ul class="list-unstyled">

                                    @foreach ($donasi as $d)
                                        <li>
                                            <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top text-light"
                                                href="#">
                                                <img src="{{ asset('storage/barang/')  . $d->foto_barang }}"
                                                    alt="foto-barang" width="200">
                                                <div class="col-lg-8">
                                                    <h6 class="mb-0">{{ $d->nama_barang }}</h6>
                                                    <small
                                                        class="text-light">{{ Carbon\Carbon::parse($d->created_at)->diffForHumans() }}</small>
                                                </div>
                                            </a>
                                        </li>
                                    @endforeach
                                    @foreach ($donasi as $d)
                                        <li>
                                            <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top text-light"
                                                href="#">
                                                <img src="{{ asset('storage/barang/')  . $d->foto_barang }}"
                                                    alt="foto-barang" width="200">
                                                <div class="col-lg-8">
                                                    <h6 class="mb-0">{{ $d->nama_barang }}</h6>
                                                    <small
                                                        class="text-light">{{ Carbon\Carbon::parse($d->created_at)->diffForHumans() }}</small>
                                                </div>
                                            </a>
                                        </li>
                                    @endforeach


                                    <a href="/verifikasi"
                                        class="icon-link gap-1 icon-link-hover stretched-link text-light">
                                        Donasi
                                        <svg class="bi">
                                            <use xlink:href="#chevron-right" />
                                        </svg>
                                    </a>
                            </div>
                        </div>
                    </div>
                </div>

</main>