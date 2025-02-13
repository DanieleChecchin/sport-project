@extends('layouts.app')

@section('content')
<div class="container mt-5">   
    @elseif(isset($player))
        <!-- Dettagli Giocatore -->
        <div class="card shadow-lg p-4">
            <h2 class="text-success text-center">{{ $player->first_name }} {{ $player->last_name }}</h2>
            <p class="text-center"><strong>🏅 Ruolo:</strong> {{ $player->role }}</p>
            <p class="text-center"><strong>🛡 Squadra:</strong> {{ $player->team->name }}</p>
            <p class="text-center"><strong>⚽ Piede preferito:</strong> {{ $player->fav_foot }}</p>
            <p class="text-center"><strong>📏 Altezza:</strong> {{ $player->height }} cm</p>
            <p class="text-center"><strong>💰 Valore di mercato:</strong> €{{ number_format($player->market_value, 2, ',', '.') }}</p>
            <div class="text-center">
                <a href="{{ route('players.index') }}" class="btn btn-outline-success">🔙 Torna ai giocatori</a>
            </div>
        </div>    
        <div class="alert alert-danger">Dati non trovati.</div>
    @endif
</div>
@endsection
