@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <!-- Dettagli Squadra -->
        <div class="card shadow-lg p-4 team-card">
            <div class="row align-items-center">
                <div class="col-md-4 text-center">
                    <div class="flip-box">
                        <div class="flip-box-inner">
                            <div class="flip-box-front">
                                <img src="{{ $team->team_logo }}" class="img-fluid team-logo" alt="{{ $team->name }}">
                            </div>
                            <div class="flip-box-back">
                                <h4 class="text-light">{{ $team->name }}</h4>
                                <p class="text-light">🏆 Palmares: {{ $team->palmares }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 fade-in">
                    <h2 class="text-primary">{{ $team->name }}</h2>
                    <p><strong>📍 Città:</strong> {{ $team->city }}</p>
                    <p><strong>🏟 Stadio:</strong> {{ $team->stadium }}</p>
                    <p><strong>💰 Valore Squadra:</strong> €{{ number_format($team->team_value, 2, ',', '.') }}</p>
                    <p><strong>🏆 Palmares:</strong> {{ $team->palmares }}</p>
                    <a href="{{ route('admin.teams.index') }}" class="btn btn-outline-primary btn-animated">🔙 Torna alle squadre</a>
                </div>
            </div>
        </div>
    </div>

    <style>
        
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }

        
        .team-card {
            opacity: 0;
            transform: scale(0.9);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }

        
        .flip-box {
            width: 150px;
            height: 150px;
            perspective: 1000px;
            margin: auto;
        }

        .flip-box-inner {
            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform 0.6s;
            transform-style: preserve-3d;
        }

        .flip-box:hover .flip-box-inner {
            transform: rotateY(180deg);
        }

        .flip-box-front, .flip-box-back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
        }

        .flip-box-front {
            background: #f8f9fa;
            border: 1px solid #ddd;
        }

        .flip-box-back {
            background: #007bff;
            transform: rotateY(180deg);
            color: white;
            padding: 10px;
        }

        
        .btn-animated {
            transition: all 0.3s ease-in-out;
        }

        .btn-animated:hover {
            transform: scale(1.1);
            box-shadow: 0 5px 15px rgba(0, 123, 255, 0.3);
        }
    </style>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            
            document.querySelector(".fade-in").style.opacity = 1;
            document.querySelector(".fade-in").style.transform = "translateY(0)";
            
            
            setTimeout(() => {
                document.querySelector(".team-card").style.opacity = 1;
                document.querySelector(".team-card").style.transform = "scale(1)";
            }, 200);
        });
    </script>
@endsection
