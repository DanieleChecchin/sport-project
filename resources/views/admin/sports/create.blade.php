@extends("admin.players.layouts.create-edit")

@section("form-action")
    {{ route("admin.players.store") }}
@endsection

@section("form-method")
    @method("POST")
@endsection

@section("form-title")
    Add new player
@endsection
