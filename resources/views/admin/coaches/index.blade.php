@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-4 text-primary fw-bold">Serie A - Giocatori, Squadre e Allenatori</h1>
        <!-- Sezione Allenatori -->
        <section class="mb-5">
            <h2 class="text-warning">📋 Allenatori di Serie A</h2>
            <div class="row">
                @foreach ($coaches as $coach)
                    <div class="col-md-3">
                        <div class="card mb-3 shadow-lg border-warning">
                            <div class="card-body text-center">
                                <h5 class="card-title fw-bold">{{ $coach->first_name }} {{ $coach->last_name }}</h5>
                                <p class="card-text text-muted">🌍 Nazionalità: {{ $coach->nationality }}</p>
                                <p class="card-text">🏆 Trofei vinti: {{ $coach->trophies }}</p>
                                <a href="{{ route('admin.coaches.show', $coach->id) }}" class="btn btn-outline-warning">📖
                                    Scopri di più</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </div>
@endsection
