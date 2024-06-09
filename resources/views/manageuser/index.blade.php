@extends('layout.template-layout')

@section('tittle', 'BagiBarang | Manage User')

@section('content')
@include('layout.main-layout')
<h1 class="ms-4 mb-3">Manage User</h1>

<a href="{{ route('manageuser.create') }}" class="btn btn-primary ms-3">Create User</a><br>
@if(Session::has('success'))
          <div class="alert alert-success alert-lg ms-3 mt-4"> {{ Session::get('success') }}</div>
        @endif
<div class="table-responsive sm  ms-3 mt-3">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th>ID</th>
                <th>Full_Name</th>
                <th>Username</th>
                <th>Telpon</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->full_name }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->telpon }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ route('manageuser.show', $user->id) }}" class="btn btn-primary">View</a>
                        <form action="{{ route('manageuser.destroy', $user->id) }}" method="POST" >
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection