@extends('layouts.app')

@section('content')
    <div class="container mt-5">

        <!-- Dettagli Allenatore -->
        <div class="card shadow-lg p-4">
            <h2 class="text-warning text-center">{{ $coach->first_name }} {{ $coach->last_name }}</h2>
            <p class="text-center"><strong>🌍 Nazionalità:</strong> {{ $coach->nationality }}</p>
            <p class="text-center"><strong>🏆 Trofei vinti:</strong> {{ $coach->trophies }}</p>
            <p class="text-center"><strong>📜 Descrizione:</strong> {{ $coach->description }}</p>
            <div class="text-center">
                <a href="{{ route('admin.coaches.index') }}" class="btn btn-outline-warning">🔙 Torna agli allenatori</a>
            </div>
        </div>
    </div>
@endsection
