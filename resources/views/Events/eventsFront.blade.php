@extends('layouts.navbar') <!-- Assuming you have a navbar layout -->

@section('content')

<!-- Full-width image section -->
<div class="image-fluid-container" style="padding: 0; margin: 0;">
    <img src="{{ asset('images/agri.png') }}" alt="Event Banner" class="img-fluid w-100" style="max-height: 500px; object-fit: cover;">
</div>

<!-- Other views -->
<div class="container mt-4">
    <!-- Include other views here -->
</div>

@endsection
