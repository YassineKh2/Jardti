@extends('layouts.vertical', ['title' => 'Edit Event'])

@section('css')
    <!-- Including Flatpickr CSS -->
    <link href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" rel="stylesheet">
    <!-- Including Google Maps API -->
    <style>
        #map {
            height: 300px;
            width: 100%;
        }
    </style>
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
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $event->name) }}" required>
                @error('name')
                <div class="invalid-feedback" style="color: red;">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <!-- Description -->
            <div class="mb-3">
                <label class="form-label" for="description">Event Description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{ old('description', $event->description) }}</textarea>
                @error('description')
                <div class="invalid-feedback" style="color: red;">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <!-- Google Maps Location -->
            <div class="mb-3">
                <label class="form-label" for="location">Location</label>
                <input type="text" class="form-control @error('location') is-invalid @enderror" id="location" name="location" value="{{ old('location', $event->location) }}" readonly>
                @error('location')
                <div class="invalid-feedback" style="color: red;">
                    {{ $message }}
                </div>
                @enderror
                <div id="map"></div>
            </div>

            <!-- Category Selection -->
            <div class="mb-3">
                <label class="form-label" for="category_id">Event Category</label>
                <select class="form-control @error('category_id') is-invalid @enderror" id="category_id" name="category_id" required>
                    <option value="" disabled>Select Category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id', $event->category_id) == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
                @error('category_id')
                <div class="invalid-feedback" style="color: red;">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="col-xl-6">
            <!-- Start Date -->
            <div class="mb-3">
                <label class="form-label" for="start_date">Start Date</label>
                <input type="text" class="form-control @error('start_date') is-invalid @enderror" id="start_date" name="start_date" value="{{ old('start_date', $event->start_date) }}" required>
                @error('start_date')
                <div class="invalid-feedback" style="color: red;">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <!-- End Date -->
            <div class="mb-3">
                <label class="form-label" for="end_date">End Date</label>
                <input type="text" class="form-control @error('end_date') is-invalid @enderror" id="end_date" name="end_date" value="{{ old('end_date', $event->end_date) }}" required>
                @error('end_date')
                <div class="invalid-feedback" style="color: red;">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <!-- Capacity -->
            <div class="mb-3">
                <label class="form-label" for="capacity">Capacity</label>
                <input type="number" class="form-control @error('capacity') is-invalid @enderror" id="capacity" name="capacity" value="{{ old('capacity', $event->capacity) }}">
                @error('capacity')
                <div class="invalid-feedback" style="color: red;">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <!-- Price -->
            <div class="mb-3">
                <label class="form-label" for="price">Price</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price', $event->price) }}">
                @error('price')
                <div class="invalid-feedback" style="color: red;">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <!-- Image Upload -->
            <div class="mb-3">
                <label class="form-label" for="image">Event Image</label>
                @if($event->image_path)
                    <img src="{{ asset($event->image_path) }}" alt="{{ $event->name }}" class="img-thumbnail mb-2" style="width: 300px; height: auto;">
                @endif
                <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
                @error('image')
                <div class="invalid-feedback" style="color: red;">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
    </div>

    <!-- Align button to the right -->
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
    <!-- Google Maps JavaScript API -->
    <script src="https://maps.gomaps.pro/maps/api/js?key=AlzaSy88W2br6XrFHsW2FPn7hoDk9emOBtvu96U&libraries=places"></script>

    <script>
        // Initialize Flatpickr for Start Date
        flatpickr("#start_date", {
            enableTime: true,
            dateFormat: "Y-m-d H:i", 
            minDate: "today",
        });

        // Initialize Flatpickr for End Date
        flatpickr("#end_date", {
            enableTime: true,
            dateFormat: "Y-m-d H:i", 
            minDate: "today",
        });

        // Google Maps Initialization
        function initMap() {
            var eventLocation = { lat: 36.8065, lng: 10.1815 }; // Example coordinates (replace with actual event location)

            var map = new google.maps.Map(document.getElementById('map'), {
                center: eventLocation,
                zoom: 13
            });

            var marker = new google.maps.Marker({
                position: eventLocation,
                map: map
            });

            var input = document.getElementById('location');
            var autocomplete = new google.maps.places.Autocomplete(input);

            autocomplete.bindTo('bounds', map);

            autocomplete.addListener('place_changed', function () {
                var place = autocomplete.getPlace();
                if (!place.geometry) {
                    return;
                }

                // Place the marker at the selected location
                marker.setPosition(place.geometry.location);
                map.setCenter(place.geometry.location);
                map.setZoom(17);

                // Update the location input field with the address
                document.getElementById('location').value = place.formatted_address;
            });

            // Enable marker dragging to update the location
            map.addListener('click', function(event) {
                marker.setPosition(event.latLng);
                map.setCenter(event.latLng);

                // Optional: reverse geocode to get the address
                var geocoder = new google.maps.Geocoder();
                geocoder.geocode({'location': event.latLng}, function(results, status) {
                    if (status === 'OK' && results[0]) {
                        document.getElementById('location').value = results[0].formatted_address;
                    }
                });
            });
        }

        // Load the map on page load
        google.maps.event.addDomListener(window, 'load', initMap);
    </script>
@endsection
