@include('layout.main-layout')

@extends('layout.template-layout')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .container {
            background-color: #395144;
            padding: 50px;
            margin-top: 100px;
        }

        .profile-img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            background-color: aliceblue;
            position: relative;
            background-size: cover;
        }

        .pencil-label {
            position: absolute;
            bottom: 0;
            right: 10;
            width: 35px;
            height: 35px;
            background-color: rgb(169, 169, 169);
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            color: antiquewhite;
            font-size: 18px;
            font-weight: 400;
        }
    </style>
</head>

<body>


    <div class="container">
        @session('status')
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endsession
        <form action="{{ url('/profile') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row justify-content-center">
                <div class="col-12 col-lg-6 d-flex align-items-center flex-column">
                    <div class="profile-img mb-3"
                        style="background-image: url('{{asset('/storage/user/'. $user->profile_photo)}}');">
                        <label for="profile-photo" class="pencil-label">
                            <img src="{{ asset('images/pencil.png') }}" alt="edit-btn" width="20">
                        </label>
                        <input type="file" name="profile_photo" id="profile-photo" style="display: none">
                    </div>

                    <h2 style="color: #dddddde2">{{ $user->full_name }}</h2>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control"
                            value="{{ $user->full_name }}">
                    </div>

                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" class="form-control"
                            value="{{ $user->username }}">
                    </div>

                    <div class="form-group">
                        <label for="telpon">No Telepon</label>
                        <input type="text" name="telpon" id="telpon" class="form-control"
                            value="{{ $user->telpon }}">
                    </div>

                    <button type="submit" class="btn btn-primary d-block w-100">Save</button>
                </div>
            </div>
        </form>
    </div>

</body>

</html>
