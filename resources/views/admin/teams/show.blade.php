@extends('layouts.app')

@section('content')
    <div style="background-image: url('{{ $team->stadium_url }}'); background-repeat: no-repeat; background-size: cover;">
        <div class="container height-vh">
            <!-- Dettagli Squadra -->
            <div class="card shadow-lg p-4 team-card bg-transparent">
                <div class="row align-items-center">
                    <div class="col-md-4 text-center">
                        <div class="flip-box">
                            <div class="flip-box-inner">
                                <div class="flip-box-front">
                                    <img src="{{ asset('/storage/' . $team->team_logo) }}" class="img-fluid team-logo"
                                        alt="{{ $team->name }}">
                                </div>
                                <div class="flip-box-back">
                                    <h4 class="text-light">{{ $team->name }}</h4>
                                    <p class="text-light">🏆 Palmares: {{ $team->palmares }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 team-info">
                        <h2 class="text-primary">{{ $team->name }}</h2>
                        <p><strong>📍 Città:</strong> {{ $team->city }}</p>
                        <p><strong>🏟 Stadio:</strong> {{ $team->stadium }}</p>
                        <p><strong>💰 Valore Squadra:</strong> €{{ number_format($team->team_value, 2, ',', '.') }} mln</p>
                        <p><strong>🏆 Palmares:</strong> {{ $team->palmares }}</p>
                        <a href="{{ route('admin.teams.index') }}" class="btn btn-outline-primary btn-animated">🔙 Torna
                            alle
                            squadre</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .height-vh {
            height: 100vh;
            padding-top: 250px;

        }

        /*
                        .back {
                            background-image: url('https://media.gettyimages.com/id/2129996675/it/foto/reggio-nellemilia-italy-keep-racism-out-logo-is-seen-prior-to-the-serie-a-tim-match-between-us.jpg?s=2048x2048&w=gi&k=20&c=7nFZT7hR92_U3JPiBzMm3gxoMG0YpAL7GavNlKOUgvw=');
                            /* background-repeat: no-repeat; */
        /* background-size: cover;

                    } */

        */

        /* Animazione Fade-In */
        .team-info,
        .team-card {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;

        }

        /* Flip Box */
        .flip-box {
            width: 150px;
            height: 150px;
            perspective: 1000px;
            margin: auto;
        }

        .flip-box-inner {
            width: 100%;
            height: 100%;
            position: relative;
            text-align: center;
            transition: transform 0.6s;
            transform-style: preserve-3d;
        }

        .flip-box:hover .flip-box-inner {
            transform: rotateY(180deg);
        }

        .flip-box-front,
        .flip-box-back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
            padding: 10px;
        }

        .flip-box-front {
            background: #f8f9fa;
            border: 1px solid #ddd;
        }

        .flip-box-back {
            background: #007bff;
            transform: rotateY(180deg);
            color: white;
        }

        /* Bottone animato */
        .btn-animated {
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        .btn-animated:hover {
            transform: scale(1.1);
            box-shadow: 0 5px 15px rgba(0, 123, 255, 0.3);
        }

        body {
            background-image: url('{{ $team->stadium_url }}');
        }
    </style>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const teamInfo = document.querySelector(".team-info");
            const teamCard = document.querySelector(".team-card");

            if (teamInfo) {
                setTimeout(() => {
                    teamInfo.style.opacity = 1;
                    teamInfo.style.transform = "translateY(0)";
                }, 200);
            }

            if (teamCard) {
                setTimeout(() => {
                    teamCard.style.opacity = 1;
                    teamCard.style.transform = "translateY(0)";
                }, 300);
            }
        });
    </script>
@endsection
