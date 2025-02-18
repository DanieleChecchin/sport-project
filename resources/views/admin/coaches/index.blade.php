@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-4 text-primary fw-bold">Serie A - Giocatori, Squadre e Allenatori</h1>
        <!-- SearchBar -->
        <div class="btn-toolbar justify-content-end" role="toolbar" aria-label="Toolbar with button groups">
            <div class="input-group">
                <form action="{{ route('admin.coaches.index') }}" method="GET">
                    <div class="d-flex">
                        <input type="text" name="search" class="form-control me-3" placeholder="Scrivi il cognome del coach" aria-label="Input group example" aria-describedby="btnGroupAddon2">
                        <button type="submit" class="btn btn-primary">Cerca</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- Sezione Allenatori -->
        <section class="mb-5">
            <h2 class="text-warning">📋 Allenatori di Serie A</h2>

            <div class="row">
                @foreach ($coaches as $coach)
                    <div class="col-md-3">
                        <div class="card mb-3 shadow-lg border-warning">
                            <img src="{{ $coach->img }}" class="card-img-top img-fluid coach-logo"
                                alt="{{ $coach->first_name }}">
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
