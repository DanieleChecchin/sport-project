@extends('layouts.app')

@section('content')
    <div class="team-background" style="background-image: url('{{ $team->stadium_url }}');">
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
                    <a href="{{ route('admin.teams.index') }}" class="btn custom-btn text-white">
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
            font-weight: bold;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-block;
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
            display: flex;
            align-items: center;
            justify-content: center;
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
            /* backdrop-filter: blur(2px); */
            background: rgba(0, 0, 0, 0.7);
            border-radius: 15px;
            padding: 20px;
            text-align: left;
            /* transition: opacity 0.8s ease-out, transform 0.8s ease-out; */
            /* opacity: 0; */
            /* transform: translateY(20px) scale(0.9); */
            z-index: 1;
        }

        .flip-box {
            perspective: 1000px;
            margin: auto;
        }

        .flip-box-inner {
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform 0.6s;
            transform-style: preserve-3d;
        }

        .kit-img {
            max-width: 160px;
            height: auto;
            border-radius: 10px;

        }
    </style>

    <script>
        // document.addEventListener("DOMContentLoaded", function() {
        //     const teamInfo = document.querySelector(".team-info");
        //     const teamCard = document.querySelector(".team-card");
        //     const teamLogo = document.querySelector(".team-logo");
        //     const teamKit = document.querySelector(".kit-img");

        //     if (teamCard) {
        //         setTimeout(() => {
        //             teamCard.style.opacity = 1;
        //             teamCard.style.transform = "translateY(27px)";
        //         }, 200);
        //     }

        //     if (teamInfo) {
        //         setTimeout(() => {
        //             teamInfo.style.opacity = 1;
        //             // teamInfo.style.transform = "translateY(0)";
        //         }, 0);
        //     }
        //     if (teamLogo) {
        //         setTimeout(() => {
        //             teamInfo.style.opacity = 1;
        //             teamInfo.style.transform = "translateY(0)";
        //         }, 400);
        //     }
        //     if (teamKit) {
        //         setTimeout(() => {
        //             teamInfo.style.opacity = 1;
        //             teamInfo.style.transform = "translateY(0)";
        //         }, 400);
        //     }
        // });
    </script>
@endsection
