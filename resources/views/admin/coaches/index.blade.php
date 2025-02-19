@extends('layouts.app')

@section('content')
    <div class="container mt-5">

        <!-- SearchBar con live search -->
        <div class="d-flex justify-content-center mb-4">
            <form action="{{ route('admin.coaches.index') }}" method="GET" class="d-flex search-bar" id="searchForm">
                <input type="text" name="search" id="searchInput" class="form-control me-2 rounded-pill shadow-sm"
                    placeholder="Cerca allenatore" aria-label="Search">
                <button type="submit" class="btn btn-primary rounded-pill px-4">🔍 Cerca</button>
            </form>
        </div>

        <!-- Sezione Allenatori -->
        <section class="mb-5">
            <div class="row" id="coachesList">
                @foreach ($coaches as $coach)
                    <div class="col-md-4 col-lg-3 coach-card"
                        data-name="{{ strtolower($coach->first_name . ' ' . $coach->last_name) }}">
                        <div class="card mb-4 shadow-lg  animate-card">
                            <div class="card-img-top coach-image-container">
                                <img src="{{ $coach->img }}" class="img-fluid coach-img" alt="{{ $coach->first_name }}">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title fw-bold text-white">{{ $coach->first_name }} {{ $coach->last_name }}
                                </h5>
                                <p class="card-text text-white ">Panchina: <strong>{{ $coach->team }}</strong>
                                </p>
                                  <!-- Logo Squadra -->
                                    <img src="{{ asset($coach->team_logo) }}" class="img-fluid team-logo" 
                                    alt="{{ $coach->team }}" style="width: 50px; height: auto;">

                                <!-- Logo Nazione -->                                
                                <img src="{{ asset($coach->nationality_logo) }}" class="img-fluid nation-logo"
                                    alt="{{ $coach->nationality }}" style="width: 40px; height: auto;">
                                <a href="{{ route('admin.coaches.show', $coach->id) }}"
                                    class="btn btn-outline-warning rounded-pill px-4 mt-2">📖 Scopri di più</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </div>

    <style>
        /* Sfondo della Pagina */
        body {
            background: url('https://media.gettyimages.com/id/1026849104/it/video/panning-passed-dugout-in-empty-maracana-stadium.jpg?s=640x640&k=20&c=poAUgepa08BYxqgSM1UkIsDplfga9SiDRfnJnTCoHEM=') no-repeat center center fixed;
            background-size: cover;
        }


        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }


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


        /* Animazioni di entrata */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-card {
            border-radius: 15px;
            background: rgb(0 0 0 / 33%);
            transition: transform 0.3sease, box-shadow 0.3sease;
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.15);
            border: 1px solid rgba(255, 255, 255, 0.2);
            width: 290px;
            height: 350px;
            display: flex;
            align-items: center;
            padding: 20px;
            overflow: hidden;
            backdrop-filter: blur(4px);
        }


        .animate-card:hover {
            transform: translateY(-5px) scale(1);
            box-shadow: 0px 15px 30px rgba(255, 193, 7, 0.3);
        }

        /* Immagine allenatore */
        .coach-image-container {
            width: 140px;
            height: 140px;
            margin: auto;
            overflow: hidden;
            border-radius: 50%;
            border: 3px solid #ffc107;

        }

        .coach-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Bottone Scopri di più */
        .btn-outline-warning {
            transition: all 0.3s ease-in-out;
            position: relative;
            overflow: hidden;
        }

        .btn-outline-warning:hover {
            background-color: #ffc107;
            color: white;
            box-shadow: 0px 0px 15px rgba(255, 193, 7, 0.7);
        }

        /* Luce al passaggio del mouse sui bottoni */
        .btn-outline-warning::before {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.3);
            transition: all 0.3s ease-in-out;
        }

        .btn-outline-warning:hover::before {
            left: 100%;
        }
    </style>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const searchInput = document.getElementById("searchInput");
            const coachCards = document.querySelectorAll(".coach-card");

            searchInput.addEventListener("input", function() {
                const query = searchInput.value.toLowerCase();

                coachCards.forEach(card => {
                    const name = card.dataset.name;

                    if (name.includes(query)) {
                        card.style.display = "block";
                    } else {
                        card.style.display = "none";
                    }
                });
            });
        });
    </script>
@endsection
