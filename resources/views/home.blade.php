@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')

    <h1>Film</h1>

    <div class="row g-3">
        @forelse ($movies as $movie)
            <div class="col-3">@include('partials._card')</div>
        @empty
        @endforelse
    </div>

@endsection
