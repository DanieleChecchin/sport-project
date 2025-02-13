@extends("admin.beers.layouts.create-edit")

@section("form-action")
    {{ route("admin.beers.update", $player) }}
@endsection

@section("form-method")
    @method("PUT")
@endsection

@section("form-title")
    {{ $beer->first_name }} {{ $beer->last_name }} update
@endsection
