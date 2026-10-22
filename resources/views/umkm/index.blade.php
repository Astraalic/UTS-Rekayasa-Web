@extends('layouts.app')

@section('content')
<!-- Section Home & About -->
<div id="home" class="text-center mb-5 pt-3">
    <h1 class="fw-bold display-5">Selamat Datang di Direktori UMKM</h1>
    <p class="text-sub fs-5">Mendukung Perkembangan Usaha Mikro, Kecil, dan Menengah</p>
</div>

<div id="about" class="row justify-content-center mb-5">
    <div class="col-md-10 text-center bg-dark p-4 rounded border border-secondary">
        <h3 class="fw-bold text-gold mb-3">Tentang Kami</h3>
        <p class="text-sub mb-0">
            Direktori UMKM adalah platform digital yang didedikasikan untuk mempromosikan dan memperluas jangkauan pasar produk lokal Nusantara. Kami menghubungkan pelaku usaha kreatif dengan pelanggan melalui tampilan produk yang modern, estetis, dan mudah diakses.
        </p>
    </div>
</div>

<!-- Section Product (Daftar Card UMKM) -->
<div id="products" class="pt-3">
    <h3 class="fw-bold text-center text-gold mb-4">Daftar Produk UMKM</h3>
    <div class="row">
        @foreach($umkms as $item)
        <div class="col-md-3 mb-4">
            <div class="card h-100 shadow">
                <img src="{{ asset('assets/images/' . $item->logo) }}" class="card-img-top" alt="{{ $item->name }}" style="height: 180px; object-fit: cover;">
                <div class="card-body">
                    <span class="badge badge-gold mb-2">{{ $item->industry }}</span>
                    <h5 class="card-title fw-bold fs-5">{{ $item->name }}</h5>
                    <p class="text-sub small mb-2">Pemilik: {{ $item->owner }}</p>
                    <p class="card-text text-sub small">{{ Str::limit($item->description, 70) }}</p>
                </div>
                <div class="card-footer bg-transparent border-top-0 pb-3">
                    <a href="{{ route('umkm.show', $item->id) }}" class="btn btn-gold w-100 btn-sm">Lihat Detail</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection