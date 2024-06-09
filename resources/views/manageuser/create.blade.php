@extends('layout.template-layout')

@section('tittle', 'BagiBarang | Create User')

@section('content')
@include('layout.main-layout')

<h3>Ini Buat User</h3>

<div class="card mt-5">
    <div class="card-body">
        <form action="{{ route('manageuser.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="my-input my-2">Full Name</label>
                <input id="full_name" class="form-control @error('full_name') is invalid @enderror" type="text" name="full_name" required value="{{ old('full_name') }}">
                @error('full_name')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group mt-3">
                <label for="my-input my-2">Username</label>
                <input id="username" class="form-control @error('username') is invalid @enderror" type="text" name="username" required value="{{ old('username') }}">
                @error('username')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group mt-3">
                <label for="my-input my-2">Email</label>
                <input id="email" class="form-control @error('email') is invalid @enderror" type="text" name="email" required value="{{ old('email') }}">
                @error('email')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group mt-3">
                <label for="my-input my-2">Nomer Telepon</label>
                <input id="telpon" class="form-control @error('telpon') is invalid @enderror" type="text" name="telpon" required value="{{ old('telpon') }}">
                @error('telpon')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group mt-3">
                <label for="my-input my-2">Password</label>
                <input id="password" class="form-control @error('password') is invalid @enderror" type="password" name="password" required>
                @error('password')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div><hr>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</div>
@endsection


