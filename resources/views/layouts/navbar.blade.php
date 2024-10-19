<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.partials/title-meta', ['title' => $title])
    @yield('css')
    @include('layouts.partials/head-css')
    <link rel="stylesheet" href="../../scss/navbar.css">
</head>

<body data-menu-color="light" data-sidebar="default" @yield('body') >

<div id="app-layout">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <!-- Logo on the left -->
            <a class="navbar-brand ms-2 p-1" href="#">
            <img src="{{ asset('images/Jardti.png') }}" alt="Logo" width="140" height="60">
            </a>
            <div class="d-flex gap-3">
                <!-- Text in the center -->
                <a href="/" class="nav-link">Home</a>
                <a class="nav-link">Shop</a>
                <a class="nav-link">Tasks</a>
                <a class="nav-link">Forum</a>
                <a class="nav-link">Trading</a>
                <a class="nav-link" href="{{ route('eventsFront') }}">Events</a>
                </div>
            <!-- Button on the right -->
            <button class="btn btn-success" type="button">Get Started</button>
        </div>
    </nav>

    <div class="content-page">
        <div class="content">
            <div class="container-xxl">
                @yield('content')
            </div>
        </div>

        @include("layouts.partials/footer")

    </div>

</div>

@vite(['resources/js/app.js'])
@include("layouts.partials/vendor")

</body>
</html>
