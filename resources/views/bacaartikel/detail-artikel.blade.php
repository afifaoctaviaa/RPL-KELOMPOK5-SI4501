@extends('layout.template-layout')

@section('tittle', 'BagiBarang | Baca Artikel')

@section('content')
@include('layout.main-layout')

<div class="container">   
  <div class="card mt-4">
      <div class="card-body">
      <h5 class="card-title">{{ $artikel -> judul }}</h5>
      <p class="card-text">{{ $artikel -> sumber }}</p>
      <hr>

      <div class="row">
      <div style="display: flex; justify-content: center;">
            <img src="{{ asset('storage/artikel/'. $artikel->photo) }}" class="my-4" alt="Article Image" style="width: 500px; height: 450px;">
        </div>
        <div class="card-body">
            <p class="card-text">{!! $artikel -> body !!}</p>
        </div>
      </div>      
  </div>
</div>


@endsection