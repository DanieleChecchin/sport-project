@extends('layouts.app')

@section('content')
    <div class="container ">
        <div class="ciao d-flex justify-content-center align-items-center">

            @if (isset($player))
                <!-- Card Giocatore Orizzontale -->
                <div
                    class="card shadow-lg p-6 custom-card animate-slide-in d-flex flex-row align-items-center text-white overflow-hidden">
                    <!-- Immagine del giocatore -->
                    <div class="player-img-container me-4">
                        <img src="{{ $player->img }}" alt="{{ $player->first_name }}" class="player-image object-fit-cover">
                    </div>

                    <!-- Dettagli del giocatore -->
                    <div class="player-details">
                        <h2 class=" fw-bold">{{ $player->first_name }} {{ $player->last_name }}</h2>
                        <hr class="custom-hr w-50">
                        <p><strong>🏅 Ruolo:</strong> {{ $player->role }}</p>
                        <p><strong>🛡 Squadra:</strong> {{ $player->team->name }}</p>
                        {{-- <p class="fw-bold"> {{ $player->number }}</p> --}}
                        <p><strong>⚽ Piede preferito:</strong> {{ $player->fav_foot }}</p>
                        <p><strong>📏 Altezza:</strong> {{ $player->height }} cm</p>
                        <p><strong>💰 Valore di mercato:</strong>
                            €{{ number_format($player->market_value, 2, ',', '.') }} mln</p>

                        <!-- Pulsante di ritorno -->
                    </div>

                    <div class="retro position-relative d-flex justify-content-center align-items-center">
                        <img src="{{ asset('/storage/' . $player->shirt->img) }}" alt="retro"
                            class="img-fluid retro-shirt">
                        <p class="fw-bold num-retro position-absolute"> {{ $player->number }}</p>
                    </div>
                </div>
            @else
                <div class="alert alert-danger text-center animate-fade-in">⚠️ Dati non trovati.</div>
            @endif
        </div>
        <div class="mt-4 d-flex justify-content-center">
            <a href="{{ route('admin.players.index') }}" class="btn custom-btn text-white d-inline fw-bold">
                🔙 Torna ai giocatori
            </a>
        </div>
    </div>

    <!-- 🎨 Stili personalizzati -->
    <style>
        .retro-shirt {
            max-height: 280px;
        }

        .num-retro {
            font-size: 80px;
            transform: translate(-50%, -50%);
            top: 30%;
            left: 50%;
        }

        /* Sfondo con sfumature */
        body {
            background: url('https://wips.plug.it/cips/sport.virgilio.it/cms/2022/12/gettyimages-1446742528.jpg') no-repeat center center fixed;
            background-size: cover;
            position: relative;
        }

        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            z-index: -1;
        }

        .ciao {
            margin-top: 160px;
        }

        /* Layout orizzontale */

        .custom-card {
            border-radius: 15px;
            background: rgb(0 0 0 / 33%);
            backdrop-filter: blur(3px);
            transition: transform 0.3sease, box-shadow 0.3sease;
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.15);
            border: 1px solid rgba(255, 255, 255, 0.2);
            width: 70%;
            height: 500px;
            padding: 0 20px;
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
            border: 2px solid #28a745;
            opacity: 0.7;
        }

        /* Pulsante con effetto hover */
        .custom-btn {
            background: #28a745;
            padding: 10px 20px;
            border-radius: 30px;
            font-size: 16px;
            text-decoration: none;
            transition: all 0.3s ease;
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
        document.addEventListener("DOMContentLoaded", function() {
            const card = document.querySelector(".custom-card");
            if (card) {
                card.classList.add("animate-slide-in");
            }
        });
    </script>
@endsection
