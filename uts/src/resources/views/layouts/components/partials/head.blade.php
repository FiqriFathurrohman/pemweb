<!-- SEO Metadata -->
@php
    $seo = \App\Models\Seo::first();
@endphp

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">

    <title>{{ $seo->title ?? 'Data Beasiswa' }}</title>
    <meta name="description" content="{{ $seo->description ?? 'Website data beasiswa mahasiswa terbaik di Indonesia.' }}">
    <meta name="keywords" content="{{ $seo->keywords ?? 'beasiswa, mahasiswa, pendidikan, kampus' }}">
    <meta name="author" content="{{ $seo->author ?? 'FIQRI' }}">
    <meta name="robots" content="{{ $seo->robots ?? 'index, follow' }}">

    @if(!empty($seo->canonical_url))
        <link rel="canonical" href="{{ $seo->canonical_url }}">
    @endif

    @if(!empty($seo->og_image))
        <meta property="og:image" content="{{ asset('storage/' . $seo->og_image) }}">
    @endif

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- CSS Plugins -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/brands.css') }}">
    <link rel="stylesheet" href="{{ asset('css/solid.css') }}">

    <!-- Main CSS -->
   <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
