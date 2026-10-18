@extends('layouts.app')

@section('title', 'Daftar Film')

@section('content')
<section class="page-header">
    <div class="container">
        <h1 class="fw-bold mb-1">Daftar Film</h1>
        <p class="text-muted mb-0">Temukan film favoritmu berdasarkan genre.</p>
    </div>
</section>

<section class="container py-4">
    <div class="d-flex flex-wrap gap-2 mb-4">
        <a href="{{ route('movies.index') }}"
           class="btn btn-sm {{ $genre ? 'btn-outline-primary' : 'btn-primary' }}">Semua</a>
        @foreach ($genres as $g)
            <a href="{{ route('movies.index', ['genre' => $g]) }}"
               class="btn btn-sm {{ $genre === $g ? 'btn-primary' : 'btn-outline-primary' }}">{{ $g }}</a>
        @endforeach
    </div>

    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 g-4">
        @forelse ($movies as $movie)
            @include('partials.movie-card', ['movie' => $movie])
        @empty
            <div class="col-12">
                <div class="alert alert-warning mb-0">Film tidak ditemukan.</div>
            </div>
        @endforelse
    </div>
</section>
@endsection
