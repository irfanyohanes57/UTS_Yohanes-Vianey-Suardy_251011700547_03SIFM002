@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<section class="hero text-center">
    <div class="container">
        <p class="hero-welcome mb-1">Welcome To</p>
        <h1 class="display-5 fw-bold mb-3">Sistem <span class="accent">Daftar Film</span></h1>
        <p class="lead mb-4">Koleksi film pilihan lengkap dengan genre, durasi, tahun rilis, dan sinopsis.</p>
        <div class="hero-identity d-inline-block text-start">
            <img src="{{ asset('assets/images/foto-profil.jpeg') }}" alt="Foto profil" class="hero-photo">
            <div><strong>Nama</strong> : Yohanes Vianey suardy</div>
            <div><strong>NIM</strong> : 251011700547</div>
            <div><strong>Prodi</strong> : Sistem Informasi</div>
        </div>
        <div class="mt-4">
            <a href="{{ route('movies.index') }}" class="btn btn-warning btn-lg fw-semibold">Jelajahi Film</a>
        </div>
    </div>
</section>

<section class="film-section py-5"
         style="background: linear-gradient(rgba(255,255,255,.2), rgba(255,255,255,.2)), url('{{ asset('assets/images/kampus.jpg') }}') center / cover no-repeat;">
    <div class="container">
        <h2 class="section-title mb-4">Film Terbaru &amp; Terpopuler</h2>

        @if ($movies->isEmpty())
            <div class="alert alert-warning mb-0">
                Belum ada data film. Jalankan <code>php artisan migrate --seed</code>.
            </div>
        @else
            @php $slides = $movies->chunk(4); @endphp

            <div id="filmCarousel" class="carousel slide" data-bs-ride="false" data-bs-interval="false">
                <div class="carousel-inner">
                    @foreach ($slides as $chunk)
                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                            <div class="row row-cols-2 row-cols-md-4 g-4 px-2 py-3">
                                @foreach ($chunk as $movie)
                                    @include('partials.movie-card', ['movie' => $movie])
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>

                @if ($slides->count() > 1)
                    <div class="d-flex justify-content-center align-items-center gap-3 mt-3">
                        <button class="btn btn-outline-primary" type="button"
                                data-bs-target="#filmCarousel" data-bs-slide="prev">&laquo; Sebelumnya</button>
                        <button class="btn btn-primary" type="button"
                                data-bs-target="#filmCarousel" data-bs-slide="next">Berikutnya &raquo;</button>
                    </div>
                @endif
            </div>
        @endif
    </div>
</section>
@endsection