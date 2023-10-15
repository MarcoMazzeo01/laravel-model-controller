<div class="card h-100" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">{{ $movie->title }}</h5>
        <h6 class="card-subtitle mb-2 text-muted">{{ $movie->original_title }} - ({{ $movie->vote }})</h6>
        <p class="card-text">
            <b>Release:</b> {{ $movie->date }} <br>
            <b>Nationality:</b> {{ $movie->nationality }}
        </p>

    </div>
</div>
