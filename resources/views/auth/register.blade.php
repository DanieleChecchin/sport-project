@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg">
                <div class="card-header text-center font-weight-bold py-3">{{ __('Registrati') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- Name Field -->
                        <div class="mb-4">
                            <label for="name" class="col-form-label text-md-end">{{ __('Nome') }}</label>

                            <div>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Email Field -->
                        <div class="mb-4">
                            <label for="email" class="col-form-label text-md-end">{{ __('Indirizzo Email') }}</label>

                            <div>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Password Field -->
                        <div class="mb-4">
                            <label for="password" class="col-form-label text-md-end">{{ __('Password') }}</label>

                            <div>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Password Confirmation Field -->
                        <div class="mb-4">
                            <label for="password-confirm" class="col-form-label text-md-end">{{ __('Conferma Password') }}</label>

                            <div>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="mb-4">
                            <div>
                                <button type="submit" class="btn btn-primary w-100">
                                    {{ __('Registrati') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .card {
        border-radius: 15px;
    }
    .card-header {
        background-color: #28a745;
        color: white;
        font-size: 1.25rem;
        border-radius: 15px 15px 0 0;
        padding: 15px;
    }
    .form-control {
        border-radius: 10px;
        padding: 10px;
    }
    .btn-primary {
        background-color: #28a745;
        border-color: #28a745;
        padding: 12px;
        font-size: 1rem;
        border-radius: 10px;
    }
    .btn-primary:hover {
        background-color: #218838;
        border-color: #218838;
    }
    .invalid-feedback {
        font-size: 0.875rem;
    }
</style>

<script>
    // Aggiungi un effetto visivo per il focus sugli input
    document.querySelectorAll('.form-control').forEach(input => {
        input.addEventListener('focus', function () {
            this.classList.add('shadow-outline');
        });
        input.addEventListener('blur', function () {
            this.classList.remove('shadow-outline');
        });
    });
</script>

@endsection
