@extends('layouts.auth', ['title' => 'Register'])

@section('content')
<div class="col-xl-5">
    <div class="row">
        <div class="col-md-7 mx-auto">
            <div class="mb-0 border-0 p-md-5 p-lg-0 p-4">
                <div class="mb-4 p-0">
                    <a  class="auth-logo">
                    <img src="{{ asset('images/Jardti.png') }}" alt="Logo" width="140" height="60">
                    </a>
                </div>

                <div class="pt-0">
                    <!-- Registration Form -->
                    <form method="POST" action="{{ route('register') }}" class="my-4">
                        @csrf

                        <!-- Name Input -->
                        <div class="form-group mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input class="form-control @error('name') is-invalid @enderror" name="name" type="text" id="name" required placeholder="Enter your name" value="{{ old('name') }}">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Email Input -->
                        <div class="form-group mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input class="form-control @error('email') is-invalid @enderror" name="email" type="email" id="emailaddress" required placeholder="Enter your email" value="{{ old('email') }}">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Password Input -->
                        <div class="form-group mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input class="form-control @error('password') is-invalid @enderror" name="password" type="password" id="password" required placeholder="Enter your password">
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Confirm Password Input -->
                        <div class="form-group mb-3">
                            <label for="password_confirmation" class="form-label">Confirm Password</label>
                            <input class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" type="password" id="password_confirmation" required placeholder="Confirm your password">
                            @error('password_confirmation')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Terms and Conditions -->
                        <div class="form-group d-flex mb-3">
                            <div class="col-12">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="checkbox-terms" required>
                                    <label class="form-check-label" for="checkbox-terms">I agree to the <a href="#" class="text-primary fw-medium">Terms and Conditions</a></label>
                                </div>
                            </div>
                        </div>

                        <!-- Register Button -->
                        <div class="form-group mb-0 row">
                            <div class="col-12">
                                <div class="d-grid">
                                    <button class="btn btn-primary" type="submit">Register</button>
                                </div>
                            </div>
                        </div>
                    </form>

                    <!-- Social Media Registration -->
                    <div class="saprator my-4"><span>or sign up with</span></div>
                    <div class="row">
                        <div class="col-12">
                            <a class="btn text-dark border fw-normal d-flex align-items-center justify-content-center mb-3"> 
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 48 48" class="me-2">
                                    <path fill="#ffc107" d="M43.611 20.083..."></path>
                                </svg>
                                <span>Sign up with Google</span>
                            </a>
                        </div>
                        <div class="col-12">
                            <a class="btn btn-primary fw-normal d-flex align-items-center justify-content-center mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="me-2">
                                    <path fill="#ffffff" d="M9.198 21.5h4v-8.01h3.604l..."></path>
                                </svg>
                                <span>Sign up with Facebook</span>
                            </a>
                        </div>
                        <div class="col-12">
                            <a class="btn btn-dark fw-normal d-flex align-items-center justify-content-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="me-2">
                                    <path fill="#ffffff" d="M15.718 5.492c..."></path>
                                </svg>
                                <span>Sign up with Apple</span>
                            </a>
                        </div>
                    </div>

                    <!-- Already Have an Account -->
                    <div class="text-center text-muted mb-4">
                        <p class="mb-0">Already have an account? <a class='text-primary ms-2 fw-medium' href="{{ route('login') }}">Login here</a></p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="col-xl-7">
    <div class="account-page-bg p-md-5 p-4">
        <div class="text-center">
        <h3 class="text-dark mb-3 pera-title">Efficient, Innovative, and Sustainable Solutions for Agriculture</h3>
        <div class="auth-image">
        <img src="{{ asset('images/j.png') }}" alt="Logo" width="540" height="540">
        </div>
        </div>
    </div>
</div>
@endsection
