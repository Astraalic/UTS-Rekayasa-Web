@extends('layouts.app')

@section('content')
<div data-aos="fade-right">
    <a href="{{ route('product') }}" class="btn btn-gold mb-4">&larr; Kembali</a>
</div>

<div class="card bg-dark text-white border-secondary shadow p-4" data-aos="zoom-in">
    <div class="row align-items-center">
        <div class="col-md-5 text-center mb-3 mb-md-0" data-aos="fade-right" data-aos-delay="200">
            <img src="{{ asset('assets/images/' . $umkm->logo) }}" class="img-fluid rounded border border-warning" alt="{{ $umkm->name }}" style="max-height: 300px; object-fit: cover;">
        </div>
        <div class="col-md-7" data-aos="fade-left" data-aos-delay="300">
            <span class="badge badge-gold mb-2">{{ $umkm->industry }}</span>
            <h2 class="fw-bold text-gold mb-2">{{ $umkm->name }}</h2>
            <p class="text-sub mb-1"><strong>Pemilik:</strong> {{ $umkm->owner }}</p>
            <p class="text-sub mb-1"><strong>Lokasi:</strong> {{ $umkm->location }}</p>
            <p class="text-sub mb-3"><strong>Produk:</strong> {{ $umkm->product }}</p>
            <p class="text-sub fs-6 mb-4">{{ $umkm->description }}</p>
            @if($umkm->website)
                <a href="{{ $umkm->website }}" target="_blank" class="btn btn-gold">Kunjungi Website</a>
            @endif
        </div>
    </div>
</div>
@endsection