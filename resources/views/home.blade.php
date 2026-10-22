@extends('layouts.app')

@section('content')
<div class="text-center py-5 my-3 bg-dark rounded border border-secondary" data-aos="zoom-in">
    <h1 class="fw-bold display-4">Selamat Datang di Direktori UMKM</h1>
    <p class="text-sub fs-5 mt-3 mb-4">Platform resmi promosi Usaha Mikro, Kecil, dan Menengah Nusantara</p>
    <a href="{{ route('product') }}" class="btn btn-gold btn-lg">Jelajahi Semua Produk &rarr;</a>
</div>

<div class="mt-5">
    <h3 class="fw-bold text-center text-gold mb-4" data-aos="fade-down">Produk Unggulan</h3>
    <div class="row justify-content-center">
        @foreach($featured as $index =>$item)
        <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="{{ $index * 150 }}">
            <div class="card card-anim h-100 shadow overflow-hidden">
                <img src="{{ asset('assets/images/' . $item->logo) }}" class="card-img-top" alt="{{ $item->name }}" style="height: 180px; object-fit: cover;">
                <div class="card-body">
                    <span class="badge badge-gold mb-2">{{ $item->industry }}</span>
                    <h5 class="card-title fw-bold fs-5">{{ $item->name }}</h5>
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