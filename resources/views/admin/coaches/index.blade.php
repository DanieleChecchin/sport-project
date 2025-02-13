@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="text-warning">📋 Allenatori di Serie A</h2>
        <div class="row">
            @foreach ($coaches as $coach)
                <div class="col-md-3">
                    <div class="card mb-3 shadow-lg border-warning">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">{{ $coach->name }} {{ $coach->surname }}</h5>
                            <p class="card-text text-muted">📌 Squadra: <strong>{{ $coach->team->name }}</strong></p>
                            <a href="{{ route('coaches.show', $coach->id) }}" class="btn btn-outline-warning">📖 Scopri di
                                più</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
