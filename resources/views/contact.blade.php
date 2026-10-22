@extends('layouts.app')

@section('content')
<div class="text-center mb-5" data-aos="fade-down">
    <h2 class="fw-bold text-gold">Hubungi Kami</h2>
    <p class="text-sub">Punya pertanyaan atau ingin mendaftarkan UMKM kamu? Silakan hubungi kami melalui saluran di bawah ini.</p>
</div>

<div class="row g-4 justify-content-center">
    <!-- Email Us -->
    <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
        <div class="card card-anim h-100 text-center p-4 shadow">
            <div class="mb-3">
                <span class="fs-1 text-gold">&#9993;</span>
            </div>
            <h5 class="fw-bold text-gold">Email Us</h5>
            <p class="text-sub small mb-2">Kirim pertanyaan kamu via email:</p>
            <a href="mailto:support@direktoriumkm.id" class="text-gold fw-semibold text-decoration-none">support@direktoriumkm.id</a>
        </div>
    </div>

    <!-- Call Us -->
    <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
        <div class="card card-anim h-100 text-center p-4 shadow">
            <div class="mb-3">
                <span class="fs-1 text-gold">&#9742;</span>
            </div>
            <h5 class="fw-bold text-gold">Call Us</h5>
            <p class="text-sub small mb-2">WhatsApp (Akane Rin):</p>
            <a href="https://wa.me/6285178166436" target="_blank" class="text-gold fw-semibold text-decoration-none">+62 812-3456-7890</a>
        </div>
    </div>

    <!-- Visit Us -->
    <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
        <div class="card card-anim h-100 text-center p-4 shadow">
            <div class="mb-3">
                <span class="fs-1 text-gold">&#128205;</span>
            </div>
            <h5 class="fw-bold text-gold">Visit Us</h5>
            <p class="text-sub small mb-0">Jl. Raya Pamulang No. 27</p>
            <p class="text-sub small">Tangerang Selatan, Banten</p>
        </div>
    </div>

    <!-- Social Media -->
    <div class="col-md-3" data-aos="fade-up" data-aos-delay="400">
        <div class="card card-anim h-100 text-center p-4 shadow">
            <div class="mb-3">
                <span class="fs-1 text-gold">&#127760;</span>
            </div>
            <h5 class="fw-bold text-gold">Social Media</h5>
            <p class="text-sub small mb-2">Ikuti pembaruan terbaru:</p>
            <a href="#" class="text-gold fw-semibold text-decoration-none">@direktoriumkm</a>
        </div>
    </div>
</div>
@endsection