@extends('layouts.auth', ['title' => 'Login'])

@section('content')
<div class="col-xl-5">
    <div class="row">
        <div class="col-md-7 mx-auto">
            <div class="mb-0 border-0 p-md-5 p-lg-0 p-4">
                <div class="mb-4 p-0">
                    <a href="{{ route('any', 'index') }}" class="auth-logo">
                        <img src="/images/logo-dark.png" alt="logo-dark" class="mx-auto" height="28" />
                    </a>
                </div>

                <div class="pt-0">
                    <form method="POST" action="{{ route('login') }}" class="my-4">
                        @csrf
                        @if (sizeof($errors) > 0)
                            @foreach ($errors->all() as $error)
                                <p class="text-danger mb-3">{{ $error }}</p>
                            @endforeach
                        @endif

                        <div class="form-group mb-3">
                            <label for="emailaddress" class="form-label">Email address</label>
                            <input class="form-control" type="email" id="emailaddress" required="" placeholder="Enter your email" name="email" value="demo@user.com">
                        </div>

                        <div class="form-group mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input class="form-control" type="password" required="" id="password" placeholder="Enter your password" name="password" value="password">
                        </div>

                        <div class="form-group d-flex mb-3">
                            <div class="col-sm-6">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="checkbox-signin" checked>
                                    <label class="form-check-label" for="checkbox-signin">Remember me</label>
                                </div>
                            </div>
                            <div class="col-sm-6 text-end">
                                <a class='text-muted fs-14' href='{{ route('second', [ 'auth' , 'recoverpw']) }}'>Forgot password?</a>                             
                            </div>
                        </div>

                        <div class="form-group mb-0 row">
                            <div class="col-12">
                                <div class="d-grid">
                                    <button class="btn btn-primary" type="submit"> Log In</button>
                                </div>
                            </div>
                        </div>
                    </form>

                    <div class="saprator my-4"><span>or sign in with</span></div>
        
                    <div class="text-center text-muted mb-4">
                        <p class="mb-0">Don't have an account ?<a class='text-primary ms-2 fw-medium' href='{{ route('second', [ 'auth' , 'register']) }}'>Sing up</a></p>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <a class="btn text-dark border fw-normal d-flex align-items-center justify-content-center mb-3"> 
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 48 48" class="me-2">
                                    <path fill="#ffc107" d="M43.611 20.083H42V20H24v8h11.303c-1.649 4.657-6.08 8-11.303 8c-6.627 0-12-5.373-12-12s5.373-12 12-12c3.059 0 5.842 1.154 7.961 3.039l5.657-5.657C34.046 6.053 29.268 4 24 4C12.955 4 4 12.955 4 24s8.955 20 20 20s20-8.955 20-20c0-1.341-.138-2.65-.389-3.917"/><path fill="#ff3d00" d="m6.306 14.691l6.571 4.819C14.655 15.108 18.961 12 24 12c3.059 0 5.842 1.154 7.961 3.039l5.657-5.657C34.046 6.053 29.268 4 24 4C16.318 4 9.656 8.337 6.306 14.691"/><path fill="#4caf50" d="M24 44c5.166 0 9.86-1.977 13.409-5.192l-6.19-5.238A11.91 11.91 0 0 1 24 36c-5.202 0-9.619-3.317-11.283-7.946l-6.522 5.025C9.505 39.556 16.227 44 24 44"/>
                                    <path fill="#1976d2" d="M43.611 20.083H42V20H24v8h11.303a12.04 12.04 0 0 1-4.087 5.571l.003-.002l6.19 5.238C36.971 39.205 44 34 44 24c0-1.341-.138-2.65-.389-3.917"/>
                                </svg>
                                <span>Sign in with Google</span>
                            </a>
                        </div>

                        <div class="col-12">
                            <a class="btn btn-primary fw-normal d-flex align-items-center justify-content-center mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="me-2">
                                    <path fill="#ffffff" d="M9.198 21.5h4v-8.01h3.604l.396-3.98h-4V7.5a1 1 0 0 1 1-1h3v-4h-3a5 5 0 0 0-5 5v2.01h-2l-.396 3.98h2.396z"/>
                                </svg>
                                <span>Sign in with Facebook</span>
                            </a>
                        </div>

                        <div class="col-12">
                            <a class="btn btn-dark fw-normal d-flex align-items-center justify-content-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="me-2">
                                    <path fill="#ffffff" d="M15.718 5.492c-.575 0-1.109.088-1.603.264c-.494.176-.944.35-1.35.523c-.406.172-.758.258-1.057.258c-.314 0-.662-.082-1.045-.247a23.818 23.818 0 0 0-1.235-.488A4.07 4.07 0 0 0 8.02 5.56c-.942 0-1.85.256-2.722.77c-.874.512-1.59 1.27-2.149 2.274c-.559 1.003-.838 2.24-.838 3.711c0 .919.107 1.838.321 2.757c.215.92.502 1.789.862 2.608c.36.82.758 1.543 1.195 2.172a19.16 19.16 0 0 0 1.66 2.033c.54.567 1.166.85 1.878.85c.467 0 .873-.076 1.218-.23c.345-.153.71-.308 1.097-.465c.387-.157.872-.235 1.454-.235c.444 0 .815.046 1.114.137c.299.092.572.198.821.316c.25.12.512.224.787.316c.276.092.61.138 1 .138c.513 0 .974-.136 1.384-.408c.41-.271.79-.622 1.138-1.05c.348-.43.687-.878 1.017-1.345c.36-.529.652-1.036.878-1.522a13.289 13.289 0 0 0 .672-1.706c-.022-.008-.19-.094-.5-.259c-.31-.164-.662-.427-1.056-.787c-.395-.36-.74-.83-1.034-1.413c-.295-.582-.443-1.294-.443-2.137c0-.735.117-1.369.35-1.901c.234-.533.508-.973.822-1.321c.314-.349.596-.615.845-.799c.249-.184.392-.287.43-.31c-.383-.552-.8-.98-1.252-1.287a5.16 5.16 0 0 0-1.332-.666a5.912 5.912 0 0 0-1.167-.259a8.324 8.324 0 0 0-.752-.051m-.804-1.862c.352-.42.64-.91.861-1.464a4.583 4.583 0 0 0 .333-1.718c0-.168-.011-.318-.034-.448c-.574.023-1.174.195-1.798.517a4.952 4.952 0 0 0-1.545 1.206a5.46 5.46 0 0 0-.873 1.379a4.04 4.04 0 0 0-.38 1.7a1.709 1.709 0 0 0 .046.414c.1.023.204.034.31.034c.514 0 1.06-.153 1.638-.46a4.654 4.654 0 0 0 1.442-1.16"/>
                                </svg>
                                <span>Sign in with Apple</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-xl-7">
    <div class="account-page-bg p-md-5 p-4">
        <div class="text-center">
            <h3 class="text-dark mb-3 pera-title">Quick, Effective, and Productive With Tapeli Admin Dashboard</h3>
            <div class="auth-image">
                <img src="/images/authentication.svg" class="mx-auto img-fluid"  alt="images">
            </div>
        </div>
    </div>
</div>
@endsection