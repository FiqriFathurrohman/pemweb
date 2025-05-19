@extends('frontend.layouts.app')

@section('content')
<div class="container text-center mt-5 mb-5">

  {{-- Judul --}}
  <h1 class="fw-bold mb-3">Selamat Datang di Sistem Beasiswa UEU</h1>
  <p class="text-muted mb-4">Lihat daftar penerima beasiswa aktif dari seluruh mahasiswa.</p>

  {{-- Logo --}}
  <div class="mb-4">
    <img src="{{ asset('front/assets/images/logo.png') }}" alt="Logo Beasiswa" class="img-fluid" style="max-width: 250px;">
  </div>

  {{-- Tombol --}}
  <a href="{{ route('beasiswa') }}" class="btn btn-primary px-4 py-2">
    Lihat Daftar Beasiswa
  </a>

</div>
@endsection
