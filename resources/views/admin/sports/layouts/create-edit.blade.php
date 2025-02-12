@extends("layouts.app")

@section("content")
<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="@yield("form-action")" method="POST" enctype="multipart/form-data">
                @yield("form-method")
                @csrf

                <div class="mb-3">
                    <h1 class="text-center fw-bold">
                        @yield("form-title")
                    </h1>
                </div>

                <div class="mb-3">
                    <label for="player-first_name" class="form-label text-white">player first name:</label>
                    <input type="text" name="first_name" id="player-first_name" class="form-control" value="{{ old("first_name", $player->first_name) }}">
                    {{-- @error("name")
                        @include("partials.single-name-error-message")
                    @enderror --}}
                </div>
                <div class="mb-3">
                    <label for="player-last_name" class="form-label text-white">player last_name:</label>
                    <input type="text" name="last_name" id="player-last_name" class="form-control" value="{{ old("last_name", $player->last_name) }}">

                </div>
                <div class="mb-3">
                    <label for="player-date_of_birth" class="form-label text-white">player date_of_birth:</label>
                    <input type="text" name="date_of_birth" id="player-date_of_birth" class="form-control" value="{{ old("date_of_birth", $player->date_of_birth) }}">

                </div>
                <div class="mb-3">
                    <label for="player-role" class="form-label text-white">player role:</label>
                    <input type="text" name="role" id="player-role" class="form-control" value="{{ old("role", $player->role) }}">

                </div>
                <div class="mb-3">
                    <label for="player-nationality" class="form-label text-white">player nationality:</label>
                    <input type="text" name="nationality" id="player-nationality" class="form-control" value="{{ old("nationality", $player->nationality) }}">

                </div>
                <div class="mb-3">
                    <label for="player-market_value" class="form-label text-white">player market_value:</label>
                    <input type="text" name="market_value" id="player-market_value" class="form-control" value="{{ old("market_value", $player->market_value) }}">

                </div>
                <div class="mb-3">
                    <label for="player-fav_foot" class="form-label text-white">player fav_foot:</label>
                    <input type="text" name="fav_foot" id="player-fav_foot" class="form-control" value="{{ old("fav_foot", $player->fav_foot) }}">

                </div>
                <div class="mb-3">
                    <label for="player-height" class="form-label text-white">player height:</label>
                    <input type="text" name="height" id="player-height" class="form-control" value="{{ old("height", $player->height) }}">

                </div>

                <button type="submit" class="btn btn-lg btn-primary">@yield("form-title")</button>
                <button type="reset" class="btn btn-lg btn-warning">Reset fields</button>
            </form>
        </div>
    </div>
</div>
@endsection
