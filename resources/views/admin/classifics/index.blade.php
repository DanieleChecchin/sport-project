@extends('layouts.app')

@section('content')
<div class="container mt-5">       
    <div class="table-responsive">
        <table id="classificaTable" class="table table-dark table-hover shadow-lg text-center">
            <thead class="thead-light">
                <tr>
                    <th class="sortable" data-column="position">Posizione <i class="fas fa-sort"></i></th>
                    <th class="sortable text-start" data-column="team">Squadra <i class="fas fa-sort"></i></th>
                    <th>G</th>
                    <th>V</th>
                    <th>N</th>
                    <th>P</th>
                    <th>GF</th>
                    <th>GS</th>
                    <th>DR</th>
                    <th class="sortable" data-column="points">Punti <i class="fas fa-sort"></i></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($classifics as $index => $team)
                    <tr class="table-row">
                        <td class="position fw-bold">{{ $index + 1 }}</td>
                        <td class="text-start">
                           <img src="{{ asset('storage/' . $team->image) }}" alt="{{ $team->team_name }}" class="team-logo">
                           {{ $team->team_name }}
                        </td>
                        <td>{{ $team->played }}</td>
                        <td class="text-success fw-bold">{{ $team->wins }}</td>
                        <td class="text-warning">{{ $team->draws }}</td>
                        <td class="text-danger">{{ $team->losses }}</td>
                        <td>{{ $team->goals_for }}</td>
                        <td>{{ $team->goals_against }}</td>
                        <td class="{{ $team->goal_difference >= 0 ? 'text-success' : 'text-danger' }}">
                            {{ $team->goal_difference }}
                        </td>
                        <td class="position fw-bold">{{ $team->points }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<style>
    body {
            background: url('https://primabergamo.it/media/2024/08/serie_a_enilive.jpg') no-repeat center center fixed;
            background-size: cover;
            position: relative;
        }

    h2 {
        font-size: 2rem;
        font-weight: bold;
        text-shadow: 2px 2px 8px rgba(255, 255, 255, 0.2);
    }

    .table {
        border-radius: 12px;
        overflow: hidden;
        border: 2px solid rgba(255, 255, 255, 0.2);
    }

    .table thead th {
        background: #007bff;
        color: white;
        cursor: pointer;
        transition: background 0.3s ease;
    }

    .table thead th:hover {
        background: #0056b3;
    }

    .table-row {
        transition: all 0.3s ease;
    }

    .table-row:hover {
        background: rgba(255, 255, 255, 0.1);
        transform: scale(1.02);
    }

    .team-logo {
        width: 25px;
        height: 25px;
        border-radius: 50%;
        vertical-align: middle;
    }

    .sortable i {
        margin-left: 5px;
        transition: transform 0.3s ease;
    }

    .sorted-asc i {
        transform: rotate(180deg);
    }

    .sorted-desc i {
        transform: rotate(0deg);
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const table = document.getElementById("classificaTable");
        const headers = table.querySelectorAll(".sortable");

        headers.forEach(header => {
            header.addEventListener("click", function () {
                const column = this.dataset.column;
                const tbody = table.querySelector("tbody");
                const rows = Array.from(tbody.querySelectorAll("tr"));

                const isAscending = !this.classList.contains("sorted-asc");
                headers.forEach(h => h.classList.remove("sorted-asc", "sorted-desc"));
                this.classList.add(isAscending ? "sorted-asc" : "sorted-desc");

                rows.sort((a, b) => {
                    let aValue = a.querySelector(`[data-column="${column}"]`)?.textContent || a.children[this.cellIndex].textContent;
                    let bValue = b.querySelector(`[data-column="${column}"]`)?.textContent || b.children[this.cellIndex].textContent;

                    return isAscending
                        ? aValue - bValue || aValue.localeCompare(bValue)
                        : bValue - aValue || bValue.localeCompare(aValue);
                });

                tbody.innerHTML = "";
                rows.forEach(row => tbody.appendChild(row));
            });
        });
    });
</script>
@endsection






