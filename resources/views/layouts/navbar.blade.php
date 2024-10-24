<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.partials/title-meta', ['title' => $title])
    @yield('css')
    @include('layouts.partials/head-css')
    <link rel="stylesheet" href="../../scss/navbar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body data-menu-color="light" data-sidebar="default" @yield('body') >

<div class="custom-layout">
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-custom">
        <div class="container-fluid">
            <!-- Logo -->
            <a class="navbar-brand ms-2 p-1" href="#">
                <img src="{{ asset('images/Jardti.png') }}" alt="Logo" width="140" height="60">
            </a>
            <div class="d-flex flex-grow-1 justify-content-center gap-3">
                <!-- Centered navbar links -->
                <a href="/" class="nav-link">Home</a>
                <a class="nav-link">Shop</a>
                <a class="nav-link">Tasks</a>
                <a class="nav-link">Forum</a>
                <a class="nav-link">Trading</a>
                <a href="/courses" class="nav-link">Courses</a>
                <a class="nav-link" href="{{ route('eventsFront') }}">Events</a>
            </div>

            <!-- Conditionally show Get Started button or user's name -->
            @if(auth()->check())
                <span class="navbar-text me-3">
                    Welcome, {{ auth()->user()->name }}!
                </span>
                <a href="/logout" class="btn btn-outline-danger">Logout</a>
            @else
                <a href="/login" class="btn btn-success" type="button">Get Started</a>
            @endif
        </div>
    </nav>

    <div class="custom-content">
        <div class="container-fluid">
            @yield('content')
        </div>
    </div>

    @include("layouts.partials/footer")
</div>

@vite(['resources/js/app.js'])
@include("layouts.partials/vendor")
<script src="https://cdn.plyr.io/3.6.8/plyr.js"></script>

</body>
</html>
