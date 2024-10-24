<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.partials/title-meta', ['title' => $title])
    @yield('css')
    @include('layouts.partials/head-css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>



</head>

<style>
    /* Navbar Links */
    .nav-link {
        margin-right: 15px;
        font-weight: 500;
        font-size: 1.1rem;
        color: white; /* White text for visibility */
        transition: color 0.3s ease;
    }
    .nav-link:hover {
        color: #d4d4d4; /* Lighter color on hover */
    }
    /* Navbar Button */
    .btn-success {
        background-color: #fff; /* White button */
        color: #28a745; /* Green text */
        border: none;
        padding: 10px 20px;
        font-size: 1.1rem;
        transition: background-color 0.3s ease;
    }
    .btn-success:hover {
        background-color: #d4d4d4; /* Light grey on hover */
        color: #28a745;
    }
    /* Footer Styling */
    footer {
        background-color: #343a40; /* Dark grey footer */
        color: #fff; /* White text */
        padding: 20px;
        text-align: center;
    }
    .card {
        border-radius: 15px;
        overflow: hidden;
        transition: transform 0.2s;
    }
    .card:hover {
        transform: scale(1.02);
    }
    .btn {
        border-radius: 25px;
        padding: 10px 20px;
    }
    .filter-container {
        background-color: #f8f9fa; /* Light background */
        border: 1px solid #e9ecef; /* Subtle border */
        border-radius: 10px;
    }
    .modal {
        transition: transform 0.3s ease-out;
    }
    .task-card {
        background-color: #ffffff; /* Card background */
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
        padding: 15px;
    }
    .status-badge {
        background-color: #e0e0e0; /* Subtle badge background */
        padding: 5px 10px;
        border-radius: 20px;
    }
    body {
        background-color: #f9f9f9; /* Soft background color */
    }
    .card {
        border-radius: 15px; /* Rounded corners */
        transition: transform 0.2s; /* Smooth scaling on hover */
    }
    .card:hover {
        transform: scale(1.02); /* Slightly enlarge on hover */
    }
    .btn {
        border-radius: 50px; /* Rounded buttons */
    }
    .offcanvas {
        border-radius: 15px; /* Rounded offcanvas edges */
    }
    img.plant-image {
        border-radius: 15px 15px 0 0; /* Rounded top corners */
    }
</style>

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
                <a href="/" class="nav-link text-black">Home</a>
                <a class="nav-link  text-black">Shop</a>
                <a href="/tasks" class="nav-link text-black">Tasks</a>
                <a class="nav-link text-black">Forum</a>
                <a class="nav-link text-black">Trading</a>
                <a href="/courses" class="nav-link text-black">Courses</a>
                <a class="nav-link text-black" href="{{ route('eventsFront') }}">Events</a>
                <a class="nav-link text-black" href="/mypoints">My points</a>
            </div>

            <!-- Conditionally show Get Started button or user's name -->
            @if(auth()->check())
                <span class="navbar-text me-3">
                    Welcome, {{ auth()->user()->name }}!
                </span>
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
