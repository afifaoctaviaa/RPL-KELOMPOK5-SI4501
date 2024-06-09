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


    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.1/dist/quill.snow.css" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/artikel.css') }}">

    <title>BagiBarang | Artikel</title>
</head>

<body id="artikel">

    <x-navbar></x-navbar>

    <div class="container">

        <div class="row">
            <div class="col-12">
                <h1>Buat Artikel Baru</h1>
            </div>
        </div>

        <form action="{{ url('/artikel/tambah') }}" method="POST" enctype="multipart/form-data" id="artikelForm">
            @csrf
            <div class="row" id="form">
                <div class="col-md-6 col-12">
                    <div class="form-group">
                        <label for="judul">Judul Artikel</label>
                        <input type="text" class="form-control" name="judul" id="judul">
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="form-group">
                        <label for="sumber">Sumber</label>
                        <input type="text" class="form-control" name="sumber" id="sumber">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="isi">Isi Artikel</label>
                        <input type="hidden" name="body">
                        <div id="editor"></div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="foto">Foto Artikel</label>
                        <input type="file" class="form-control" name="foto" id="foto" accept="image/png, image/jpeg">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6">
                    <a href="{{ url('/artikel') }}" class="btn secondary-button d-block">Kembali</a>
                </div>
                <div class="col-12 col-md-6">
                    <button type="submit" class="btn primary-button w-100"
                        style="background-color: var(--hijau-tua)">Posting</button>
                </div>
            </div>
        </form>

    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Include the Quill library -->
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.1/dist/quill.js"></script>

    <!-- Initialize Quill editor -->
    <script>
        const quill = new Quill('#editor', {
            theme: 'snow'
        });

        var form = document.getElementById('artikelForm');
        form.onsubmit = function() {
            var content = document.querySelector('input[name=body]');
            content.value = quill.root.innerHTML;
        }
    </script>

</body>

</html>
