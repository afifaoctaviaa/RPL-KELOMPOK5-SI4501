<header>
    @auth
        <nav class="navbar navbar-expand-lg" style="background-color:#395144">
            <div class="container-fluid m-3">
                <a class="navbar-brand fw-bolder fs-3 active" style="color:#F0EBCE" href="/">BagiBarang</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" style="color:#F0EBCE" aria-current="page" href="/tentangkami">Tentang
                            Kami</a>
                        <a class="nav-link active" style="color:#F0EBCE" href="/login">Donasi Sekarang</a>
                        <a class="nav-link active" style="color:#F0EBCE" href="#">Notifikasi</a>
                        <div class="dropdown">
                            <button class="btn dropdown-toggle text-light" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Pengaturan
                            </button>
                            <ul class="dropdown-menu">
                                @if (Auth::user()->full_name == 'admin')
                                <li><a class="dropdown-item" href="/dashboardadmin">My Dashboard</a></li>
                                @else
                                <li><a class="dropdown-item" href="/dashboard">My Dashboard</a></li>
                                @endif
                                <hr>
                                <li><a class="dropdown-item" href="#">Edit Profil</a></li>
                                <hr>
                                <form action="/logout" method="post">
                                    @csrf
                                    <li><button class="dropdown-item" type="submit">LogOut</button></li>

                                </form>
                            </ul>
                        </div>
                    @else
                        <nav class="navbar navbar-expand-lg" style="background-color:#395144">
                            <div class="container-fluid m-3">
                                <a class="navbar-brand fw-bolder fs-3 active" style="color:#F0EBCE"
                                    href="/">BagiBarang</a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                    <div class="navbar-nav">
                                        <a class="nav-link active" style="color:#F0EBCE" aria-current="page"
                                            href="/tentangkami">Tentang Kami</a>
                                        <a class="nav-link active" style="color:#F0EBCE" href="/login">Donasi Sekarang</a>
                                        <a class="nav-link active" style="color:#F0EBCE" href="#">Notifikasi</a>
                                        <a class="nav-link active   p-1 mb-1  mx-2 px-4 btn text-light" style="background-color:#AA8B56;"  href="/login">Login </a>
                                        <a class="nav-link active text-light btn p-1 px-2 mb-1 mx-2 bg-secondary" href="/registrasi">Daftar
                                            Sekarang</a>
                                    @endauth
                                </div>
                            </div>
                        </div>
                    </nav>
</header>
