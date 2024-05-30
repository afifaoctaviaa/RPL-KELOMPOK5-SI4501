@extends('layout.template-layout')

@section('tittle', 'BagiBarang | Approval Mitra')

@section('content')
@include('layout.main-layout')

<h1>Mitra Approval</h1>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
<div class="table-responsive sm  ms-3 mt-3">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th>ID</th>
                <th>User_ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Alamat</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mitras as $mitra)
                <tr>
                    <td>{{ $mitra->id }}</td>
                    <td>{{ $mitra->user_id }}</td>
                    <td>{{ $mitra->name }}</td>
                    <td>{{ $mitra->email }}</td>
                    <td>{{ $mitra->phone }}</td>
                    <td>{{ $mitra->alamat }}</td>
                    <td>{{ $mitra->status }}</td>
                    <td>
                        <a href="{{ route('mitra.show', $mitra->id) }}" class="btn btn-primary">Show</a>
                        <form action="{{ route('mitra.update', $mitra->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="action" value="approve">
                            <button type="submit" class="btn btn-success">Approve</button>
                        </form>
                        <form action="{{ route('mitra.update', $mitra->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="action" value="reject">
                            <button type="submit" class="btn btn-warning">Reject</button>
                        </form>
                        <form action="{{ route('mitra.destroy', $mitra->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Apakah anda yakin?');" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection