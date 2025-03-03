@extends('layouts.app')

@section('content')
    <div class="container mt-5 d-flex justify-content-center align-items-center">
        <!-- Card Allenatore in stile moderno -->
        <div class="card shadow-lg p-4 custom-card d-flex align-items-center flex-row animate-flip-in">
            <!-- Immagine dell'allenatore -->
            <div class="image-container">
                <img src="{{ asset($coach->img) }}" alt="{{ $coach->first_name }}" class="coach-image">
            </div>

            <!-- Informazioni Allenatore -->
            <div class="coach-details ms-4 text-w">
                <h2 class="text-warning fw-bold">{{ $coach->first_name }} {{ $coach->last_name }}</h2>
                <hr class="custom-hr">
                <p class="text-white"><strong>🌍 Nazionalità:</strong> {{ $coach->nationality }}</p>
                <p class="text-white"><strong>🏆 Trofei vinti:</strong> {{ $coach->trophies }}</p>
                <p class="text-white"><strong>📜 Descrizione:</strong></p>
                <p class="coach-description typing-effect">{{ $coach->description }}</p>


            </div>
        </div>
    </div>

    <!-- Pulsante di ritorno -->
    <div class="mt-4 d-flex justify-content-center">
        <a href="{{ route('admin.coaches.index') }}" class="btn custom-btn">
            🔙 Torna agli allenatori
        </a>
    </div>

    <!-- Stili personalizzati -->
    <style>
        /* Sfondo */
        body {
            background: url('https://media.gettyimages.com/id/1026849104/it/video/panning-passed-dugout-in-empty-maracana-stadium.jpg?s=640x640&k=20&c=poAUgepa08BYxqgSM1UkIsDplfga9SiDRfnJnTCoHEM=') no-repeat center center fixed;
            background-size: cover;
            position: relative;
        }

        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            z-index: -1;
        }

        /* Card moderna */
        .custom-card {
            border-radius: 15px;
            background: rgb(0 0 0 / 33%);
            backdrop-filter: blur(3px);
            transition: transform 0.3sease, box-shadow 0.3sease;
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.15);
            border: 1px solid rgba(255, 255, 255, 0.2);
            width: 70%;
            height: 500px;
            padding: 20px;
            overflow: hidden;
            margin-top: 140px;
        }

        .custom-card:hover {
            transform: scale(1.03);
            box-shadow: 0px 10px 30px rgba(255, 193, 7, 0.4);
        }

        /* Immagine dell'allenatore */
        .coach-image {
            width: 250px;
            height: 250px;
            object-fit: cover;
            border-radius: 50%;
            border: 4px solid #ffc107;
            box-shadow: 0px 0px 15px rgba(255, 193, 7, 0.7);
            transition: box-shadow 0.3s ease, transform 0.3s ease;
        }

        .coach-image:hover {
            box-shadow: 0px 0px 30px rgba(255, 193, 7, 1);
            transform: rotateY(10deg) scale(1.05);
        }

        /* Dettagli allenatore */
        .coach-details {
            flex-grow: 1;
            text-align: left;
        }

        /* Separatore */
        .custom-hr {
            width: 50%;
            border: 2px solid #ffc107;
            opacity: 0.8;
        }

        /* Descrizione con effetto typing */
        .coach-description {
            background: rgba(255, 255, 255, 0.8);
            padding: 10px;
            border-left: 5px solid #ffc107;
            font-style: italic;
            border-radius: 5px;
            text-align: justify;
            font-size: 1.1em;
        }

        /* Pulsante moderno */
        .custom-btn {
            background: linear-gradient(135deg, #ffc107 0%, #ff9800 100%);
            color: black;
            padding: 12px 25px;
            border-radius: 30px;
            font-size: 18px;
            font-weight: bold;
            text-decoration: none;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            display: inline-block;
            box-shadow: 0px 5px 10px rgba(255, 193, 7, 0.5);
        }

        .custom-btn:hover {
            background: linear-gradient(135deg, #ff9800 0%, #ff6f00 100%);
            transform: scale(1.05);
            box-shadow: 0px 5px 15px rgba(255, 193, 7, 0.7);
        }

        /* Effetto di luce sui bottoni */
        .custom-btn::before {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.3);
            transition: all 0.3s ease-in-out;
        }

        .custom-btn:hover::before {
            left: 100%;
        }

        /* Animazione flip-in */
        .animate-flip-in {
            opacity: 0;
            transform: rotateY(-90deg);
            animation: flipIn 0.7s ease-out forwards;
        }

        @keyframes flipIn {
            from {
                opacity: 0;
                transform: rotateY(-90deg);
            }

            to {
                opacity: 1;
                transform: rotateY(0);
            }
        }
    </style>

    <!-- JS per animazioni dinamiche -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelector(".custom-card").classList.add("animate-flip-in");

            // Effetto macchina da scrivere sulla descrizione
            const description = document.querySelector(".typing-effect");
            const text = description.textContent;
            description.textContent = "";
            let i = 0;

            function typeEffect() {
                if (i < text.length) {
                    description.textContent += text.charAt(i);
                    i++;
                    setTimeout(typeEffect, 30);
                }
            }

            setTimeout(typeEffect, 500);
        });
    </script>
@endsection
