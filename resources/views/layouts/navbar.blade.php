<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.partials/title-meta', ['title' => $title])
    @yield('css')
    @include('layouts.partials/head-css')
    <link rel="stylesheet" href="../../scss/navbar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" type="text/css" href="{{ asset('Shop/css/normalize.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Shop/icomoon/icomoon.css')}}">
    <link rel="stylesheet" type="text/css" media="all"
        href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('Shop/css/vendor.css')}}'">
    <link rel="stylesheet" type="text/css" href="{{ asset('Shop/style.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <!-- script
    ================================================== -->
    <script src="{{ asset('Shop/js/modernizr.js')}}"></script>

</head>

<body data-menu-color="light" data-sidebar="default" @yield('body')>

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
    <div id="app-layout">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <!-- Logo on the left -->
                <a class="navbar-brand ms-2 p-1" href="#">
                    <img src="images/Jardti.png" alt="Logo" width="140" height="60">
                </a>

                <!-- Navbar toggler button for mobile -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Collapsible navbar content -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="d-flex  ms-auto">
                        <!-- Text in the center -->
                        <a href="/" class="nav-link">Home</a>
                        <a href="/Client/ProductsList" class="nav-link">Our Products</a>
                        <a href="#" class="nav-link">Shop</a>
                        <a href="#" class="nav-link">Tasks</a>
                        <a href="#" class="nav-link">Forum</a>
                        <a href="#" class="nav-link">Trading</a>

                        <a href="/cart" class="shopping-cart text-black" style="font-size: medium; align-self: center;">
                            <i class="fas fa-shopping-cart"></i>
                            <span id="cart-count" class="cart-count" style=" 
    top: -5px; /* Adjust as necessary */
    right: -10px; /* Adjust as necessary */
    background: red; /* or any color you prefer */
    color: white;
    border-radius: 50%;
    padding: 2px 5px;
    font-size: 12px;">0</span> 
                        </a>

                    </div>
                    <!-- Button on the right -->
                    <button class="btn btn-success ms-lg-5 ms-3" type="button">Get Started</button>
                </div>
            </div>
        </nav>

    <div class="custom-content">
        <div class="container-fluid">
            @yield('content')
        </div>
    </div>


        <div class="content-page">
            <div class="content">
                <div class="container-xxl">
                    @yield('content')
                </div>
            </div>

    @include("layouts.partials/footer")
</div>
            @include("layouts.partials/footer")

        </div>

    </div>

@vite(['resources/js/app.js'])
@include("layouts.partials/vendor")
<script src="https://cdn.plyr.io/3.6.8/plyr.js"></script>
    @vite(['resources/js/app.js'])
    @include("layouts.partials/vendor")

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            // Function to fetch the cart count
            function fetchCartCount() {
                $.get('/api/cart-count', function(data) { // Adjust URL as necessary
                    $('#cart-count').text(data.count); // Update the cart count in the span
                });
            }

            // Call the function to fetch the cart count on page load
            fetchCartCount();

            // Optionally, call fetchCartCount() again after adding/removing products to update the count
        });
    </script>
</body>

</html>