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
    <link rel="stylesheet" href="{{ asset('assets/css/artikel.css') }}">

    <title>BagiBarang | Artikel</title>
</head>

<body id="artikel">

    <x-navbar></x-navbar>

    <div class="container">



        <div class="row">
            <div class="col-12">
                <h1>Edit: Artikel Kami</h1>
            </div>
        </div>

        <div class="row">

            @if (session('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('status') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @foreach ($articles as $article)
                <div class="col-md-4 col-lg-3 col-12">
                    <a href="{{ url('/artikel/edit').'/'.$article->slug }}">
                        <div class="item-artikel">
                            <div class="item-img" style="background-image: url('storage/artikel/{{ $article->photo }}')"></div>
                            <div class="item-text">
                                <h5>{{ $article->judul }}</h5>
                                <p>{{ Carbon\Carbon::parse($article->created_at)->diffForHumans() }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach

            <div class="col-md-4 col-lg-3 col-12">
                <a href="{{ url('artikel/tambah') }}">
                    <div class="item-artikel add">
                        <img src="{{ asset('assets/icon/add.png') }}" alt="add-icon">
                    </div>
                </a>
            </div>
        </div>

    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>
