@extends('componentsAdmin.mainLayout')

@section('title', 'Add FAQ')

@section('style')
<link rel="stylesheet" href="{{ asset('assets/css/manageFaq.css') }}">
@endsection

@section('content')


<div class="container mt-lg-5">
    <div class="global-container">
        <div class="card login-form">
            <div class="card-body">
                <h1 class="card-title text-center">ADD FAQ</h1><br>
                <form action="{{ route('updateDataFaq', $updateFaq->id) }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="Header" class="form-label">Add Header</label>
                    <input type="text" class="form-control" id="Header" aria-describedby="emailHelp" name="Header" value="{{$updateFaq->Header}}">
                    <span class="text-danger">@error("Header") {{$message}} @enderror</span>
                </div>
                <div class="mb-3"> 
                    <label for="Content" class="form-label">Add Content</label>           
                    <input type="text" class="form-control" id="Content" name="Content" value="{{$updateFaq->Content}}">      
                    <span class="text-danger">@error("Content") {{$message}} @enderror</span>
                </div>
                </div>
                <div class="d-flex">
                    <div class="p-2 flex-grow-1">                        
                        <button type="submit" class="btn btn-success">Update FAQ</button>
                    </div>
                    <div class="p-2">
                        <a class="btn btn-danger" href="{{ route('manageFaq') }}">kembali</a>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection