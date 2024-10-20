@extends('layouts.navbar')

@section('content')
<div class="container mt-1">
    <!-- Welcome Message -->
    <div class="row mb-0">
        <div class="col-12">
            <div class="alert alert-success text-center shadow-sm rounded-lg p-4" role="alert" style="background: linear-gradient(45deg, #28a745, #34d058); color: white;">
                <h3 class="fw-bold"><i class="fas fa-graduation-cap"></i> Welcome to Jarditi Courses</h3>
                <p>Explore the available categories and find the courses that interest you!</p>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Left Sidebar for Categories that spans the full height -->
        <div class="col-md-3 d-flex flex-column" style="min-height: 100vh;">
            <div class="p-3 bg-white shadow-sm rounded border h-100"> <!-- Full-height card -->
                <h5 class="mb-4 text-success fw-bold">Explore Different Categories</h5> <!-- Green heading for categories -->
                <div class="list-group list-group-flush">
                    @foreach($categories as $category)
                        @php
                            // Make "Plants" selected by default if no category is selected
                            $isActive = (isset($selectedCategory) && $selectedCategory->id == $category->id) || (!isset($selectedCategory) && $category->name === 'Plants');
                        @endphp
                        <a href="{{ route('courses.byCategory', $category->id) }}"
                           class="list-group-item list-group-item-action {{ $isActive ? 'active bg-success text-white' : '' }}"
                           style="transition: all 0.3s ease;">
                            <span class="d-flex align-items-center">
                                <i class="fas fa-book me-2"></i> <!-- Modern icon for the category -->
                                {{ $category->name }}
                            </span>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Right Content for Courses positioned on top of the categories -->
        <div class="col-md-9">
            <div class="d-flex justify-content-between align-items-center mb-1">
                <h5 class="text-success fw-bold">Courses</h5> <!-- Green heading for courses -->
                <!-- Updated Search Bar for Courses -->
                <form class="d-flex" method="GET" action="{{ route('courses.search') }}">
                    <input class="form-control me-5 shadow-sm rounded-pill" type="search" name="query" placeholder="Search courses..." aria-label="Search"> <!-- Rounded search input -->
                    <button class="btn btn-success shadow-sm rounded-pill" type="submit">Search</button> <!-- Green, rounded search button -->
                </form>
            </div>

            <!-- Courses Grid -->
            @if(isset($courses) && $courses->count() > 0)
                <div class="row row-cols-0 row-cols-md-3 g-4">
                    @foreach($courses as $course)
                        <div class="col">
                            <div class="card h-100 shadow border-0 hover-shadow"> <!-- Hover effect on cards -->
                                <div class="card-body d-flex flex-column justify-content-between">
                                    <h5 class="card-title fw-bold text-dark">{{ $course->title }}</h5>
                                    <p class="card-text text-muted">{{ Str::limit($course->description, 100) }}</p>
                                </div>
                                <div class="card-footer bg-transparent border-0">
                                    <a href="{{ Storage::url($course->pdf) }}" target="_blank" class="btn btn-success btn-sm w-100">Download PDF</a> <!-- Green button -->
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="alert alert-info text-center mt-4" role="alert">
                    No courses available for this category.
                </div>
            @endif
        </div>
    </div>
</div>
@endsection

<!-- Additional CSS -->
<style>
    .hover-shadow:hover {
        box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1); /* Subtle hover shadow effect */
        transform: translateY(-5px); /* Slight lift effect on hover */
        transition: all 0.3s ease;
    }

    .list-group-item {
        padding: 15px;
        transition: transform 0.3s ease-in-out, background-color 0.3s ease;
    }

    .list-group-item:hover {
        transform: translateX(10px); /* Small slide effect on hover */
        background-color: rgba(40, 167, 69, 0.1); /* Slight green background */
    }

    .list-group-item.active {
        background-color: #28a745; /* Active green background for selected category */
        border-color: #28a745;
    }

    .card {
        border-radius: 10px; /* Smooth corners */
        transition: box-shadow 0.3s ease, transform 0.3s ease;
    }

    .card:hover {
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1); /* Elevated shadow on hover */
        transform: translateY(-10px); /* Lift the card */
    }

    .form-control, .btn {
        transition: all 0.3s ease; /* Smooth transitions for form controls */
    }

    .form-control:focus, .btn:focus {
        box-shadow: 0px 0px 10px rgba(40, 167, 69, 0.5); /* Glow effect on focus */
    }

    .rounded-pill {
        border-radius: 50px; /* Makes the search bar and buttons fully rounded */
    }
</style>