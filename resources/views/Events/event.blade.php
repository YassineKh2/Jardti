@extends('layouts.vertical', ['title' => 'Events'])

@section('css')
    @vite(['node_modules/glightbox/dist/css/glightbox.min.css'])
    <style>
        .event-card {
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        /* Ensures that the image fills the entire available space */
        .gallery-image {
            height: 250px; /* You can adjust the height if needed */
            width: 100%;
            overflow: hidden; /* Ensure content outside the bounds doesn't show */
        }

        .gallery-image img {
            height: 100%;
            width: 100%;
            object-fit: cover; /* Ensures image covers the entire space */
            transition: transform 0.3s ease; /* Add smooth transition for hover effect */
        }

        .gallery-image img:hover {
            transform: scale(1.05); /* Zoom in on hover */
        }

        .event-title {
            color: #0056b3;
            font-weight: bold;
            font-size: 2.2rem;
        }

        .event-icon {
            color: #6c757d;
            margin-right: 5px;
        }

        .event-location, .event-date-inline {
            display: inline-flex;
            align-items: center;
            margin-right: 15px;
        }

        .event-date-inline span {
            color: red;
            margin-left: 5px;
        }

        .card-body {
            flex-grow: 1;
        }

        .icon-section {
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }

        .event-dates {
            display: inline-flex;
            align-items: center;
            flex-grow: 1;
        }

        .event-actions {
            display: inline-flex;
            align-items: center;
        }

        .event-actions i {
            margin-left: 10px;
        }

        .delete-button {
            color: red;
            cursor: pointer;
        }

        .delete-button:hover {
            color: darkred;
        }
    </style>
@endsection

@section('content')

<div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-semibold m-0">Events</h4>
    </div>

    <div class="text-end">
        <ol class="breadcrumb m-0 py-0 d-inline-block">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
            <li class="breadcrumb-item active">Events</li>
        </ol>
    </div>
</div>

<!-- Create Event Button Below Breadcrumb -->
<div class="d-flex justify-content-end mb-3">
<a href="{{ route('events.create') }}" class="btn btn-primary ms-2">Create Event</a>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="row">
            @foreach($events as $event)
            <div class="col-lg-4 col-md-4 mb-4">
                <div class="card event-card gallery-container gallery-grid position-relative d-block overflow-hidden rounded">
                    <div class="gallery-image">
                        <a href="{{ $event->image_path ? asset($event->image_path) : asset('images/default-event.png') }}" class="glightbox image-popup d-inline-block" title="{{ $event->name }}">
                            <img src="{{ $event->image_path ? asset($event->image_path) : asset('images/default-event.png') }}" alt="{{ $event->name }}" class="img-fluid">
                        </a>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <!-- Larger event name with better clarity -->
                        <h5 class="card-title" style="color: #0056b3; font-weight: bold; font-size: 1.5rem;">{{ $event->name }}</h5>
                        <p class="card-text">{{ Str::limit($event->description, 100) }}</p>

                        <!-- Location with icon -->
                        <p class="event-location">
                            <i data-feather="map-pin" class="event-icon"></i>
                            <strong>Location:</strong> {{ $event->location }}
                        </p>

                        <!-- Start Date, End Date and Action icons in a single row -->
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="event-dates">
                                <div class="event-date-inline">
                                    <i data-feather="calendar" class="event-icon"></i>
                                    <span>{{ \Carbon\Carbon::parse($event->start_date)->format('Y-m-d') }}</span>
                                </div>
                                <div class="event-date-inline">
                                    <i data-feather="calendar" class="event-icon"></i>
                                    <span>{{ \Carbon\Carbon::parse($event->end_date)->format('Y-m-d') }}</span>
                                </div>
                            </div>

                            <!-- Action icons for edit and delete -->
                            <div class="event-actions">
                                <a href="{{ route('events.edit', $event->id) }}" title="Edit">
                                    <i data-feather="edit" class="event-icon" style="color: gray; cursor: pointer;"></i>
                                </a>
                                <form id="delete-form-{{ $event->id }}" action="{{ route('events.destroy', $event->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="delete-button" title="Delete" onclick="confirmDelete({{ $event->id }})" style="border: none; background: none;">
                                        <i data-feather="trash" class="event-icon"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection

@section('script')
    @vite(['resources/js/pages/glightbox.init.js'])
    <script src="{{ asset('node_modules/glightbox/dist/js/glightbox.min.js') }}"></script>
    <!-- SweetAlert CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // Initialize Feather icons and Glightbox
        feather.replace();
        const lightbox = GLightbox({
            selector: 'glightbox',
            zoomable: true,
        });

        // SweetAlert confirmation before deleting
        function confirmDelete(eventId) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + eventId).submit();
                }
            });
        }
    </script>
@endsection
