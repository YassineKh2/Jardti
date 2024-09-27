@extends('layouts.error', ['title' => 'Offline Page'])

@section('content')    
<div class="text-center">
    <div class="mb-4 text-center">
        <a href="{{ route('any', 'index') }}" class="auth-logo">
            <img src="/images/logo-dark.png" alt="logo-dark" class="mx-auto" height="28"/>
        </a>
    </div>

    <div class="coming-soon-img">
        <img src="/images/svg/offline.svg" class="img-fluid" alt="coming-soon">
    </div>
    
    <div class="text-center">
        <h3 class="mt-4 fw-semibold text-black text-capitalize">You are offline</h3>
        <p class="text-muted">Internet connection is lost. Try checking the <br> signal and refresh the screen later.</p>
    </div>

    <a class="btn btn-primary mt-3 me-1" href="{{ route('any', 'index') }}">Back to Home</a>

</div>
@endsection


