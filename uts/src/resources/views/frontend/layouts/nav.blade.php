<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom shadow-sm py-3">
    <div class="container">

        {{-- Logo / Brand --}}
        <a class="navbar-brand fw-bold text-primary" href="{{ route('home') }}">
            <i class="fas fa-graduation-cap me-2"></i> BeasiswaUEU
        </a>

        {{-- Button Mobile View --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        {{-- Menu --}}
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">

                {{-- Beranda --}}
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active fw-semibold' : '' }}" href="{{ route('home') }}">
                        <i class="fas fa-home me-1"></i> Beranda
                    </a>
                </li>

                {{-- Daftar Beasiswa --}}
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('penerima-beasiswa') ? 'active fw-semibold' : '' }}"
                        href="{{ url('/penerima-beasiswa') }}">
                        <i class="fas fa-users me-1"></i> Penerima Beasiswa
                    </a>
                </li>

                {{-- Dropdown Contoh --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->is('info*') ? 'active fw-semibold' : '' }}"
                        href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-info-circle me-1"></i> Info
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Tentang Beasiswa</a></li>
                        <li><a class="dropdown-item" href="#">FAQ</a></li>
                    </ul>
                </li>

            </ul>
        </div>

    </div>
</nav>
