@include('layout.main-layout')
@extends('layout.template-layout')

@section('tittle', 'BagiBarang | Dashboard Admin')

<main class="container mt-4">
<div class="row mb-4 justify-content-center">
    <div class="col-md-3">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative" style="background-color: #A8DADC;">
        <div class="col p-4 d-flex flex-column position-static">
          <h3 class="mb-0">Jumlah User</h3>
          <p class="card-text mb-auto mt-2"></p>
          <a href="/donasi" class="icon-link gap-1 icon-link-hover stretched-link ">
            Check Sekarang
            <svg class="bi"><use xlink:href="#chevron-right"/></svg>
          </a>
        </div>
    
      </div>
    </div>
    <div class="col-md-3">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative" style="background-color: #A8DADC;">
            <div class="col p-4 d-flex flex-column position-static">
            <h3 class="mb-0">Jumlah FAQs</h3>
            <p class="mb-auto mt-2"></p>
            <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                Check Sekarang 
                <svg class="bi"><use xlink:href="#chevron-right"/></svg>
            </a>
            </div>
      </div>
    </div>
    <div class="col-md-3">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative" style="background-color: #A8DADC;">
            <div class="col p-4 d-flex flex-column position-static">
            <h3 class="mb-0">Notifikasi</h3>
            <p class="mb-auto mt-2"></p>
            <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                Check Sekarang
                <svg class="bi"><use xlink:href="#chevron-right"/></svg>
            </a>
            </div>
      </div>
    </div>
</div>
<!-- Artikel -->
<div class="row mb-2">
    <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative text-light" style="background-color: #395144;">
            <div class="col p-4 d-flex flex-column position-static">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-auto position-relative text-light" style="background-color: #395144;">
              <div class="col p-4 d-flex flex-column position-static">
                  <h3 class="mb-0">Artikel Kami</h3>
                  <ul class="list-unstyled">
              <li>
                <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top text-light" href="#">
                  <svg class="bd-placeholder-img" width="100%" height="96" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
                  <div class="col-lg-8">
                    <h6 class="mb-0">Example blog post title</h6>
                    <small class="text-light">January 15, 2024</small>
                  </div>
                </a>
              </li>
              <li>
                <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top text-light" href="#">
                  <svg class="bd-placeholder-img" width="100%" height="96" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
                  <div class="col-lg-8">
                    <h6 class="mb-0">This is another blog post title</h6>
                    <small class="text-light">January 14, 2024</small>
                  </div>
                </a>
              </li>
              <ul class="list-unstyled">
              <li>
                <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top text-light" href="#">
                  <svg class="bd-placeholder-img" width="100%" height="96" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
                  <div class="col-lg-8">
                    <h6 class="mb-0">Example blog post title</h6>
                    <small class="text-light">January 15, 2024</small>
                  </div>
                </a>
              </li>
              <li>
                <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top text-light" href="#">
                  <svg class="bd-placeholder-img" width="100%" height="96" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
                  <div class="col-lg-8">
                    <h6 class="mb-0">This is another blog post title</h6>
                    <small class="text-light">January 14, 2024</small>
                  </div>
                </a>
              </li>

                  <a href="#" class="icon-link gap-1 icon-link-hover stretched-link text-light">
                      Artikel 
                      <svg class="bi"><use xlink:href="#chevron-right"/></svg>
                  </a>
              </div>
            </div>
        </div>
    
    </div>
</div>
<!-- Daftar Donasi -->
<div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative text-light" style="background-color: #395144;">
        <div class="col p-4 d-flex flex-column position-static">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-auto position-relative text-light" style="background-color: #395144;">
              <div class="col p-4 d-flex flex-column position-static">
                  <h3 class="mb-0">Daftar Donasi</h3>
                  <ul class="list-unstyled">
              <li>
                <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top text-light" href="#">
                  <svg class="bd-placeholder-img" width="100%" height="96" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
                  <div class="col-lg-8">
                    <h6 class="mb-0">Example blog post title</h6>
                    <small class="text-light">January 15, 2024</small>
                  </div>
                </a>
              </li>
              <li>
                <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top text-light" href="#">
                  <svg class="bd-placeholder-img" width="100%" height="96" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
                  <div class="col-lg-8">
                    <h6 class="mb-0">This is another blog post title</h6>
                    <small class="text-light">January 14, 2024</small>
                  </div>
                </a>
              </li>
              <ul class="list-unstyled">
              <li>
                <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top text-light" href="#">
                  <svg class="bd-placeholder-img" width="100%" height="96" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
                  <div class="col-lg-8">
                    <h6 class="mb-0">Example blog post title</h6>
                    <small class="text-light">January 15, 2024</small>
                  </div>
                </a>
              </li>
              <li>
                <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top text-light" href="#">
                  <svg class="bd-placeholder-img" width="100%" height="96" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
                  <div class="col-lg-8">
                    <h6 class="mb-0">This is another blog post title</h6>
                    <small class="text-light">January 14, 2024</small>
                  </div>
                </a>
              </li>

                  <a href="#" class="icon-link gap-1 icon-link-hover stretched-link text-light">
                      Donasi
                      <svg class="bi"><use xlink:href="#chevron-right"/></svg>
                  </a>
              </div>
        </div>
      </div>
</div>

</main>