@extends('layout.template-layout')

@section('tittle', 'BagiBarang | Artikel Donasi')

@section('content')
@include('layout.main-layout')
<h3 class="m-4">Artikel Donasi BagiBarang</h3>
<a href="/artikel-admin/create" class="btn btn-primary m-4">Create New Artikel</a>

<div class="table-responsive small ms-4 mt-3">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Judul Artikel</th>
              <th scope="col">Action Artikel</th>
            </tr>
          </thead>
          <tbody>
            <tr>
            </tr>

          </tbody>
        </table>
</div>
@endsection