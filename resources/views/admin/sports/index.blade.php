@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4 text-primary fw-bold">Serie A - Giocatori, Squadre e Allenatori</h1>

    <!-- Sezione Squadre -->
    <section class="mb-5">
        <h2 class="text-danger">🏆 Squadre di Serie A</h2>
        <div class="row">
            @foreach($teams as $team)
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
    </section>

    <!-- Sezione Giocatori -->
    <section class="mb-5">
        <h2 class="text-success">⚽ Giocatori di Serie A</h2>
        <div class="row">
            @foreach($players as $player)
                <div class="col-md-3">
                    <div class="card mb-3 shadow-lg border-success">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">{{ $player->name }} {{ $player->surname }}</h5>
                            <p class="card-text text-muted">🏅 Ruolo: {{ $player->role }}</p>
                            <p class="card-text">🛡 Squadra: <strong>{{ $player->team->name }}</strong></p>
                            <a href="{{ route('players.show', $player->id) }}" class="btn btn-outline-success">👤 Profilo</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Sezione Allenatori -->
    <section class="mb-5">
        <h2 class="text-warning">📋 Allenatori di Serie A</h2>
        <div class="row">
            @foreach($coaches as $coach)
                <div class="col-md-3">
                    <div class="card mb-3 shadow-lg border-warning">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">{{ $coach->name }} {{ $coach->surname }}</h5>
                            <p class="card-text text-muted">📌 Squadra: <strong>{{ $coach->team->name }}</strong></p>
                            <a href="{{ route('coaches.show', $coach->id) }}" class="btn btn-outline-warning">📖 Scopri di più</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</div>
@endsection
