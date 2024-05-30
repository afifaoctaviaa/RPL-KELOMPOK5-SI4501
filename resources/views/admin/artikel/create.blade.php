@extends('layout.template-layout')

@section('tittle', 'BagiBarang | Create Artikel Donasi')

@section('content')
@include('layout.main-layout')
<h3 class="m-4">Create Artikel Donasi BagiBarang</h3>

<div class="col-lg-8 m-4">
    <form method="post" action="/artikel-admin">
        @csrf
      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title">
      </div>
      
      <button type="submit" class="btn btn-primary">Create Artikel</button>
    </form>
</div>
@endsection