@extends('layout.template-layout')

@section('tittle', 'BagiBarang | Riwayat Donasi')

@section('content')
@include('layout.main-layout')

<div class="table-responsive small ms-3 mt-3">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nama Barang</th>
              <th scope="col">Kategori Barang</th>
              <th scope="col">Detail Barang</th>
              <th scope="col">Status Barang</th>
              <th scope="col">Action</th> 
            </tr>
          </thead>
          <tbody>
            @foreach ($riwayat as $donasi)
            <tr>
              <td>{{ $donasi -> id}}</td>
              <td>{{ $donasi -> nama_barang}}</td>
              <td>{{ $donasi -> kategori_barang}}</td>
              <td>{{ $donasi -> detail_barang}}</td>
              <td>
              @if ($donasi->status == 'APPROVED')
                <i class="fw-bolder text-success">APPROVED</i> 
              @elseif ($donasi->status == 'REJECT')
                <i class="fw-bolder text-danger">REJECTED</i>
              @else
                <i class="fw-bolder text-secondary">PENDING</i>
              @endif
              </td>
              <td><a href="{{ url('riwayat-donasi/delete/'.$donasi->id)}}" class="btn btn-danger">Delete</a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
        @if(Session::has('deletedMessage'))
          <div class="alert alert-danger alert-lg"> {{ Session::get('deletedMessage') }}</div>
        @endif
      </div>