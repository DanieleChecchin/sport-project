@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-4 text-primary fw-bold">Serie A - Giocatori, Squadre e Allenatori</h1>

        <!-- Sezione Giocatori -->
        <section class="mb-5">
            <h2 class="text-success">⚽ Giocatori di Serie A</h2>
            <div class="row">
                @foreach ($players as $player)
                    <div class="col-md-3">
                        <div class="card mb-3 shadow-lg border-success">
                            <div class="card-body text-center">
                                <h5 class="card-title fw-bold">{{ $player->first_name }} {{ $player->last_name }}</h5>
                                <p class="card-text text-muted">🏅 Ruolo: {{ $player->role }}</p>
                                <p class="card-text">🛡 Squadra: <strong>{{ $player->team->name }}</strong></p>
                                <p class="card-text">⚽ Piede preferito: {{ $player->fav_foot }}</p>
                                <p class="card-text">📏 Altezza: {{ $player->height }} cm</p>
                                <p class="card-text">💰 Valore di mercato:
                                    €{{ number_format($player->market_value, 2, ',', '.') }}</p>
                                <a href="{{ route('admin.players.show', $player->id) }}" class="btn btn-outline-success">👤
                                    Profilo</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </div>
@endsection
