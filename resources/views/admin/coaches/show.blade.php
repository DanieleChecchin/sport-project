@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <!-- Card Allenatore -->
        <div class="card shadow-lg p-4 custom-card animate-fade-in">
            <div class="text-center">
                <!-- Immagine con stile migliorato -->
                <img src="{{ asset($coach->img) }}" alt="{{ $coach->first_name }}" class="coach-image mb-3">
            </div>
            <h2 class="text-warning text-center fw-bold">{{ $coach->first_name }} {{ $coach->last_name }}</h2>
            <hr>
            <div class="coach-info">
                <p><strong>🌍 Nazionalità:</strong> {{ $coach->nationality }}</p>
                <p><strong>🏆 Trofei vinti:</strong> {{ $coach->trophies }}</p>
                <p><strong>📜 Descrizione:</strong></p>
                <p class="coach-description">{{ $coach->description }}</p>
            </div>

            <!-- Pulsante di ritorno -->
            <div class="text-center mt-4">
                <a href="{{ route('admin.coaches.index') }}" class="btn btn-outline-warning btn-lg shadow-sm">
                    🔙 Torna agli allenatori
                </a>
            </div>
        </div>
    </div>

    <!-- Stili personalizzati -->
    <style>
        .custom-card {
            border-radius: 15px;
            background: rgba(255, 255, 255, 0.95);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            padding: 30px;
            max-width: 600px;
            margin: auto;
        }

        .custom-card:hover {
            transform: translateY(-5px);
            box-shadow: 0px 10px 25px rgba(0, 0, 0, 0.2);
        }

        .coach-image {
            width: 220px;
            height: 220px;
            object-fit: cover;
            border-radius: 50%;
            border: 4px solid #ffc107;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
        }

        .coach-info {
            font-size: 1.1rem;
            text-align: center;
        }

        .coach-description {
            background: #fff3cd;
            padding: 10px;
            border-left: 5px solid #ffc107;
            font-style: italic;
            border-radius: 5px;
            text-align: justify;
        }

        /* Animazione fade-in */
        .animate-fade-in {
            opacity: 0;
            transform: translateY(30px);
            animation: fadeIn 0.7s ease-out forwards;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(30px);
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
            document.querySelector(".custom-card").classList.add("animate-fade-in");
        });
    </script>
@endsection
