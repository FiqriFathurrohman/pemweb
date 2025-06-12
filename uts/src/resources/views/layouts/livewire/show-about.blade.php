@extends('layouts.components.layouts.app')

@section('content')
<main>
    <section class="py-5">
        <div class="container">
            <div class="section-title text-center mb-5">
                <h2 class="fw-bold text-primary">Daftar Mahasiswa Penerima Beasiswa</h2>
                <p class="text-muted">Berikut adalah daftar penerima beasiswa aktif di Universitas Esa Unggul.</p>
            </div>

            @if(count($penerimas))
            <div class="table-responsive">
                <table class="table table-bordered table-hover align-middle">
                    <thead class="table-primary text-center">
                        <tr>
                            <th>Nama</th>
                            <th>Asal Sekolah</th>
                            <th>Jurusan</th>
                            <th>Tingkat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($penerimas as $item)
                        <tr>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->asal_sekolah }}</td>
                            <td>{{ $item->jurusan }}</td>
                            <td>{{ $item->tingkat }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @else
                <p class="text-center text-muted">Belum ada data penerima beasiswa.</p>
            @endif
        </div>
    </section>
</main>
@endsection
