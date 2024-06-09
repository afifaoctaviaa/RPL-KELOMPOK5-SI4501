@extends('layout.template-layout')

@section('title', 'BagiBarang | Pengajuan Mitra')

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
                <h1 class="title">Daftar Pengajuan Mitra</h1>
                <p class="subtitle">Berikut adalah daftar pengajuan mitra yang telah Anda buat.</p>
            </div>
        </div>
    </div>
</section>
{{-- End Hero Section --}}

{{-- Index Section --}}
<section id="index">
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show my-4" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="row my-4">
            <div class="col-12">
                <a href="{{ route('pengajuanmitra.create') }}" class="btn primary-button">Buat Pengajuan Baru</a>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-l">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Telepon</th>
                        <th>Alamat</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pengajuans as $mitra)
                        <tr class="m-1">
                            <td>{{ $mitra->id }}</td>
                            <td>{{ $mitra->nama_organisasi }}</td>
                            <td>{{ $mitra->email_organisasi }}</td>
                            <td>{{ $mitra->telepon_kontak_person }}</td>
                            <td>{{ $mitra->alamat_organisasi }}</td>
                            <td>{{ $mitra->status }}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Actions">
                                    <a class="btn btn-primary btn-sm mx-1"
                                        href="{{ route('pengajuanmitra.show', $mitra->id) }}">Detail</a>
                                    <a class="btn btn-secondary btn-sm mx-1"
                                        href="{{ route('pengajuanmitra.edit', $mitra->id) }}">Edit</a>
                                    <form action="{{ route('pengajuanmitra.destroy', $mitra->id) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm mx-1">Hapus</button>
                                    </form>
                                </div>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
{{-- End Index Section --}}


@endsection