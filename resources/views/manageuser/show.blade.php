@extends('layout.template-layout')

@section('tittle', 'BagiBarang | Show User')

@section('content')
@include('layout.main-layout')

<div class="card">
    <div class="card-header">
        <div class="card-body">
            <h1>User Details</h1>
            <p>ID: {{ $user->id }}</p>
            <p>Full_Name: {{ $user->full_name }}</p>
            <p>Username: {{ $user->username }}</p>
            <p>Telpon: {{ $user->telpon }}</p>
            <p>Email: {{ $user->email }}</p>
        </div> 
    </div>
</div><br>

    <a href="{{ route('manageuser.index') }}" class="btn btn-primary ms-3">Back to Users</a>
@endsection
