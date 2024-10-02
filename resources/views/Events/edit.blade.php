@extends('layouts.vertical', ['title' => 'Edit Event'])

@section('css')
    <!-- Including Flatpickr CSS -->
    <link href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" rel="stylesheet">
@endsection

@section('content')

<div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-semibold m-0">Edit Event</h4>
    </div>

    <div class="text-end">
        <ol class="breadcrumb m-0 py-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Events</a></li>
            <li class="breadcrumb-item active">Edit Event</li>
        </ol>
    </div>
</div>

<!-- Edit Event Form -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Event Details</h5>
            </div>

            <div class="card-body">
                <form action="{{ route('events.update', $event->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-xl-6">
                            <!-- Event Name -->
                            <div class="mb-3">
                                <label class="form-label" for="name">Event Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $event->name) }}" required>
                            </div>

                            <!-- Description -->
                            <div class="mb-3">
                                <label class="form-label" for="description">Event Description</label>
                                <textarea class="form-control" id="description" name="description">{{ old('description', $event->description) }}</textarea>
                            </div>

                            <!-- Location -->
                            <div class="mb-3">
                                <label class="form-label" for="location">Location</label>
                                <input type="text" class="form-control" id="location" name="location" value="{{ old('location', $event->location) }}">
                            </div>

                            <!-- Capacity -->
                            <div class="mb-3">
                                <label class="form-label" for="capacity">Capacity</label>
                                <input type="number" class="form-control" id="capacity" name="capacity" value="{{ old('capacity', $event->capacity) }}">
                            </div>

                            <!-- Price -->
                            <div class="mb-3">
                                <label class="form-label" for="price">Price</label>
                                <input type="text" class="form-control" id="price" name="price" value="{{ old('price', $event->price) }}">
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <!-- Start Date -->
                            <div class="mb-3">
                                <label class="form-label" for="start_date">Start Date</label>
                                <input type="text" class="form-control" id="start_date" name="start_date" value="{{ old('start_date', $event->start_date) }}" required>
                            </div>

                            <!-- End Date -->
                            <div class="mb-3">
                                <label class="form-label" for="end_date">End Date</label>
                                <input type="text" class="form-control" id="end_date" name="end_date" value="{{ old('end_date', $event->end_date) }}" required>
                            </div>

                            <!-- Image Upload -->
                            <div class="mb-3">
                                <label class="form-label" for="image">Event Image</label>
                                @if($event->image_path)
                                    <img src="{{ asset($event->image_path) }}" alt="{{ $event->name }}" class="img-thumbnail mb-2" style="width: 300px; height: auto;">
                                @endif
                                <input type="file" class="form-control" id="image" name="image">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Update Event</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
    <!-- Including Flatpickr JS -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <script>
        // Initialize Flatpickr for Start Date
        flatpickr("#start_date", {
            enableTime: true,
            dateFormat: "Y-m-d H:i", // Format to display date and time
            minDate: "today", // Minimum date is today to prevent past date selection
        });

        // Initialize Flatpickr for End Date
        flatpickr("#end_date", {
            enableTime: true,
            dateFormat: "Y-m-d H:i", // Format to display date and time
            minDate: "today", // Minimum date is today to prevent past date selection
        });
    </script>
@endsection
