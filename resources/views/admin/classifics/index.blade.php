@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="table-responsive">
            <table id="classificaTable" class="table table-dark table-hover shadow-lg text-center classific">
                <thead class="thead-light">
                    <tr>
                        <th class="sortable" data-column="position">Posizione <i class="fas fa-sort"></i></th>
                        <th class="sortable text-start" data-column="team">Squadra <i class="fas fa-sort"></i></th>
                        <th class="sortable" data-column="points">Punti <i class="fas fa-sort"></i></th>
                        <th>G</th>
                        <th>V</th>
                        <th>N</th>
                        <th>P</th>
                        <th>GF</th>
                        <th>GS</th>
                        <th>DR</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($classifics as $index => $team)
                        <tr class="table-row">
                            <td class="position fw-bold">{{ $index + 1 }}</td>
                            <td class="text-start">
                                <img src="{{ asset('storage/' . $team->image) }}" alt="{{ $team->team_name }}"
                                    class="team-logo">
                                {{ $team->team_name }}
                            </td>
                            <td class="position fw-bold">{{ $team->points }}</td>
                            <td>{{ $team->played }}</td>
                            <td class="text-success fw-bold">{{ $team->wins }}</td>
                            <td class="text-warning">{{ $team->draws }}</td>
                            <td class="text-danger">{{ $team->losses }}</td>
                            <td>{{ $team->goals_for }}</td>
                            <td>{{ $team->goals_against }}</td>
                            <td class="{{ $team->goal_difference >= 0 ? 'text-success' : 'text-danger' }}">
                                {{ $team->goal_difference }}
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- Legenda colori -->
            <div class="legend mt-4 text-white fw-fold text-center table table-dark table-hover shadow-lg text-center">
                <p><span class="legend-box champions"></span> Champions League</p>
                <p><span class="legend-box europa"></span> Europa League</p>
                <p><span class="legend-box conference"></span> Conference League</p>
                <p><span class="legend-box retrocesse"></span> Retrocessione in Serie B</p>
            </div>
        </div>


    </div>


    <style>
        body {
            background: url('https://primabergamo.it/media/2024/08/serie_a_enilive.jpg') no-repeat center center fixed;
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

        .classific {
            margin: 80px 0 35px 0;
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

        /* Colori per le competizioni europee */
        .champions {
            background-color: blue;
        }

        .europa {
            background-color: orangered;
        }

        .conference {
            background-color: rgba(0, 255, 170, 0.3);
        }

        .retrocesse {
            background-color: red;
        }


        .legend {
            display: flex;
            justify-content: center;
            gap: 50px;
            padding: 7px;
            padding-bottom: 0px;
            padding-top: 15px;
            flex-wrap: wrap;
            font-size: 1rem;
            background-color: #212529;
        }

        .legend-box {
            display: inline-block;
            width: 20px;
            height: 20px;
            margin-right: 10px;
            border-radius: 5px;
        }

        .champions .legend-box {
            background-color: rgba(0, 123, 255, 1);
        }

        .europa .legend-box {
            background-color: rgba(255, 165, 0, 1);
        }

        .conference .legend-box {
            background-color: rgba(0, 255, 170, 1);
        }

        .retrocesse .legend-box {
            background-color: rgba(255, 0, 0, 1);
        }
    </style>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const table = document.getElementById("classificaTable");
            const headers = table.querySelectorAll(".sortable");

            headers.forEach(header => {
                header.addEventListener("click", function() {
                    const column = this.dataset.column;
                    const tbody = table.querySelector("tbody");
                    const rows = Array.from(tbody.querySelectorAll("tr"));

                    const isAscending = !this.classList.contains("sorted-asc");
                    headers.forEach(h => h.classList.remove("sorted-asc", "sorted-desc"));
                    this.classList.add(isAscending ? "sorted-asc" : "sorted-desc");

                    rows.sort((a, b) => {
                        let aValue = a.querySelector(`[data-column="${column}"]`)
                            ?.textContent || a.children[this.cellIndex].textContent;
                        let bValue = b.querySelector(`[data-column="${column}"]`)
                            ?.textContent || b.children[this.cellIndex].textContent;

                        return isAscending ?
                            aValue - bValue || aValue.localeCompare(bValue) :
                            bValue - aValue || bValue.localeCompare(aValue);
                    });

                    tbody.innerHTML = "";
                    rows.forEach(row => tbody.appendChild(row));
                });
            });
        });
    </script>
@endsection
