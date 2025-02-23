@extends('layouts.app')

@section('content')
<div class="container vh-100 d-flex align-items-center">
    <div class="row justify-content-center w-100">
        <div class="col-md-6">
            <div class="card shadow-md">
                <div class="card-header text-center font-weight-bold">
                    {{ __('Pannello di Controllo') }}
                </div>

                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('status') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <h3 class="welcome-text">{{ __('Benvenuto') }}</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    body {
        background-color: #f8f9fa; /* Colore di sfondo più moderno */
    }
    
    .card {
        border-radius: 12px;
        border: none;
    }

    .card-header {
        background-color: #007bff;
        color: white;
        font-size: 1.25rem;
        border-radius: 12px 12px 0 0;
    }

    .alert-success {
        background-color: #28a745;
        border-color: #28a745;
        color: white;
        border-radius: 8px;
        padding: 10px;
    }

    .alert-success .close {
        color: white;
        opacity: 0.8;
    }

    .welcome-text {
        color: #007bff;
        font-size: 1.4rem;
        font-weight: bold;
        margin-top: 10px;
    }
</style>

<script>
    // Auto-hide alert after 5 seconds
    setTimeout(function() {
        $('.alert').alert('close');
    }, 5000);
</script>
@endsection
