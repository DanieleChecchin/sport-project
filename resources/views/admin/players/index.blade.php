@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-4 text-primary fw-bold">Serie A - Giocatori, Squadre e Allenatori</h1>

        <!-- SearchBar -->

        <div class="btn-toolbar justify-content-end" role="toolbar" aria-label="Toolbar with button groups">
            <div class="input-group">
                <form action="{{ route('admin.players.index') }}" method="GET">
                    <div class="d-flex">
                        <input type="text" name="team" class="form-control me-3" placeholder="Scrivi la squadra"
                            aria-label="Input group example" aria-describedby="btnGroupAddon2">
                        <button type="submit" class="btn btn-primary">Cerca</button>
                    </div>

                </form>
            </div>
        </div>

        <!-- Sezione Giocatori -->
        <section class="mb-5">
            <h2 class="text-success">⚽ Giocatori di Serie A</h2>
            <div class="row">
                @foreach ($players as $player)
                    <div class="col-md-3">
                        <div class="card mb-3 shadow-lg border-success">
                            <div class="card-body text-center">
                                <img class="img-fluid" src="{{ $player->img }}" alt="{{ $player->first_name }}">
                                <h5 class="card-title mb-2 fw-bold">{{ $player->first_name }} {{ $player->last_name }}</h5>
                                <p class="card-text text-muted">🏅 Ruolo: {{ $player->role }}</p>
                                <p class="card-text">🛡 Squadra: <strong>{{ $player->team->name }}</strong></p>
                                <p class="card-text">⚽ Piede preferito: {{ $player->fav_foot }}</p>
                                <p class="card-text">📏 Altezza: {{ $player->height }} m</p>
                                <p class="card-text">💰 Valore di mercato:
                                    € {{ number_format($player->market_value, 2, ',', '.') }} mln </p>
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
