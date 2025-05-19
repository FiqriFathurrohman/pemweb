<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
  <div class="container">
    <a class="navbar-brand fw-bold" href="{{ route('home') }}">
      <i class="fas fa-graduation-cap me-2"></i> BeasiswaUEU
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        {{-- Beranda --}}
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('home') ? 'active fw-semibold text-primary' : '' }}" href="{{ route('home') }}">
            Beranda
          </a>
        </li>

        {{-- Beasiswa --}}
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('beasiswa') ? 'active fw-semibold text-primary' : '' }}" href="{{ route('beasiswa') }}">
            Beasiswa
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
