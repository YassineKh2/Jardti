@extends('layouts.vertical', ['title' => 'Create Event'])

@section('css')
    <!-- Including Flatpickr CSS -->
    <link href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" rel="stylesheet">
@endsection

@section('content')
<div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-semibold m-0">Create Event</h4>
    </div>

    <div class="text-end">
        <ol class="breadcrumb m-0 py-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Events</a></li>
            <li class="breadcrumb-item active">Create Event</li>
        </ol>
    </div>
</div>

<!-- Create Event Form -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Event Details</h5>
            </div>

            <div class="card-body">
                <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-xl-6">
                            <!-- Event Name -->
                            <div class="mb-3">
                                <label class="form-label" for="name">Event Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                            </div>

                            <!-- Description -->
                            <div class="mb-3">
                                <label class="form-label" for="description">Event Description</label>
                                <textarea class="form-control" id="description" name="description">{{ old('description') }}"></textarea>
                            </div>

                            <!-- Location -->
                            <div class="mb-3">
                                <label class="form-label" for="location">Location</label>
                                <select class="form-control" id="location" name="location">
                                    <option value="" disabled selected>Select Region</option>
                                    <option value="Carthage">Carthage</option>
                                    <option value="La Marsa">La Marsa</option>
                                    <option value="Le Kram">Le Kram</option>
                                    <option value="Gammarth">Gammarth</option>
                                    <option value="Sidi Bou Said">Sidi Bou Said</option>
                                    <option value="Lac 1">Lac 1</option>
                                    <option value="Lac 2">Lac 2</option>
                                    <option value="Bardo">Bardo</option>
                                    <option value="Manouba">Manouba</option>
                                    <option value="Ben Arous">Ben Arous</option>
                                    <option value="El Mourouj">El Mourouj</option>
                                    <option value="Menzah">Menzah</option>
                                    <option value="Ariana">Ariana</option>
                                    <option value="La Goulette">La Goulette</option>
                                    <!-- Add other regions as necessary -->
                                </select>
                            </div>

                            <!-- Category Selection -->
                            <div class="mb-3">
                                <label class="form-label" for="category_id">Event Category</label>
                                <select class="form-control" id="category_id" name="category_id" required>
                                    <option value="" disabled selected>Select Category</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Capacity -->
                            <div class="mb-3">
                                <label class="form-label" for="capacity">Capacity</label>
                                <input type="number" class="form-control" id="capacity" name="capacity" value="{{ old('capacity') }}">
                            </div>

                            <!-- Price -->
                            <div class="mb-3">
                                <label class="form-label" for="price">Price</label>
                                <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}">
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <!-- Start Date -->
                            <div class="mb-3">
                                <label class="form-label" for="start_date">Start Date</label>
                                <input type="text" class="form-control" id="start_date" name="start_date" placeholder="Select start date" value="{{ old('start_date') }}" required>
                            </div>

                            <!-- End Date -->
                            <div class="mb-3">
                                <label class="form-label" for="end_date">End Date</label>
                                <input type="text" class="form-control" id="end_date" name="end_date" placeholder="Select end date" value="{{ old('end_date') }}" required>
                            </div>

                            <!-- Image Upload -->
                            <div class="mb-3">
                                <label class="form-label" for="image">Event Image</label>
                                <input type="file" class="form-control" id="image" name="image">
                            </div>
                        </div>
                    </div>

                    <!-- Align button to the right -->
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Create Event</button>
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
