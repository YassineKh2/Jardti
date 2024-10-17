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
                    <a href="#" class="nav-link">Shop</a>
                    <a href="#" class="nav-link">Tasks</a>
                    <a href="#" class="nav-link">Forum</a>
                    <a href="#" class="nav-link">Trading</a>
                </div>
                <!-- Button on the right -->
                <button class="btn btn-success ms-lg-5 ms-3" type="button">Get Started</button>
            </div>
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
