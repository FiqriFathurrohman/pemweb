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
        <li class="nav-item">
          <a class="nav-link {{ request()->is('/') ? 'active fw-semibold' : '' }}" href="{{ route('home') }}">Beranda</a>
        </li>
        {{-- Tambahkan menu lainnya jika diperlukan --}}
        
      </ul>
    </div>
  </div>
</nav>
