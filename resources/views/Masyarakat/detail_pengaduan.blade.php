@extends('Templates.index')
@section('content')
<div class="page-wrapper">
    <div class="page-content">
<div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 row-cols-xl-2">
    <div class="col">
        <div class="card border-primary border-bottom border-3 border-0">
            @empty($historiPengaduan->foto_pengaduan)
            <img src="{{ asset('assets/images/gallery/01.png')}}" class="card-img-top" alt="...">     
            @else
            <img src="{{ asset('assets/img') }}/{{ $historiPengaduan->foto_pengaduan }}" alt="{{ $historiPengaduan->nama }}"class="img-fluid rounded-start" />
            @endempty 
            <div class="card-body">
                <h5 class="card-title text-primary">Detail Pengaduan</h5>
                <p class="card-text">Pengaduan : {{ $historiPengaduan->nama_pengaduan }}</p>
                <p class="card-text">Tgl Pengaduan: {{ $historiPengaduan->tgl_pengaduan }}</p>
                <p class="card-text">Deskripsi : {{ $historiPengaduan->deskripsi }}</p>
                <p class="card-text">Lokasi Pengaduan: {{ $historiPengaduan->lokasi_pengaduan }}</p>
                <hr>
                <div class="d-flex align-items-center gap-2">
                    <a href="{{ url('/histori_pengaduan') }}" class="btn btn-primary"><i class="bi bi-backspace-fill"></i>Button</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection