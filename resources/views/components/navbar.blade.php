<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('assets/img/logo.svg') }}" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Donasi Sekarang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Notifikasi</a>
                </li>
                @auth
                    <div class="dropdown">
                        <button class="btn dropdown-toggle text-light" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Pengaturan
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('/dashboard') }}">My Dashboard</a></li>
                            <hr>
                            <li><a class="dropdown-item" href="#">Edit Profil</a></li>
                            <hr>
                            <form action="{{ url('/logout') }}" method="post">
                                @csrf
                                <li><button class="dropdown-item" type="submit">LogOut</button></li>

                            </form>
                        </ul>
                    </div>
                @else
                    <div class="nav-item">
                        <a href="{{ url('/registrasi') }}" class="btn secondary-button">Daftar Sekarang</a>
                    </div>

                @endauth
            </ul>
        </div>
    </div>
</nav>
