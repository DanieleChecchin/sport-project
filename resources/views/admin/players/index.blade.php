@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        {{-- <h1 class="text-center mb-4 text-primary fw-bold">⚽ Serie A - Giocatori, Squadre e Allenatori</h1> --}}

        <!-- 🔍 SearchBar -->
        <div class="d-flex justify-content-center nav-bar-mt ">
            <form action="{{ route('admin.players.index') }}" method="GET" class="d-flex search-bar w-100">
                <input type="text" name="search" class="form-control me-2 rounded-pill shadow-sm"
                    placeholder="Cerca squadra o giocatore..." aria-label="Search">
                <button type="submit" class="btn btn-primary rounded-pill px-4">🔍 Cerca</button>
                {{-- <a href=" {{ route('admin.players.create') }} " class="btn btn-primary rounded-pill px-4">Aggiungi un
                    giocatore</a> --}}
            </form>
        </div>



        <!-- 🏆 Sezione Giocatori -->
        <section class="mb-5">
            <div class="row">
                @foreach ($players as $player)
                    <div class="col-md-4 col-lg-3">
                        <a href="{{ route('admin.players.show', $player->id) }}">
                            <div
                                class=" custom-card mb-4 player-card shadow-sm position-relative text-center d-flex align-items-center overflow-hidden">

                                <img class="img-fluid player-img object-fit-cover w-100" src="{{ $player->img }}"
                                    alt="{{ $player->first_name }}">
                                <h5
                                    class="card-title nome-fig rounded-bottom text-white fw-bold m-0 w-100 position-absolute">
                                    {{ $player->first_name }}
                                    {{ $player->last_name }}</h5>
                                <div class="d-flex text-white position-absolute nome-verticale w-100 fw-bold">
                                    {{ $player->team->name }}
                                </div>
                                <img src="{{ $player->team->url_logo }}"
                                    class="card-img-top icona-logo img-fluid team-logo position-absolute object-fit-contain"
                                    alt="{{ $player->team->name }}">
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
            padding: 20px;
        }

        .nav-bar-mt {
            margin: 80px 0 35px 0;
        }

        .custom-card:hover {
            transform: scale(1.03);
            box-shadow: 0px 10px 30px rgba(255, 193, 7, 0.4);
        }

        body {
            background: url('https://wips.plug.it/cips/sport.virgilio.it/cms/2022/12/gettyimages-1446742528.jpg') no-repeat center center fixed;
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
        }

        .search-bar input {
            transition: all 0.3s ease-in-out;
        }

        .search-bar input:focus {
            box-shadow: 0px 0px 10px rgba(0, 123, 255, 0.5);
        }

        .nome-fig {
            background: rgb(0 0 0 / 90%);
            border: 1px solid black;
            padding: 2px 3px;
            margin-bottom: 5px;
            top: 302px;
            left: 0;
        }

        .nome-verticale {
            top: 7px;
            right: -12px;
        }

        .player-card:hover {
            transform: translateY(-5px);
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
        }

        .icona-logo {
            top: 10px;
            right: -40%;
        }

        .player-img {
            height: 275px;
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
            transition: transform 0.3s ease-in-out;
        }
    </style>
@endsection
