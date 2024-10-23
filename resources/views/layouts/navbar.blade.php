<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.partials/title-meta', ['title' => $title ?? 'Default Title'])
    @yield('css')
    @include('layouts.partials/head-css')

    <style>
        .custom-layout {
            width: 100%;
            margin: 0;
            padding: 0;
            overflow-x: hidden; 
        }

        .custom-content {
            padding-left: 0 !important;
            padding-right: 0 !important;
            margin-left: 0 !important;
            margin-right: 0 !important;
            width: 100%;
        }

        .navbar-custom {
            margin-bottom: 20px;
            position: -webkit-sticky; /* For Safari */
            position: sticky;
            top: 0;
            z-index: 1000; /* Ensure it stays on top of content */
            background-color: #f8f9fa; /* Ensure the background stays visible when sticky */
        }

        .container-fluid {
            padding-left: 0 !important;
            padding-right: 0 !important;
            margin-left: 0 !important;
            margin-right: 0 !important;
            width: 100%;
        }
    </style>
</head>

<body data-menu-color="light" data-sidebar="default" @yield('body')>

<div class="custom-layout">
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-custom">
        <div class="container-fluid">
            <!-- Logo -->
            <a class="navbar-brand ms-2 p-1" href="#">
                <img src="{{ asset('images/Jardti.png') }}" alt="Logo" width="140" height="60">
            </a>
            <div class="d-flex gap-3">
                <!-- Centered navbar links -->
                <a href="/" class="nav-link">Home</a>
                <a class="nav-link">Shop</a>
                <a class="nav-link">Tasks</a>
                <a class="nav-link">Forum</a>
                <a class="nav-link">Trading</a>
                <a class="nav-link" href="{{ route('eventsFront') }}">Events</a>
            </div>
            <!-- Button -->
            <button class="btn btn-success" type="button">Get Started</button>
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

</body>
</html>
