<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Beasiswa Mahasiswa</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
  <meta name="description" content="Website Data Beasiswa Mahasiswa">
  <link rel="icon" href="{{ asset('frontend/images/favicon.png') }}" type="image/x-icon">

  {{-- Google Fonts --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">

  {{-- CSS Plugins --}}
  <link rel="stylesheet" href="{{ asset('frontend/plugins/slick/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/plugins/font-awesome/fontawesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/plugins/font-awesome/brands.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/plugins/font-awesome/solid.css') }}">

  {{-- Main CSS --}}
 <link rel="stylesheet" href="{{ asset('front/assets/css/style.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<body>

  {{-- Navbar --}}
  @include('frontend.components.navbar')

  {{-- Main Content --}}
  @yield('content')

  {{-- Footer --}}
  @include('frontend.components.footer')

  {{-- JS --}}
  <script src="{{ asset('frontend/plugins/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('frontend/plugins/bootstrap/bootstrap.min.js') }}"></script>
  <script src="{{ asset('frontend/js/script.js') }}"></script>
</body>
</html>
