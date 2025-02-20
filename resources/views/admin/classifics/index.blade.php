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
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $team->team_name }}</td>
                        <td>{{ $team->played }}</td>
                        <td>{{ $team->wins }}</td>
                        <td>{{ $team->draws }}</td>
                        <td>{{ $team->losses }}</td>
                        <td>{{ $team->goals_for }}</td>
                        <td>{{ $team->goals_against }}</td>
                        <td>{{ $team->goal_difference }}</td>
                        <td>{{ $team->points }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const sortableHeaders = document.querySelectorAll('.sortable');
        sortableHeaders.forEach(header => {
            header.addEventListener('click', function () {
                const column = this.dataset.column;
                sortTable(column);
            });
        });

        function sortTable(column) {
            const table = document.getElementById('classificaTable');
            const rows = Array.from(table.querySelectorAll('tbody tr'));
            const columnIndex = getColumnIndex(column);
            const sortedRows = rows.sort((a, b) => {
                const aText = a.cells[columnIndex].innerText;
                const bText = b.cells[columnIndex].innerText;

                if (isNaN(aText) || isNaN(bText)) {
                    return aText.localeCompare(bText);
                }
                return parseInt(aText) - parseInt(bText);
            });

            // Reinsert the sorted rows
            table.querySelector('tbody').innerHTML = '';
            table.querySelector('tbody').append(...sortedRows);
        }

        function getColumnIndex(column) {
            const headers = document.querySelectorAll('#classificaTable thead th');
            switch (column) {
                case 'position':
                    return 0;
                case 'team':
                    return 1;
                default:
                    return -1;
            }
        }
    });
</script>
@endsection

@section('styles')
<style>
    .table-responsive {
        max-height: 600px;
        overflow-y: auto;
        border-radius: 8px;
        margin-top: 20px;
    }
    
    .table {
        font-family: 'Roboto', sans-serif;
        font-size: 1rem;
        border-collapse: separate;
        border-spacing: 0 10px;
    }

    .table th, .table td {
        padding: 15px;
        text-align: center;
        vertical-align: middle;
    }

    .table th {
        background-color: #343a40;
        font-weight: bold;
        color: #f8f9fa;
        border-top: 2px solid #dee2e6;
    }

    .table tbody tr {
        background-color: #495057;
        transition: all 0.3s ease;
    }

    .table tbody tr:hover {
        background-color: #6c757d;
        transform: scale(1.02);
    }

    .table-row {
        transition: transform 0.3s ease-in-out;
    }

    .table th.sortable {
        cursor: pointer;
        position: relative;
    }
    
    .table th.sortable i {
        position: absolute;
        right: 10px;
        opacity: 0.5;
    }

    .table th.sortable:hover i {
        opacity: 1;
    }

    .table-row:nth-child(odd) {
        background-color: #343a40;
    }

    .table-row:nth-child(even) {
        background-color: #495057;
    }

    .table-bordered th, .table-bordered td {
        border: 1px solid #dee2e6;
    }
</style>
@endsection
