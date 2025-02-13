@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg">
                <div class="card-header text-center font-weight-bold">{{ __('Pannello di Controllo') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('status') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <div class="text-center">
                        <h3>{{ __('Benvenuto') }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .card {
        border-radius: 15px;
    }
    .card-header {
        background-color: #007bff;
        color: white;
        font-size: 1.25rem;
        border-radius: 15px 15px 0 0;
    }
    .alert-success {
        background-color: #28a745;
        border-color: #28a745;
        color: white;
        border-radius: 10px;
    }
    .alert-success .close {
        color: white;
    }
    .card-body h3 {
        color: #007bff;
        font-size: 1.5rem;
        font-weight: bold;
    }
</style>
@endpush

@push('scripts')
<script>
    // Auto-hide alert after 5 seconds
    setTimeout(function() {
        $('.alert').alert('close');
    }, 5000);
</script>
@endpush
