<!DOCTYPE html>
<html lang="en">
<head>

    @include('layouts.partials/title-meta', ['title' => $title])
    @yield('css')
    @include('layouts.partials/head-css')

</head>

<body class="bg-white">

<div class="account-page">
    <div class="container-fluid p-0">
        <div class="row align-items-center g-0">
            @yield('content')
        </div>
    </div>
</div>
<!-- END wrapper -->

<!-- App js-->
@vite(['resources/js/app.js'])
@include('layouts.partials/vendor')

</body>
</html>
