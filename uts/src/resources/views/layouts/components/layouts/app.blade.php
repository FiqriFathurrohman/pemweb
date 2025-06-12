<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Beasiswa UEU</title>
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
</head>
<body>
    @include('frontend.layouts.navbar')

    <main>
        @yield('content')
    </main>

    @include('frontend.layouts.footer')
    <script src="{{ asset('front/js/script.js') }}"></script>
</body>
</html>
