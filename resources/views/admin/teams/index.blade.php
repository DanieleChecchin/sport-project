@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-4 text-primary fw-bold">Serie A - Giocatori, Squadre e Allenatori</h1>

        <!-- Sezione Squadre -->
        <section class="mb-5">
            <h2 class="text-danger">🏆 Squadre di Serie A</h2>
            <div class="row">
                @foreach ($teams as $team)
                    <div class="col-md-3">
                        <div class="card mb-3 shadow-lg border-0 rounded-3 overflow-hidden fade-in py-3">
                            <img src="{{ $team->team_logo }}" class="card-img-top img-fluid team-logo"
                                alt="{{ $team->name }}">
                            <div class="card-body text-center">
                                <h5 class="card-title text-uppercase fw-bold text-dark">{{ $team->name }}</h5>
                                <p class="card-text text-muted small">📍 Città: {{ $team->city }}</p>
                                <p class="card-text small">🏟 Stadio: {{ $team->stadium }}</p>
                                <p class="card-text small">💰 Valore Squadra: €
                                    {{ number_format($team->team_value, 2, ',', '.') }} mln</p>
                                <a href="{{ route('admin.teams.show', $team->id) }}"
                                    class="btn btn-outline-primary btn-sm border-0">🔍 Dettagli</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </div>

    <style>
        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .team-logo {
            height: 100px;
            object-fit: contain;
            transition: transform 0.3s ease-in-out;
        }

        .team-logo:hover {
            transform: scale(1.1);
        }


        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }
    </style>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const cards = document.querySelectorAll(".fade-in");
            let delay = 200;

            cards.forEach((card, index) => {
                setTimeout(() => {
                    card.style.opacity = 1;
                    card.style.transform = "translateY(0)";
                }, index * delay);
            });
        });
    </script>
@endsection
