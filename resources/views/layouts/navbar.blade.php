<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.partials/title-meta', ['title' => $title])
    @yield('css')
    @include('layouts.partials/head-css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom CSS -->
    <style>
        /* Navbar Styling */
        .navbar {
            background-color: #28a745; /* Green background */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand img {
            padding: 5px;
        }

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
</head>

<body data-menu-color="light" data-sidebar="default" @yield('body')>

    <div id="app-layout">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <!-- Logo on the left -->
                <a class="navbar-brand ms-2 p-1" href="#">
                    <img src="images/Jardti.png" alt="Logo" width="140" height="60">
                </a>

                <!-- Navbar toggler button for mobile -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Collapsible navbar content -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <!-- Links in the center -->
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Tasks</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Forum</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Trading</a>
                        </li>
                    </ul>
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

            <!-- Footer -->
            @include("layouts.partials/footer")
        </div>

    </div>

    @vite(['resources/js/app.js'])
    @include("layouts.partials/vendor")

</body>
</html>
