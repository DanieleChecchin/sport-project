@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg rounded-lg">
                <div class="card-header text-center py-3 bg-success text-white">
                    {{ __('Verify Your Email Address') }}
                </div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success mb-4" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    <p>{{ __('Before proceeding, please check your email for a verification link.') }}</p>
                    <p>{{ __('If you did not receive the email') }}, 
                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit" class="btn btn-link p-0 m-0 align-baseline text-decoration-none">{{ __('click here to request another') }}</button>.
                        </form>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Card Styling */
    .card {
        border-radius: 15px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    /* Card Header */
    .card-header {
        background-color: #28a745;
        color: white;
        font-size: 1.5rem;
        font-weight: 600;
        border-radius: 15px 15px 0 0;
    }

    /* Button Styling */
    .btn-link {
        font-size: 1rem;
        font-weight: 500;
        color: #007bff;
        transition: color 0.3s ease;
    }
    .btn-link:hover {
        color: #0056b3;
        text-decoration: underline;
    }

    /* Alert Styling */
    .alert-success {
        background-color: #d4edda;
        border-color: #c3e6cb;
        color: #155724;
    }

    /* Responsive Design */
    @media (max-width: 767px) {
        .card-header {
            font-size: 1.25rem;
        }
        .card-body {
            padding: 1.5rem;
        }
    }

</style>

<script>
    // Add a smooth scroll effect to anchor links within the page
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

    // Show a tooltip when hovering over the 'click here to request another' button
    document.querySelector('.btn-link').addEventListener('mouseover', function () {
        this.setAttribute('title', 'Request another verification link');
    });
</script>

@endsection
