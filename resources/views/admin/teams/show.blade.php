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
                    <div class="col-md-8 team-info text-white">
                        <h2 class="text-primary">{{ $team->name }}</h2>
                        <p><strong>📍 Città:</strong> {{ $team->city }}</p>
                        <p><strong>🏟 Stadio:</strong> {{ $team->stadium }}</p>
                        <p><strong>💰 Valore Squadra:</strong> €{{ number_format($team->team_value, 2, ',', '.') }} mln</p>
                        <p><strong>🏆 Palmares:</strong> {{ $team->palmares }}</p>
                        <p><strong>📅 Fondazione:</strong> {{ \Carbon\Carbon::parse($team->foundation_year)->format('d/m/Y') }}</p>
                        <p><strong>👔 Presidente:</strong> {{ $team->president }}</p>
                        <p><strong>🤝 Sponsor:</strong> {{ $team->main_sponsor }}</p> 
                        <a href="{{ route('admin.teams.index') }}" class="btn btn-outline-primary btn-animated">🔙 Torna alle squadre</a>
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
        backdrop-filter: blur(2px);
        background: rgba(0, 0, 0, 0.6);
        border-radius: 15px;
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

    .flip-box-front {
        
        margin: 0 0 0 -20px;
    }

    .flip-box-back {
        background: #007bff;
        transform: rotateY(180deg);
        color: white;
    }

    .btn-animated {
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }

    .btn-animated:hover {
        transform: scale(1.1);
        box-shadow: 0 5px 15px rgba(0, 123, 255, 0.3);
    }
</style>



<script>
    document.addEventListener("DOMContentLoaded", function() {
        const teamInfo = document.querySelector(".team-info");
        const teamCard = document.querySelector(".team-card");

        if (teamCard) {
            setTimeout(() => {
                teamCard.style.opacity = 1;
                teamCard.style.transform = "translateY(0)";
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

