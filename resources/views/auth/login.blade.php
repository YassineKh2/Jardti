@extends('layouts.auth', ['title' => 'Login'])

@section('content')
<div class="col-xl-5">
    <div class="row">
        <div class="col-md-7 mx-auto">
            <div class="mb-0 border-0 p-md-5 p-lg-0 p-4">
                <div class="mb-4 p-0">
                    <a class="auth-logo">
                    <img src="{{ asset('images/Jardti.png') }}" alt="Logo" width="140" height="60">
                    </a>
                </div>

                <div class="pt-0">
                    <!-- Session Status -->
                    @if (session('status'))
                        <div class="mb-4 text-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login') }}" class="my-4">
                        @csrf
                        <!-- Error messages -->
                        @if (sizeof($errors) > 0)
                            @foreach ($errors->all() as $error)
                                <p class="text-danger mb-3">{{ $error }}</p>
                            @endforeach
                        @endif

                        <!-- Email Input -->
                        <div class="form-group mb-3">
                            <label for="emailaddress" class="form-label">Email address</label>
                            <input class="form-control @error('email') is-invalid @enderror" type="email" id="emailaddress" placeholder="Enter your email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username">
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <!-- Password Input -->
                        <div class="form-group mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input class="form-control @error('password') is-invalid @enderror" type="password" id="password" placeholder="Enter your password" name="password" required autocomplete="current-password">
                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <!-- Remember Me and Forgot Password -->
                        <div class="form-group d-flex mb-3">
                            <div class="col-sm-6">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="checkbox-signin" name="remember">
                                    <label class="form-check-label" for="checkbox-signin">Remember me</label>
                                </div>
                            </div>
                            <div class="col-sm-6 text-end">
                                @if (Route::has('password.request'))
                                    <a class="text-muted fs-14" href="{{ route('password.request') }}">Forgot password?</a>
                                @endif
                            </div>
                        </div>

                        <!-- Login Button -->
                        <div class="form-group mb-0 row">
                            <div class="col-12">
                                <div class="d-grid">
                                    <button class="btn btn-primary" type="submit">Log In</button>
                                </div>
                            </div>
                        </div>
                    </form>

                    <!-- Separator and Social Login -->
                    <div class="saprator my-4"><span>or sign in with</span></div>
                    <div class="row">
                        <div class="col-12">
                            <a class="btn text-dark border fw-normal d-flex align-items-center justify-content-center mb-3"> 
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 48 48" class="me-2">
                                    <!-- Google icon -->
                                    <path fill="#ffc107" d="..."/>
                                </svg>
                                <span>Sign in with Google</span>
                            </a>
                        </div>
                        <div class="col-12">
                            <a class="btn btn-primary fw-normal d-flex align-items-center justify-content-center mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="me-2">
                                    <!-- Facebook icon -->
                                    <path fill="#ffffff" d="..."/>
                                </svg>
                                <span>Sign in with Facebook</span>
                            </a>
                        </div>
                        <div class="col-12">
                            <a class="btn btn-dark fw-normal d-flex align-items-center justify-content-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="me-2">
                                    <!-- Apple icon -->
                                    <path fill="#ffffff" d="..."/>
                                </svg>
                                <span>Sign in with Apple</span>
                            </a>
                        </div>
                    </div>

                    <!-- Register Link -->
                    <div class="text-center text-muted mb-4">
                        <p class="mb-0">Don't have an account? <a class="text-primary ms-2 fw-medium" href="{{ route('register') }}">Sign up</a></p>
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
