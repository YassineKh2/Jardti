@extends('layouts.error', ['title' => 'Error 404'])

@section('content')
<div class="text-center">
    <div class="mb-5 text-center">
        <a href="{{ route('any', 'index') }}" class="auth-logo">
            <img src="/images/logo-dark.png" alt="logo-dark" class="mx-auto" height="28" />
        </a>
    </div>

    <div class="maintenance-img">
        <img src="/images/svg/404-error.svg" class="img-fluid" alt="coming-soon">
    </div>
    
    <div class="text-center">
        <h3 class="mt-5 fw-semibold text-black text-capitalize">Oops!, Page Not Found</h3>
        <p class="text-muted">This pages you are trying to access does not exits or has been moved. <br> Try going back to our homepage.</p>
    </div>

    <a class="btn btn-primary mt-3 me-1" href="{{ route('any', 'index') }}">Back to Home</a>
</div>
@endsection