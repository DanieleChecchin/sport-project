@extends('layouts.app')

@section('content')
    <div class="team-background" style="background-image: url('{{ $team->stadium_url }}');">
        <div class="container height-vh d-flex align-items-center justify-content-center">
            <div class="card shadow-lg p-4 team-card">
                <div class="row align-items-center">
                    <div class="col-md-4 text-center">
                        <div class="flip-box">
                            <div class="flip-box-inner">
                                <div class="flip-box-front">
                                    <img src="{{ asset('/storage/' . $team->team_logo) }}" class="img-fluid team-logo" alt="{{ $team->name }}">
                                </div>
                                <div class="flip-box-back">
                                    <h4 class="text-light">{{ $team->name }}</h4>
                                    <p class="text-light">🏆 Palmares: {{ $team->palmares }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 team-info text-white text-md-start">
                        <h2 class="text-primary">{{ $team->name }}</h2>
                        <ul class="list-unstyled">
                            <li><strong>📍 Città:</strong> {{ $team->city }}</li>
                            <li><strong>🏟 Stadio:</strong> {{ $team->stadium }}</li>
                            <li><strong>💰 Valore Squadra:</strong> €{{ number_format($team->team_value, 2, ',', '.') }} mln</li>
                            <li><strong>🏆 Palmares:</strong> {{ $team->palmares }}</li>
                            <li><strong>📅 Fondazione:</strong> {{ \Carbon\Carbon::parse($team->foundation_year)->format('d/m/Y') }}</li>
                            <li><strong>👔 Presidente:</strong> {{ $team->president }}</li>
                            <li><strong>🤝 Sponsor:</strong> {{ $team->main_sponsor }}</li>
                        </ul>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col text-center">
                        <h3 class="text-white">Magliette Ufficiali 24/25</h3>
                    </div>
                </div>
                
               <div class="d-flex justify-content-center align-items-center gap-4 flex-wrap">
                    <!-- Home Kit -->
                    <div class="text-center">
                        <img src="{{ $team->home_kit }}" class="img-fluid kit-img" alt="Home Kit">
                        <p class="text-white">🏠 Casa Kit</p>
                    </div>
                    <!-- Away Kit -->
                    <div class="text-center">
                        <img src="{{ $team->away_kit }}" class="img-fluid kit-img" alt="Away Kit">
                        <p class="text-white">🚗 Fuori Casa Kit</p>
                    </div>
                    <!-- Third Kit -->
                    <div class="text-center">
                        <img src="{{ $team->third_kit }}" class="img-fluid kit-img" alt="Third Kit">
                        <p class="text-white">⭐ Terza Kit</p>
                    </div>       
                </div>
            </div>
        </div>
    </div>

<style>
    .team-background {
        background-size: cover;
        background-position: center;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .height-vh {
        min-height: 100vh;
    }

    .team-card {
        backdrop-filter: blur(5px);
        background: rgba(0, 0, 0, 0.7);
        border-radius: 15px;
        padding: 30px;
        text-align: left;
        transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        opacity: 0;
        transform: translateY(20px);
    }

    .team-info {
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.8s ease-out, transform 0.8s ease-out;
    }

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

    .flip-box-back {
        background: #007bff;
        transform: rotateY(180deg);
        color: white;
    }

    .kit-img {
        max-width: 120px;
        height: auto;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(255, 255, 255, 0.2);
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const teamInfo = document.querySelector(".team-info");
        const teamCard = document.querySelector(".team-card");

        if (teamCard) {
            setTimeout(() => {
                teamCard.style.opacity = 1;
                teamCard.style.transform = "translateY(52px)";
            }, 200);
        }

        if (teamInfo) {
            setTimeout(() => {
                teamInfo.style.opacity = 1;
                teamInfo.style.transform = "translateY(0)";
            }, 400);
        }
    });
</script>
@endsection
