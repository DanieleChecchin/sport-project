@extends('layouts.app')

@section('content')
<div class="container py-5 mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg border-0 rounded-lg">
                <div class="card-header text-center bg-primary text-white font-weight-bold rounded-top py-3">
                    {{ __('Accesso') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group mb-4">
                            <label for="email" class="col-form-label">{{ __('Indirizzo Email') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-4">
                            <label for="password" class="col-form-label">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-4 d-flex justify-content-between align-items-center">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    {{ __('Ricordami') }}
                                </label>
                            </div>
                            @if (Route::has('password.request'))
                                <a class="btn btn-link p-0" href="{{ route('password.request') }}">
                                    {{ __('Hai dimenticato la password?') }}
                                </a>
                            @endif
                        </div>

                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-primary w-100 py-2">
                                {{ __('Accedi') }}
                            </button>
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
        background-color: #007bff;
        color: white;
        font-size: 1.25rem;
        border-radius: 15px 15px 0 0;
        padding: 1.25rem;
    }
    .form-control {
        border-radius: 10px;
        box-shadow: none;
        transition: border-color 0.3s ease;
    }
    .form-control:focus {
        border-color: #0056b3;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    }
    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        padding: 0.75rem;
    }
    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }
    .form-check-label {
        font-size: 0.9rem;
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
