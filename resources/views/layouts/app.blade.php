<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Beranda') | Daftar Film</title>

    <link href="{{ asset('Bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100">

@php
    $navGenres = \App\Models\Movie::select('genre')->distinct()->orderBy('genre')->pluck('genre');
@endphp

<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('home') }}">🎬 Daftar Film</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu"
                aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active fw-semibold' : '' }}"
                       href="{{ route('home') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('movies.*') ? 'active fw-semibold' : '' }}"
                       href="{{ route('movies.index') }}">Daftar Film</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Genre</a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        @foreach ($navGenres as $g)
                            <li><a class="dropdown-item" href="{{ route('movies.index', ['genre' => $g]) }}">{{ $g }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('about') ? 'active fw-semibold' : '' }}"
                       href="{{ route('about') }}">Tentang</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main class="flex-grow-1">
    @yield('content')
</main>

<footer class="footer py-4 mt-5">
    <div class="container text-center">
        <a href="{{ route('home') }}">Beranda</a> &middot;
        <a href="{{ route('movies.index') }}">Daftar Film</a> &middot;
        <a href="{{ route('about') }}">Tentang</a>
    </div>
</footer>

<script src="{{ asset('Bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>