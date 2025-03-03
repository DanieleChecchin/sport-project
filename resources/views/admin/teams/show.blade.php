@extends('layouts.app')

@section('content')
    <div class="team-background d-flex align-items-center justify-content-center"
        style="background-image: url('{{ $team->stadium_url }}');">
        <div class="container height-vh d-flex align-items-center justify-content-center flex-wrap">
            <div class="shadow-lg team-card d-flex flex-row align-items-center flex-wrap justify-content-around pb-5">
                <h2 class="text-uppercase text-center text-white col-12 mb-4 fs-1 font-class mt-4">{{ $team->name }}</h2>
                <div class="d-flex align-items-center">
                    <img src="{{ asset('/storage/' . $team->team_logo) }}" class="team-logo" alt="{{ $team->name }}">
                    <div class="col-md-8 team-info text-white ms-4">
                        <ul class="list-unstyled ciao">
                            <li><strong>📍 Città:</strong> {{ $team->city }}</li>
                            <li><strong>🏟 Stadio:</strong> {{ $team->stadium }}</li>
                            <li><strong>💰 Valore Squadra:</strong> €{{ number_format($team->team_value, 2, ',', '.') }} mln
                            </li>
                            <li><strong>🏆 Palmares:</strong> {{ $team->palmares }}</li>
                            <li><strong>📅 Fondazione:</strong>
                                {{ \Carbon\Carbon::parse($team->foundation_year)->format('d/m/Y') }}</li>
                            <li><strong>👔 Presidente:</strong> {{ $team->president }}</li>
                            <li><strong>🤝 Sponsor:</strong> {{ $team->main_sponsor }}</li>
                        </ul>
                    </div>
                </div>

                <div class="ms-5">
                    <div class="col text-center">
                        <h3 class="text-white">Magliette Ufficiali 24/25</h3>
                    </div>
                    <div class="d-flex justify-content-center align-items-center gap-4 m-4 text-white">
                        <!-- Home Kit -->
                        <div class="text-center">
                            <img src="{{ '/storage/' . $team->home_kit }}" class="img-fluid kit-img" alt="Home Kit">
                            <p class="mt-3">🏠 Casa Kit</p>
                        </div>
                        <!-- Away Kit -->
                        <div class="text-center">
                            <img src="{{ '/storage/' . $team->away_kit }}" class="img-fluid kit-img" alt="Away Kit">
                            <p class="mt-3">🚗 Fuori Casa Kit</p>
                        </div>
                        <!-- Third Kit -->
                        <div class="text-center">
                            <img src="{{ '/storage/' . $team->third_kit }}" class="img-fluid kit-img" alt="Third Kit">
                            <p class="mt-3">⭐ Terza Kit</p>
                        </div>
                    </div>
                </div>
                <div class="mt-1 d-flex justify-content-center col-12">
                    <a href="{{ route('admin.teams.index') }}" class="btn custom-btn fw-bold display-inline text-white">
                        🔙 Torna alle squadre
                    </a>
                </div>
            </div>
        </div>
    </div>

    <style>
        .custom-btn {
            background: #0F1027;
            padding: 10px 20px;
            border-radius: 30px;
            font-size: 16px;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .custom-btn:hover {
            background: rgb(20, 95, 170);
            transform: scale(1.05);
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.15);
        }

        .font-class {
            font-family: "Merriweather", serif;
        }

        ul.ciao li {
            margin-bottom: 10px;
            font-size: 18px;
        }

        .team-background {
            background-size: cover;
            background-position: center;
            min-height: 100vh;
        }

        .team-logo {
            width: 220px;
            border-radius: 10px;
            transition: transform 0.3s ease-in-out;
        }

        body::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 0;
        }

        .height-vh {
            min-height: 100vh;
        }

        .team-card {
            background: rgba(0, 0, 0, 0.7);
            border-radius: 15px;
            padding: 20px;
            z-index: 1;
        }

        .kit-img {
            max-width: 160px;
            height: auto;
            border-radius: 10px;
        }
    </style>
@endsection
