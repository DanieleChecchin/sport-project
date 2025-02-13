@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-4 text-primary fw-bold">Serie A - Giocatori, Squadre e Allenatori</h1>
        <!-- Sezione Squadre -->
        <section class="mb-5">
            <h2 class="text-danger">🏆 Squadre di Serie A</h2>
            <div class="row">
                @foreach ($teams as $team)
                    <div class="col-md-4">
                        <div class="card mb-3 shadow-lg">
                            <img src="{{ $team->team_logo }}" class="card-img-top" alt="{{ $team->name }}">
                            <div class="card-body text-center">
                                <h5 class="card-title text-uppercase fw-bold">{{ $team->name }}</h5>
                                <p class="card-text text-muted">📍 Città: {{ $team->city }}</p>
                                <p class="card-text">🏟 Stadio: {{ $team->stadium }}</p>
                                <p class="card-text">💰 Valore Squadra: €{{ number_format($team->team_value, 2, ',', '.') }}
                                </p>
                                <a href="{{ route('admin.teams.show', $team->id) }}" class="btn btn-outline-primary">🔍
                                    Dettagli</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

    </div>
@endsection
