@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="text-center text-black mb-4">Classifica Serie A 2024/2025</h2>
    <div class="table-responsive">
        <table id="classificaTable" class="table table-dark table-bordered table-hover shadow-lg">
            <thead class="thead-dark">
                <tr>
                    <th class="sortable" data-column="position">Posizione <i class="fas fa-sort"></i></th>
                    <th class="sortable" data-column="team">Squadra <i class="fas fa-sort"></i></th>
                    <th>G</th>
                    <th>V</th>
                    <th>N</th>
                    <th>P</th>
                    <th>GF</th>
                    <th>GS</th>
                    <th>DR</th>
                    <th>Punti</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($classifics as $index => $team)
                    <tr class="table-row">
                        <td class="position">{{ $index + 1 }}</td>
                        <td>{{ $team->team_name }}</td>
                        <td>{{ $team->played }}</td>
                        <td>{{ $team->wins }}</td>
                        <td>{{ $team->draws }}</td>
                        <td>{{ $team->losses }}</td>
                        <td>{{ $team->goals_for }}</td>
                        <td>{{ $team->goals_against }}</td>
                        <td>{{ $team->goal_difference }}</td>
                        <td class="position">{{ $team->points }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<style>
    .position {
        width: 15px;
    }
</style>

@endsection
