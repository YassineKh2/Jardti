@extends('layouts.navbar')

@section('content')
<div class="container mt-1">
    <!-- Welcome Message -->
    <div class="row mb-0">
    <div class="col-12">
        <div class="alert alert-success text-center shadow-sm rounded-lg p-5" role="alert" 
            style="background: url('{{ asset('images/nature.jpg') }}') no-repeat center center; background-size: cover; color: white;">
            <h1 class="fw-bold"><i class="fas fa-graduation-cap"></i> Welcome to Jarditi Courses</h1>
            <h5>Explore the available categories and find the courses that interest you!</h5>
        </div>
    </div>
</div>


    <div class="row">
        <!-- Left Sidebar for Categories that spans the full height -->
        <div class="col-md-3 d-flex flex-column" style="min-height: 60vh;">
            <div class="p-3 bg-white shadow-sm rounded border h-100"> <!-- Full-height card -->
                <h5 class="mb-4 text-success fw-bold">Explore Different Categories</h5> <!-- Green heading for categories -->
                <div class="list-group list-group-flush">
                    @foreach($categories as $index => $category)
                        @php
                            // Make the first category selected by default if no category is selected
                            $isActive = (isset($selectedCategory) && $selectedCategory->id == $category->id) || (!isset($selectedCategory) && $index === 0);
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
                    <input class="form-control me-2 shadow-sm rounded-pill" type="search" name="query" placeholder="Search courses..." aria-label="Search"> <!-- Rounded search input -->
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
                                <h5 class="card-title fw-bold text-dark">Course: {{ $course->title }}</h5>
                                <p class="card-text">Description: {{ Str::limit($course->description, 100) }}</p>
                            </div>
                            <div class="card-footer bg-transparent border-0">
                                <a href="{{ Storage::url($course->pdf) }}" target="_blank" class="btn btn-success btn-sm w-100">
                                    <i class="fas fa-file-pdf"></i> Download PDF
                                </a>
                                <br><br>
                                @if($course->audio)
                                    <audio controls class="mt-2 w-100">
                                        <source src="{{ asset($course->audio) }}" type="audio/mpeg">
                                        Your browser does not support the audio element.
                                    </audio>
                                    <p class="card-text">Audiobook Version</p>
                                @else
                                    <p class="text-muted mt-2">No audio available</p>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination Links -->
          
<div class="d-flex  justify-content-center mt-5">
    {{ $courses->links('pagination::bootstrap-5') }}
</div>

            @else
                <div class="alert alert-info text-center mt-4" role="alert">
                    No courses are available for this category yet, check on us Soon!.
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

    /* Custom CSS for pagination */
    ul.pagination {
        justify-content: center; /* Center the pagination */
    }
/* Style for active pagination link */
ul.pagination li.active span {
    background-color: #28a745; /* Green background */
    border-color: #28a745; /* Green border */
    color: white; /* White text color */
    font-size: 1.1rem; /* Slightly bigger font size */
    padding: 0.5rem 0.75rem; /* Adjust padding for bigger appearance */
    border-radius: 5px; /* Smooth rounded corners */
}

/* Style for other pagination links */
ul.pagination li a {
    font-size: 1rem; /* Slightly larger font size */
    padding: 0.4rem 0.65rem; /* Adjust padding */
    color: #28a745; /* Green text color for links */
}

/* Hover effect for non-active pagination links */
ul.pagination li a:hover {
    background-color: rgba(40, 167, 69, 0.1); /* Light green hover background */
    color: #28a745; /* Keep the text green on hover */
}

</style>
