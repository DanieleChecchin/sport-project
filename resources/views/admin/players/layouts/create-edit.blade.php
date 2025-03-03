@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="@yield('form-action')" method="POST" enctype="multipart/form-data">
                    @yield('form-method')
                    @csrf

                    <div class="mb-3">
                        <h1 class="text-center fw-bold">
                            @yield('form-title')
                        </h1>
                    </div>

                    <div class="mb-3 mt-5">
                        <label for="player-first_name" class="form-label">Nome:</label>
                        <input type="text" name="first_name" id="player-first_name" class="form-control"
                            value="{{ old('first_name', $player->first_name) }}">
                        {{-- @error('name')
                        @include("partials.single-name-error-message")
                    @enderror --}}
                    </div>
                    <div class="mb-3">
                        <label for="player-last_name" class="form-label">Cognome:</label>
                        <input type="text" name="last_name" id="player-last_name" class="form-control"
                            value="{{ old('last_name', $player->last_name) }}">

                    </div>
                    <div class="mb-3">
                        <label for="player-date_of_birth" class="form-label">Data di nascita:</label>
                        <input type="date" name="date_of_birth" id="player-date_of_birth" class="form-control"
                            value="{{ old('date_of_birth', $player->date_of_birth) }}">

                    </div>
                    <div class="mb-3">
                        <label for="player-role" class="form-label">Ruolo:</label>
                        <input type="text" name="role" id="player-role" class="form-control"
                            value="{{ old('role', $player->role) }}">

                    </div>
                    <div class="mb-3">
                        <label for="player-nationality" class="form-label">Nazionalità:</label>
                        <input type="text" name="nationality" id="player-nationality" class="form-control"
                            value="{{ old('nationality', $player->nationality) }}">

                    </div>
                    <div class="mb-3">
                        <label for="player-market_value" class="form-label">Valore di mercato:</label>
                        <input type="float" name="market_value" id="player-market_value" class="form-control"
                            value="{{ old('market_value', $player->market_value) }}">

                    </div>
                    <div class="mb-3">
                        <label for="player-fav_foot" class="form-label">Piede preferito:</label>
                        <input type="text" name="fav_foot" id="player-fav_foot" class="form-control"
                            value="{{ old('fav_foot', $player->fav_foot) }}">

                    </div>
                    <div class="mb-3">
                        <label for="player-height" class="form-label">Altezza:</label>
                        <input type="float" name="height" id="player-height" class="form-control"
                            value="{{ old('height', $player->height) }}">
                    </div>
                    <div class="mb-3">
                        <label for="player-img" class="form-label">Immagine:</label>
                        <input type="text" name="img" id="player-img" class="form-control"
                            value="{{ old('img', $player->img) }}">
                    </div>
                    <div class="mb-3">
                        <label for="player-number" class="form-label">Numero di maglia:</label>
                        <input type="number" name="number" id="player-number" class="form-control"
                            value="{{ old('number', $player->number) }}">
                    </div>


                    <div class="mb-3">
                        <label for="player-team" class="form-label">Squadra del giocatore:</label>
                        @foreach ($teams as $team)
                            <div class="form-check">
                                <input type="radio" name="teams" id="player-team-{{ $team->id }}"
                                    class="form-check-input" value="{{ $team->id }}">
                                <label type="radio" name="teams" id="player-team" class="form-check-label">
                                    {{ $team->name }}
                                </label>
                            </div>
                        @endforeach
                    </div>


                    <div class="mb-3">
                        <label for="player-coach" class="form-label">Allenatore:</label>
                        @foreach ($coaches as $coach)
                            <div class="form-check">
                                <input type="radio" name="coaches" id="player-coach-{{ $coach->id }}"
                                    class="form-check-input" value="{{ $coach->id }}">
                                <label type="radio" name="coaches" id="player-coach" class="form-check-label">
                                    {{ $coach->last_name }}
                                </label>
                            </div>
                        @endforeach
                    </div>


                    <div class="mb-3">
                        <label for="player-shirt" class="form-label">Maglia:</label>
                        @foreach ($shirts as $shirt)
                            <div class="form-check">
                                <input type="radio" name="shirts" id="player-shirt-{{ $shirt->id }}"
                                    class="form-check-input" value="{{ $shirt->id }}">
                                <label type="radio" name="shirts" id="player-shirt" class="form-check-label">
                                    {{ $shirt->img }}
                                </label>
                            </div>
                        @endforeach
                    </div>

                    <button type="submit" class="btn btn-lg btn-primary">@yield('form-title')</button>
                    <button type="reset" class="btn btn-lg btn-warning">Reset fields</button>
                </form>
            </div>
        </div>
    </div>
@endsection
