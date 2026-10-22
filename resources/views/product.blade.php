@extends('layouts.app')

@section('content')
<div class="text-center mb-4" data-aos="fade-down">
    <h2 class="fw-bold text-gold">Semua Produk UMKM</h2>
    <p class="text-sub">Temukan berbagai produk unggulan dari pelaku usaha lokal</p>
</div>

<div class="row">
    @foreach($umkms as $index => $item)
    <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
        <div class="card card-anim h-100 shadow overflow-hidden">
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
@endsection