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
                                <textarea class="form-control" id="description" name="description">{{ old('description', $event->description) }}"></textarea>
                            </div>

                            <!-- Location (Dropdown with regions of Tunis) -->
                            <div class="mb-3">
                                <label class="form-label" for="location">Location</label>
                                <select class="form-control" id="location" name="location" required>
                                    <option value="" disabled>Select Region</option>
                                    <option value="Carthage" {{ old('location', $event->location) == 'Carthage' ? 'selected' : '' }}>Carthage</option>
                                    <option value="La Marsa" {{ old('location', $event->location) == 'La Marsa' ? 'selected' : '' }}>La Marsa</option>
                                    <option value="Le Kram" {{ old('location', $event->location) == 'Le Kram' ? 'selected' : '' }}>Le Kram</option>
                                    <option value="Gammarth" {{ old('location', $event->location) == 'Gammarth' ? 'selected' : '' }}>Gammarth</option>
                                    <option value="Sidi Bou Said" {{ old('location', $event->location) == 'Sidi Bou Said' ? 'selected' : '' }}>Sidi Bou Said</option>
                                    <option value="Lac 1" {{ old('location', $event->location) == 'Lac 1' ? 'selected' : '' }}>Lac 1</option>
                                    <option value="Lac 2" {{ old('location', $event->location) == 'Lac 2' ? 'selected' : '' }}>Lac 2</option>
                                    <option value="Bardo" {{ old('location', $event->location) == 'Bardo' ? 'selected' : '' }}>Bardo</option>
                                    <option value="Manouba" {{ old('location', $event->location) == 'Manouba' ? 'selected' : '' }}>Manouba</option>
                                    <option value="Ben Arous" {{ old('location', $event->location) == 'Ben Arous' ? 'selected' : '' }}>Ben Arous</option>
                                    <option value="El Mourouj" {{ old('location', $event->location) == 'El Mourouj' ? 'selected' : '' }}>El Mourouj</option>
                                    <option value="Menzah" {{ old('location', $event->location) == 'Menzah' ? 'selected' : '' }}>Menzah</option>
                                    <option value="Ariana" {{ old('location', $event->location) == 'Ariana' ? 'selected' : '' }}>Ariana</option>
                                    <option value="La Goulette" {{ old('location', $event->location) == 'La Goulette' ? 'selected' : '' }}>La Goulette</option>
                                </select>
                            </div>

                            <!-- Category Selection -->
                            <div class="mb-3">
                                <label class="form-label" for="category_id">Event Category</label>
                                <select class="form-control" id="category_id" name="category_id" required>
                                    <option value="" disabled>Select Category</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" {{ old('category_id', $event->category_id) == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
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

                    <!-- Align the button to the right -->
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Update Event</button>
                    </div>
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
