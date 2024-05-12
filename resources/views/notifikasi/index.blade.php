<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <title>BagiBarang | Notifikasi</title>
</head>

<body id="notifikasi">

    <x-navbar></x-navbar>


    {{-- Hero Section --}}
    <section id="hero">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <nav aria-label="breadcrumb" class="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Notifikasi</li>
                        </ol>
                    </nav>
                    <h1 class="title">Notifikasi</h1>
                </div>
            </div>
        </div>
    </section>
    {{-- End Hero Section --}}


    <div class="container p-5">
        @foreach ($notifications as $notification)
            <div class="row mb-3">
                <div class="col-12">
                    <button class="btn btn-primary w-100" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse{{$notification->id}}" aria-expanded="false" aria-controls="collapse{{$notification->id}}">
                        {{ $notification->judul }}
                    </button>
                    <div class="collapse" id="collapse{{$notification->id}}">
                        <div class="card card-body">
                            <p>{{ $notification->judul }}</p>
                            <p>{{ $notification->description }}</p>
                            <p>{{ $notification->alamat }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>
