@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        {{-- <h1 class="text-center mb-4 text-primary fw-bold">⚽ Serie A - Giocatori, Squadre e Allenatori</h1> --}}

        <!-- 🔍 SearchBar -->
        <div class="d-flex justify-content-center mb-4">
            <form action="{{ route('admin.players.index') }}" method="GET" class="d-flex search-bar">
                <input type="text" name="search" class="form-control me-2 rounded-pill shadow-sm"
                    placeholder="Cerca squadra o giocatore..." aria-label="Search">
                <button type="submit" class="btn btn-primary rounded-pill px-4">🔍 Cerca</button>
            </form>
        </div>

        <!-- 🏆 Sezione Giocatori -->
        <section class="mb-5">
            {{-- <h2 class="text-success mb-4 text-center">👕 Giocatori di Serie A</h2> --}}
            <div class="row">
                @foreach ($players as $player)
                    <div class="col-md-4 col-lg-3">
                        <a href="{{ route('admin.players.show', $player->id) }}">
                            <div class=" custom-card mb-4 player-card shadow-sm position-relative text-center">
                                {{-- <div class=" position-relative text-center"> --}}

                                <img class="img-fluid player-img" src="{{ $player->img }}" alt="{{ $player->first_name }}">
                                <h5 class="card-title nome-fig rounded-bottom text-white fw-bold m-0">
                                    {{ $player->first_name }}
                                    {{ $player->last_name }}</h5>
                                <div class="d-flex text-white position-absolute nome-verticale">
                                    {{ $player->team->name }}
                                </div>
                                <img src="{{ $player->team->url_logo }}" class="card-img-top icona-logo img-fluid team-logo"
                                    alt="{{ $player->team->name }}">
                                {{-- </div> --}}
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </section>
    </div>

    <style>
        /* 🏅 Stile Generale */
        .custom-card {
            border-radius: 15px;
            background: rgb(0 0 0 / 33%);
            backdrop-filter: blur(3px);
            transition: transform 0.3sease, box-shadow 0.3sease;
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.15);
            border: 1px solid rgba(255, 255, 255, 0.2);
            width: 300px;
            height: 335px;
            display: flex;
            align-items: center;
            padding: 20px;
            overflow: hidden;
        }

        .custom-card:hover {
            transform: scale(1.03);
            box-shadow: 0px 10px 30px rgba(255, 193, 7, 0.4);
        }

        body {
            background: url('https://www.juventus.com/images/image/private/t_editorial_landscape_12_desktop/dev/v9q9wjyz2fazuf8dlegf.jpg') no-repeat center center fixed;
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

        /* 🔍 Search Bar */
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

        /* 👕 Card Giocatori */
        /* .player-card {
                    border: 1px solid black;
                    border-radius: 15px;
                    background: white;
                    transition: all 0.3s ease-in-out;
                    position: relative;
                    overflow: hidden;
                } */

        .nome-fig {
            width: 100%;
            background: rgb(0 0 0 / 90%);
            /* border-radius: 15px; */
            border: 1px solid black;
            padding: 2px 3px;
            margin-bottom: 5px;
            position: absolute;
            top: 302px;
            left: 0;
        }

        .nome-verticale {
            top: 7px;
            right: -12px;
            width: 100%;
            font-weight: bold;
        }

        .player-card:hover {
            transform: translateY(-5px);
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
        }

        .icona-logo {
            position: absolute;
            top: 10px;
            right: -40%;
        }

        .player-img {
            width: 100%;
            height: 275px;
            object-fit: cover;
        }

        /* 👤 Profilo Bottone */
        .btn-outline-success {
            transition: all 0.3s ease-in-out;
        }

        .btn-outline-success:hover {
            background-color: #28a745;
            color: white;
        }

        .team-logo {
            height: 40px;
            object-fit: contain;
            transition: transform 0.3s ease-in-out;
        }
    </style>
@endsection
