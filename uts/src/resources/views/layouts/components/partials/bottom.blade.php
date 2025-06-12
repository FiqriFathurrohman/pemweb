@php
    $footer = \App\Models\Footer::first();
@endphp

<footer class="bg-light border-top py-4 mt-auto">
    <div class="container text-center">
        <a href="{{ route('home') }}" class="text-decoration-none text-muted">
            {{ $footer->label ?? '© 2025 Website Beasiswa | Universitas Esa Unggul' }}
        </a>
    </div>
</footer>
