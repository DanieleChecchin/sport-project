@extends('layouts.app')

@section('content')
    <div class="container mt-5 d-flex justify-content-center align-items-center">
        @if(isset($player))
            <!-- Card Giocatore Orizzontale -->
            <div class="card shadow-lg p-6 custom-card animate-slide-in d-flex flex-row align-items-center">
                <!-- Immagine del giocatore -->
                <div class="player-img-container me-4">
                    <img src="{{ $player->img }}" alt="{{ $player->first_name }}" class="player-image">
                </div>
                
                <!-- Dettagli del giocatore -->
                <div class="player-details">
                    <h2 class="text-success fw-bold">{{ $player->first_name }} {{ $player->last_name }}</h2>
                    <hr class="custom-hr">
                    <p><strong>🏅 Ruolo:</strong> {{ $player->role }}</p>
                    <p><strong>🛡 Squadra:</strong> {{ $player->team->name }}</p>
                    <p><strong>⚽ Piede preferito:</strong> {{ $player->fav_foot }}</p>
                    <p><strong>📏 Altezza:</strong> {{ $player->height }} cm</p>
                    <p><strong>💰 Valore di mercato:</strong>
                        €{{ number_format($player->market_value, 2, ',', '.') }} mln</p>
                    
                    <!-- Pulsante di ritorno -->
                    <div class="mt-3">
                        <a href="{{ route('admin.players.index') }}" class="btn custom-btn">
                            🔙 Torna ai giocatori
                        </a>
                    </div>
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

        /* Layout orizzontale */
        .custom-card {
            border-radius: 15px;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            display: flex;
            align-items: center;
            padding: 20px;
            max-width: 700px;
        }

        .custom-card:hover {
            transform: scale(1.03);
            box-shadow: 0px 10px 25px rgba(0, 0, 0, 0.2);
        }

        /* Contenitore immagine */
        .player-img-container {
            flex-shrink: 0;
        }

        /* Immagine giocatore con effetto neon */
        .player-image {
            width: 300px;
            height: 300px;
            object-fit: cover;
            border-radius: 50%;
            border: 4px solid #28a745;
            box-shadow: 0px 0px 15px rgba(40, 167, 69, 0.7);
            transition: box-shadow 0.3s ease;
        }

        .player-image:hover {
            box-shadow: 0px 0px 25px rgba(40, 167, 69, 1);
        }

        /* Dettagli giocatore */
        .player-details {
            flex-grow: 1;
        }

        /* Separatore personalizzato */
        .custom-hr {
            width: 50%;
            border: 2px solid #28a745;
            opacity: 0.7;
        }

        /* Pulsante con effetto hover */
        .custom-btn {
            background: #28a745;
            color: white;
            padding: 10px 20px;
            border-radius: 30px;
            font-size: 16px;
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

        /* Responsività */
        @media (max-width: 768px) {
            .custom-card {
                flex-direction: column;
                text-align: center;
            }
            
            .player-img-container {
                margin-bottom: 15px;
            }

            .player-image {
                width: 120px;
                height: 120px;
            }
        }

        /* Animazione ingresso slide-in */
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
