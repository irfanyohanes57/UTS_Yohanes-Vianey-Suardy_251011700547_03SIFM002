<div class="col">
    <div class="card movie-card h-100 shadow-sm">
        <img src="{{ $movie->poster_url }}" class="card-img-top" alt="Poster {{ $movie->title }}">
        <div class="card-body d-flex flex-column">
            <span class="badge text-bg-danger align-self-start mb-2">{{ $movie->genre }}</span>
            <h6 class="card-title fw-bold mb-1">{{ $movie->title }}</h6>
            <p class="card-text small text-muted mb-3">
                {{ $movie->release_year }} &middot; {{ $movie->duration_text }}
            </p>
            <a href="{{ route('movies.show', $movie) }}" class="btn btn-primary btn-sm mt-auto">Lihat Detail</a>
        </div>
    </div>
</div>
