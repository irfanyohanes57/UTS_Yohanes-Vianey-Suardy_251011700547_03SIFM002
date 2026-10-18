@extends('layouts.app')

@section('title', $movie->title)

@section('content')
<section class="container py-5">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
            <li class="breadcrumb-item"><a href="{{ route('movies.index') }}">Daftar Film</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $movie->title }}</li>
        </ol>
    </nav>

    <div class="card shadow-sm border-0">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ $movie->poster_url }}" class="img-fluid rounded-start w-100" alt="Poster {{ $movie->title }}">
            </div>
            <div class="col-md-8">
                <div class="card-body p-4 p-lg-5">
                    <span class="badge text-bg-danger mb-2">{{ $movie->genre }}</span>
                    <h1 class="fw-bold mb-3">{{ $movie->title }}</h1>

                    <table class="table table-borderless w-auto mb-3">
                        <tr><th class="pe-4">Genre</th><td>{{ $movie->genre }}</td></tr>
                        <tr><th class="pe-4">Durasi</th><td>{{ $movie->duration }} menit ({{ $movie->duration_text }})</td></tr>
                        <tr><th class="pe-4">Tahun Rilis</th><td>{{ $movie->release_year }}</td></tr>
                    </table>

                    <h5 class="fw-bold">Sinopsis</h5>
                    <p class="text-secondary">{{ $movie->description }}</p>

                    <a href="{{ route('movies.index') }}" class="btn btn-secondary">&laquo; Kembali ke Daftar</a>
                </div>
            </div>
        </div>
    </div>

    @if ($others->isNotEmpty())
        <h3 class="section-title mt-5 mb-4">Film Lainnya</h3>
        <div class="row row-cols-2 row-cols-md-4 g-4">
            @foreach ($others as $other)
                @include('partials.movie-card', ['movie' => $other])
            @endforeach
        </div>
    @endif
</section>
@endsection
