@extends('layout.template-layout')

@section('tittle', 'BagiBarang | Riwayat Donasi')

@section('content')
@include('layout.main-layout')

<div class="table-responsive small ms-3 mt-3">
        @if (session('message'))
            <div class="alert alert-success">
              {{ session('message') }}
            </div>
        @endif

        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">UserID</th>
              <th scope="col">Nama Barang</th>
              <th scope="col">Kategori Barang</th>
              <th scope="col">Detail Barang</th>
              <th scope="col">Status Barang</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($donasis as $item)
            <tr>
              <td>{{ $item -> id}}</td>
              <td>{{ $item -> user_id}}</td>
              <td>{{ $item -> nama_barang}}</td>
              <td>{{ $item -> kategori_barang}}</td>
              <td>{{ $item -> detail_barang}}</td>
              <td>
              @if ($item->status == 'APPROVED')
                <i class="fw-bolder text-success">APPROVED</i> 
              @elseif ($item->status == 'REJECT')
                <i class="fw-bolder text-danger">REJECTED</i>
              @else
                <i class="fw-bolder text-secondary">PENDING</i>
              @endif
              </td>
              <td>
              <div class="btn-group">
                @if($item->status == 'PENDING')
                <a href="{{ url('/verifikasi-update').'/'.$item->id }}" class="btn btn-primary">Change Status</a>
                @endif
              </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>