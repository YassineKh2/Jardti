<!DOCTYPE html>
<html lang="en">
<head>

    @include('layouts.partials/title-meta', ['title' => $title])
    @yield('css')
    @include('layouts.partials/head-css')

</head>

<body @yield('body')>

@yield('content')

<!-- App js-->
@vite(['resources/js/app.js'])
@include('layouts.partials/vendor')

</body>
</html>
