@extends('layouts.app')

@section('content')
    <div class="container mt-5 d-flex justify-content-center align-items-center">
        @if(isset($player))
            <!-- Card Giocatore -->
            <div class="card shadow-lg p-4 custom-card animate-slide-in">
                <div class="text-center">
                    <!-- Immagine ridotta con bordo neon -->
                    <img src="{{ asset('images/players/' . $player->image) }}" alt="{{ $player->first_name }}"
                         class="player-image mb-3">
                </div>
                <h2 class="text-success text-center fw-bold">{{ $player->first_name }} {{ $player->last_name }}</h2>
                <hr class="custom-hr">
                <p class="text-center"><strong>🏅 Ruolo:</strong> {{ $player->role }}</p>
                <p class="text-center"><strong>🛡 Squadra:</strong> {{ $player->team->name }}</p>
                <p class="text-center"><strong>⚽ Piede preferito:</strong> {{ $player->fav_foot }}</p>
                <p class="text-center"><strong>📏 Altezza:</strong> {{ $player->height }} cm</p>
                <p class="text-center"><strong>💰 Valore di mercato:</strong>
                    €{{ number_format($player->market_value, 2, ',', '.') }}</p>
                
                <!-- Pulsante di ritorno -->
                <div class="text-center mt-3">
                    <a href="{{ route('admin.players.index') }}" class="btn custom-btn">
                        🔙 Torna ai giocatori
                    </a>
                </div>
            </div>
        @else
            <div class="alert alert-danger text-center animate-fade-in">⚠️ Dati non trovati.</div>
        @endif
    </div>

    <!-- 🎨 Stili personalizzati -->
    <style>
        /* Sfondo con sfumature */
        body {
            background: linear-gradient(135deg, #e3ffe7 0%, #d9e7ff 100%);
        }

        /* Card con effetto vetro e ombra */
        .custom-card {
            border-radius: 15px;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .custom-card:hover {
            transform: scale(1.03);
            box-shadow: 0px 10px 25px rgba(0, 0, 0, 0.2);
        }

        /* Immagine del giocatore con effetto neon */
        .player-image {
            width: 180px;
            height: 180px;
            object-fit: cover;
            border-radius: 50%;
            border: 4px solid #28a745;
            box-shadow: 0px 0px 15px rgba(40, 167, 69, 0.7);
            transition: box-shadow 0.3s ease;
        }

        .player-image:hover {
            box-shadow: 0px 0px 25px rgba(40, 167, 69, 1);
        }

        /* Separatore personalizzato */
        .custom-hr {
            width: 50%;
            margin: auto;
            border: 2px solid #28a745;
            opacity: 0.7;
        }

        /* Pulsante con effetto hover */
        .custom-btn {
            background: #28a745;
            color: white;
            padding: 12px 25px;
            border-radius: 30px;
            font-size: 18px;
            font-weight: bold;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-block;
        }

        .custom-btn:hover {
            background: #218838;
            transform: scale(1.05);
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.15);
        }

        /* Animazione ingresso slide-up */
        .animate-slide-in {
            opacity: 0;
            transform: translateY(40px);
            animation: slideIn 0.6s ease-out forwards;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(40px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Animazione fade-in per messaggi di errore */
        .animate-fade-in {
            opacity: 0;
            animation: fadeIn 0.6s ease-out forwards;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
    </style>

    <!-- JS per animazione dinamica -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const card = document.querySelector(".custom-card");
            if (card) {
                card.classList.add("animate-slide-in");
            }
        });
    </script>
@endsection
