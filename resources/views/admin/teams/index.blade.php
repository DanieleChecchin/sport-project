@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="text-danger">🏆 Squadre di Serie A</h2>
        <div class="row">
            @foreach ($teams as $team)
                <div class="col-md-4">
                    <div class="card mb-3 shadow-lg">
                        <img src="{{ $team->logo }}" class="card-img-top" alt="{{ $team->name }}">
                        <div class="card-body text-center">
                            <h5 class="card-title text-uppercase fw-bold">{{ $team->name }}</h5>
                            <p class="card-text text-muted">📍 Città: {{ $team->city }}</p>
                            <a href="{{ route('teams.show', $team->id) }}" class="btn btn-outline-primary">🔍 Dettagli</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
