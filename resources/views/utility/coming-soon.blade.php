@extends('layouts.maintenance', ['title' => 'Coming Soon'])

@section('content')
<div class="row justify-content-center align-items-center">
    <div class="mb-4 text-center">
        <a href="{{ route('any', 'index') }}" class="auth-logo">
            <img src="/images/logo-dark.png" alt="logo-dark" class="mx-auto" height="28" />
        </a>
    </div>
</div>

<div class="row justify-content-center align-items-center">
    <div class="col-md-6">
        <div class="coming-soon-img text-center">
            <img src="/images/svg/coming-soon.svg" class="img-fluid" alt="coming-soon">
        </div>
    </div>

    <div class="col-md-6">
        <div class="text-center">

            <div class="">
                <h3 class="mt-4 fw-semibold text-black text-capitalize fs-26">Our website is developing. It will be very soon</h3>
                <p class="text-muted">Get ready, we are under process of creating something really cool, <br> Our website will be available soon.</p>
            </div>

            <div class="row justify-content-center mt-5 mb-5">
                <div class="col-md-8 text-center">
                    <div data-countdown="2026/12/31" class="counter-number"></div>
                </div> <!-- end col-->
            </div> <!-- end row-->

            <div class="row d-flex my-4 align-items-center justify-content-center">
                <div class="col-md-6">
                    <input type="email" class="form-control" placeholder="Email Address">
                </div>
                <div class="col-auto">
                    <div class="d-grid sm:mt-2">
                        <button class="btn btn-primary d-flex align-items-center">
                            <i class="mdi mdi-bell-ring-outline me-2"></i>Notify Me
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
    @vite(['resources/js/pages/coming-soon.init.js'])
@endsection