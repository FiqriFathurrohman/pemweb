@extends('frontend.layouts.app')

@section('content')
<div class="container mt-4">
  <h2 class="text-center mb-4">Daftar Penerima Beasiswa</h2>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Nama</th>
        <th>Asal Sekolah</th>
        <th>Jurusan</th>
        <th>Jenjang</th>
        <th>Jenis Beasiswa</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($data as $item)
        <tr>
          <td>{{ $item->nama }}</td>
          <td>{{ $item->asal_sekolah }}</td>
          <td>{{ $item->jurusan }}</td>
          <td>{{ $item->jenjang }}</td>
          <td>{{ $item->jenis_beasiswa }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
