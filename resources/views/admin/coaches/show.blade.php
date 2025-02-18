@extends('layouts.app')

@section('content')
    <div class="container mt-5 d-flex justify-content-center align-items-center">
        <!-- Card Allenatore in layout orizzontale -->
        <div class="card shadow-lg p-4 custom-card d-flex flex-row animate-slide-in">
            <!-- Immagine dell'allenatore -->
            <div class="image-container">
                <img src="{{ asset($coach->img) }}" alt="{{ $coach->first_name }}" class="coach-image">
            </div>

            <!-- Informazioni Allenatore -->
            <div class="coach-details ms-4">
                <h2 class="text-warning fw-bold">{{ $coach->first_name }} {{ $coach->last_name }}</h2>
                <hr class="custom-hr">
                <p><strong>🌍 Nazionalità:</strong> {{ $coach->nationality }}</p>
                <p><strong>🏆 Trofei vinti:</strong> {{ $coach->trophies }}</p>
                <p><strong>📜 Descrizione:</strong></p>
                <p class="coach-description">{{ $coach->description }}</p>

                <!-- Pulsante di ritorno -->
                <div class="mt-4">
                    <a href="{{ route('admin.coaches.index') }}" class="btn custom-btn">
                        🔙 Torna agli allenatori
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Stili personalizzati -->
    <style>
        /* Sfondo */
        body {
            background: linear-gradient(135deg, #fff7e3 0%, #ffebd9 100%);
        }

        /* Card con layout orizzontale */
        .custom-card {
            border-radius: 15px;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            max-width: 800px;
            display: flex;
            align-items: center;
            padding: 20px;
        }

        .custom-card:hover {
            transform: scale(1.03);
            box-shadow: 0px 10px 25px rgba(0, 0, 0, 0.2);
        }

        /* Immagine dell'allenatore */
        .coach-image {
            width: 250px;
            height: 250px;
            object-fit: cover;
            border-radius: 50%;
            border: 4px solid #ffc107;
            box-shadow: 0px 0px 15px rgba(255, 193, 7, 0.7);
            transition: box-shadow 0.3s ease;
        }

        .coach-image:hover {
            box-shadow: 0px 0px 25px rgba(255, 193, 7, 1);
        }

        /* Contenitore dettagli allenatore */
        .coach-details {
            flex-grow: 1;
            text-align: left;
        }

        /* Separatore */
        .custom-hr {
            width: 50%;
            border: 2px solid #ffc107;
            opacity: 0.7;
        }

        /* Descrizione allenatore */
        .coach-description {
            background: #fff3cd;
            padding: 10px;
            border-left: 5px solid #ffc107;
            font-style: italic;
            border-radius: 5px;
            text-align: justify;
        }

        /* Pulsante con effetto hover */
        .custom-btn {
            background: #ffc107;
            color: black;
            padding: 12px 25px;
            border-radius: 30px;
            font-size: 18px;
            font-weight: bold;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-block;
        }

        .custom-btn:hover {
            background: #e0a800;
            transform: scale(1.05);
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.15);
        }

        /* Animazione slide-in */
        .animate-slide-in {
            opacity: 0;
            transform: translateX(-50px);
            animation: slideIn 0.6s ease-out forwards;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
    </style>

    <!-- JS per animazione dinamica -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            document.querySelector(".custom-card").classList.add("animate-slide-in");
        });
    </script>
@endsection
