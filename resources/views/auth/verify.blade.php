@extends('layouts.app')

@section('content')
<div class="container mt-5 d-flex flex-column align-items-center justify-content-center verify" style="min-height: 80vh;">
    <div class="row justify-content-center w-100">
        <div class="col-md-10">
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
.verify {
    margin: 83px;
}
</style>


@endsection
