@extends('layout.template-layout')

@section('tittle', 'BagiBarang | Baca Artikel')

@section('content')
@include('layout.main-layout')

<div class="container">   
  <div class="card mt-4">
      <div class="card-body">
      <h5 class="card-title">Baca Artikel</h5>
      <hr>

      <div class="row">
        @foreach ($data_artikel as $artikel)
          <div class="col-md-3 mb-4"> 
              <div class="card p-3">
                  <img src="{{ asset('storage/artikel/'. $artikel->photo) }}" class="card-img-top my-4" alt="Article Image" width="180" height="160">
                  <div class="card-body">
                      <h5 class="card-title">{{ $artikel -> judul }}</h5>
                      <p class="card-text">{{ Str::limit($artikel -> body, 100) }}</p>
                      <p class="card-text">{{ $artikel -> sumber }}</p>
                      <a href="{{ url('/show-artikel/'. $artikel->id) }}" class="btn btn-primary">Read More</a>
                  </div>
              </div>
          </div>
        @endforeach
      </div>      
  </div>
</div>


@endsection