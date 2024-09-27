<!DOCTYPE html>
<html lang="en">
<head>

    @include('layouts.partials/title-meta', ['title' => $title])
    @yield('css')
    @include('layouts.partials/head-css')

</head>

<body class="bg-white">

    <!-- Begin page -->
    <div class="maintenance-pages">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    @yield('content')
                </div>
            </div>

        </div>
    </div>

<!-- App js-->
@vite(['resources/js/app.js'])
@include('layouts.partials/vendor')

</body>
</html>