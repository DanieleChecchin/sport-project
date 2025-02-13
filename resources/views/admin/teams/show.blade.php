@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        @if (isset($team))
            <!-- Dettagli Squadra -->
            <div class="card shadow-lg p-4">
                <div class="row">
                    <div class="col-md-4 text-center">
                        <img src="{{ $team->logo }}" class="img-fluid" alt="{{ $team->name }}">
                    </div>
                    <div class="col-md-8">
                        <h2 class="text-primary">{{ $team->name }}</h2>
                        <p><strong>📍 Città:</strong> {{ $team->city }}</p>
                        <p><strong>🏟 Stadio:</strong> {{ $team->stadium }}</p>
                        <p><strong>💰 Valore Squadra:</strong> €{{ number_format($team->team_value, 2, ',', '.') }}</p>
                        <p><strong>🏆 Palmares:</strong> {{ $team->palmares }}</p>
                        <a href="{{ route('admin.teams.index') }}" class="btn btn-outline-primary">🔙 Torna alle squadre</a>
                    </div>
                </div>
            </div>
            <div class="alert alert-danger">Dati non trovati.</div>
        @endif
    </div>
@endsection
