@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-4 text-primary fw-bold">⚽ Serie A - Giocatori, Squadre e Allenatori</h1>

        <!-- 🔍 SearchBar -->
        <div class="d-flex justify-content-center mb-4">
            <form action="{{ route('admin.players.index') }}" method="GET" class="d-flex search-bar">
                <input type="text" name="search" class="form-control me-2 rounded-pill shadow-sm"
                    placeholder="Cerca squadra o giocatore..." aria-label="Search">
                <button type="submit" class="btn btn-primary rounded-pill px-4">🔍 Cerca</button>
            </form>
        </div>

        <!-- 🏆 Sezione Giocatori -->
        <section class="mb-5">
            <h2 class="text-success mb-4 text-center">👕 Giocatori di Serie A</h2>
            <div class="row">
                @foreach ($players as $player)
                    <div class="col-md-4 col-lg-3">
                        <div class="card mb-4 player-card shadow-sm">
                            <div class="card-body text-center">
                                <div class="player-image-container">
                                    <img class="img-fluid player-img" src="{{ $player->img }}"
                                        alt="{{ $player->first_name }}">
                                </div>
                                <h5 class="card-title mt-3 fw-bold">{{ $player->first_name }} {{ $player->last_name }}</h5>
                                <p class="card-text text-muted">🏅 Ruolo: <strong>{{ $player->role }}</strong></p>
                                <p class="card-text">🛡 Squadra: <strong>{{ $player->team->name }}</strong></p>
                                <p class="card-text">⚽ Piede preferito: {{ $player->fav_foot }}</p>
                                <p class="card-text">📏 Altezza: {{ $player->height }} m</p>
                                <p class="card-text">💰 Valore di mercato: <strong>€{{ number_format($player->market_value, 2, ',', '.') }} mln</strong></p>
                                <a href="{{ route('admin.players.show', $player->id) }}" class="btn btn-outline-success rounded-pill px-4 mt-2">👤 Profilo</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </div>

    <style>
        /* 🏅 Stile Generale */
        body {
            background-color: #f8f9fa;
        }

        /* 🔍 Search Bar */
        .search-bar {
            max-width: 600px;
            width: 100%;
        }

        .search-bar input {
            transition: all 0.3s ease-in-out;
        }

        .search-bar input:focus {
            box-shadow: 0px 0px 10px rgba(0, 123, 255, 0.5);
        }

        /* 👕 Card Giocatori */
        .player-card {
            border: none;
            border-radius: 15px;
            background: white;
            transition: all 0.3s ease-in-out;
            position: relative;
            overflow: hidden;
        }

        .player-card:hover {
            transform: translateY(-5px);
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
        }

        /* 📸 Immagine giocatore */
        .player-image-container {
            width: 150px;
            height: 150px;
            margin: auto;
            overflow: hidden;
            border-radius: 50%;
            border: 3px solid #28a745;
        }

        .player-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* 👤 Profilo Bottone */
        .btn-outline-success {
            transition: all 0.3s ease-in-out;
        }

        .btn-outline-success:hover {
            background-color: #28a745;
            color: white;
        }

    </style>
@endsection
