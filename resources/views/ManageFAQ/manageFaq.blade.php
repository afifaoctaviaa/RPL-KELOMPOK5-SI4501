@extends('layout.template-layout')

@section('title', 'Manage FAQ')



@section('content')
@include('layout.main-layout')

<h1 class="d-flex justify-content-center mt-5" style="font-weight: bold">Manage FAQ</h1>
<div class="d-flex justify-content-center align-items-center" style="min-height: 35vh;">    
    <div class="container">
        @if (Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{session('success')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (Session::has('failed'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{session('failed')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        
        <a class="btn btn-success" href="addFaqPage">+Add</a>
        <br><br>
        <table  class="table table-bordered">
            <thead class="table-success">
                <tr>
                <th scope="col">id</th>
                <th scope="col">Header</th>
                <th scope="col">Content</th> 
                <th scope="col">Action</th> 
                
                </tr>
            </thead>

            <tbody>
            @foreach ($faq as $faqs)
                <tr>
                <th scope="row">{{$faqs->id}}</th>
                <td>{{$faqs->Header}}</td>
                <td>{{$faqs->Content}}</td>
                <td>
                    <a class="btn btn-outline-info"href="{{ URL('updateFaq',$faqs->id) }}">Edit</a>
                    <a class="btn btn-outline-danger delete"href="{{ URL('delete-faq', $faqs->id) }}">Hapus</a>
                </td>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection