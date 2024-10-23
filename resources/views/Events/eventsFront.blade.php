@extends('layouts.navbar')

@section('content')

<!-- Carousel for images -->
<div id="eventsCarousel" class="carousel slide position-relative" data-bs-ride="carousel">
    <div class="carousel-inner">
        @php
            $images = File::files(public_path('images/EventGall')); // Get images from EventGall folder
        @endphp

        <!-- First image (active) -->
        <div class="carousel-item active">
            <img src="{{ asset('images/EventGall/' . basename($images[0])) }}" class="d-block mx-auto" alt="Event Image 0" style="width: 100%; object-fit: cover;">
        </div>

        <!-- Other images -->
        @foreach ($images as $key => $image)
            @if ($key !== 0)
            <div class="carousel-item">
                <img src="{{ asset('images/EventGall/' . basename($image)) }}" class="d-block mx-auto" alt="Event Image {{ $key }}" style="width: 100%; object-fit: cover;">
            </div>
            @endif
        @endforeach
    </div>

    <div class="overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center" style="background-color: rgba(0, 0, 0, 0.4); z-index: 1;">
        <h1 class="text-white" style="font-size: 3rem; font-weight: bold;">All Events</h1>
    </div>

    <!-- Carousel controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#eventsCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#eventsCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- Event Categories with Horizontal Tabs -->
<div class="container mt-5">
    <!-- Horizontal Tabs for Category Names -->
    <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
    <li class="nav-item" role="presentation">
        <a class="nav-link active" id="pills-all-tab" data-bs-toggle="pill" href="#pills-all" role="tab" aria-controls="pills-all" aria-selected="true">All</a>
    </li>
    @foreach($eventCategories as $category)
    <li class="nav-item" role="presentation">
        <a class="nav-link" id="pills-{{ $category->id }}-tab" data-bs-toggle="pill" href="#pills-{{ $category->id }}" role="tab" aria-controls="pills-{{ $category->id }}" aria-selected="false">{{ $category->name }}</a>
    </li>
    @endforeach
</ul>
<div class="row mb-4">
<h4>All Event Categories</h4>
        @foreach($eventCategories as $category)
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm h-100">
                <div class="row g-0">
                    <div class="col-md-4">
                        <!-- Using the 'image' field directly from the database -->
                        <img src="{{ asset($category->image) }}" class="img-fluid rounded-start" alt="{{ $category->name }}" style="object-fit: cover; height: 100px; width: 100px;">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{ $category->name }}</h5>
                            <p class="card-text">{{ Str::limit($category->description, 80) }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <h5 class="text-center mb-3">
    Click the button below and say something like 
    <strong>"Take me to [any category name] events"</strong> to navigate through different event categories.
</h5>
    <!-- Search bar container -->
    <div class="d-flex justify-content-center mb-4">
    <button class="btn btn-primary" id="voice-command-button">
        <i class="bi bi-mic"></i> Speak
    </button>
</div>



    <!-- Events Display under Tabs -->
    <div class="tab-content" id="pills-tabContent">
        <!-- All Events Tab -->
        <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
    <h4>All Events</h4>
    <div class="row">
        @foreach($paginatedEvents as $event)
            <div class="col-md-4 mb-4">
                <div class="card event-card-vertical h-100 d-flex flex-column">
                    <!-- Event Image and Details -->
                    <a href="{{ $event->image_path ? asset($event->image_path) : asset('images/default-event.png') }}" class="glightbox image-popup" title="{{ $event->name }}">
                        <img src="{{ $event->image_path ? asset($event->image_path) : asset('images/default-event.png') }}" alt="{{ $event->name }}" class="card-img-top img-fluid rounded" style="height: 200px; object-fit: cover;">
                    </a>
                    <div class="card-body d-flex flex-column">
                        <h5 class="event-title">{{ $event->name }}</h5>
                        <p class="event-description">{{ Str::limit($event->description, 100) }}</p>
                        <p class="event-location mt-auto">
                            <i class="bi bi-geo-alt" style="color: #28a745;"></i> Location: {{ $event->location }}
                        </p>
                        <p class="event-date">
                            <i class="bi bi-calendar" style="color: #ffc107;"></i> {{ \Carbon\Carbon::parse($event->start_date)->format('Y-m-d') }} to {{ \Carbon\Carbon::parse($event->end_date)->format('Y-m-d') }}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="d-flex justify-content-center mt-4">
    {{ $paginatedEvents->links('vendor.pagination.bootstrap-4') }}
</div>

</div>



        <!-- Event by Category Tabs -->
        @foreach($eventCategories as $category)
    <div class="tab-pane fade" id="pills-{{ $category->id }}" role="tabpanel" aria-labelledby="pills-{{ $category->id }}-tab">
        <div class="row">
            @foreach($category->events as $event)
                <div class="col-md-4 mb-4">
                    <div class="card event-card-vertical h-100 d-flex flex-column">
                        <a href="{{ $event->image_path ? asset($event->image_path) : asset('images/default-event.png') }}" class="glightbox image-popup" title="{{ $event->name }}">
                            <img src="{{ $event->image_path ? asset($event->image_path) : asset('images/default-event.png') }}" alt="{{ $event->name }}" class="card-img-top img-fluid rounded" style="height: 200px; object-fit: cover;">
                        </a>
                        <div class="card-body d-flex flex-column">
                            <h5 class="event-title">{{ $event->name }}</h5>
                            <p class="event-description">{{ Str::limit($event->description, 100) }}</p>
                            <p class="event-location mt-auto">
                                <i class="bi bi-geo-alt" style="color: #28a745;"></i> Location: {{ $event->location }}
                            </p>
                            <p class="event-date">
                                <i class="bi bi-calendar" style="color: #ffc107;"></i> {{ \Carbon\Carbon::parse($event->start_date)->format('Y-m-d') }} to {{ \Carbon\Carbon::parse($event->end_date)->format('Y-m-d') }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- Pagination pour les événements de chaque catégorie -->
        <div class="d-flex justify-content-center mt-4">
            {{ $category->eventsPaginated->links() }}
        </div>
    </div>
@endforeach

    </div>

    <!-- Google Maps to display event locations -->
    <div id="map" style="height: 500px; width: 100%; margin-bottom: 200px;" class="mt-4"></div>
    </div>

@endsection

@section('script')
<script src="https://maps.gomaps.pro/maps/api/js?key=AlzaSy88W2br6XrFHsW2FPn7hoDk9emOBtvu96U&callback=initMap&libraries=places" async defer></script>
<script>
    var map;
    var markers = [];
    var events = @json($events); // Get event data from the backend

    function initMap() {
    var defaultLocation = { lat: 36.8065, lng: 10.1815 }; // Default to Tunis
    map = new google.maps.Map(document.getElementById('map'), {
        center: defaultLocation,
        zoom: 10
    });

    var geocoder = new google.maps.Geocoder();

    // Loop through events and place markers based on geocoded address
    events.forEach(function(event) {
        var address = event.location; // Address is the location stored in your database
        
        // Log the event and its address for debugging
        console.log('Event:', event.name, 'Address:', address);

        if (address) {
            geocodeAddress(geocoder, map, event);
        } else {
            console.error('No address found for event:', event.name);
        }
    });
}

function geocodeAddress(geocoder, map, event) {
    geocoder.geocode({ 'address': event.location }, function(results, status) {
        if (status === 'OK') {
            var marker = new google.maps.Marker({
                map: map,
                position: results[0].geometry.location,
                title: event.name
            });

            var infoWindow = new google.maps.InfoWindow({
                content: `<h5>${event.name}</h5><p>${event.location}</p>`
            });

            marker.addListener('click', function() {
                infoWindow.open(map, marker);
            });

            console.log('Coordinates for', event.name, ':', results[0].geometry.location);
        } else {
            console.error('Geocode was not successful for the following reason: ' + status);
        }
    });

    



}

document.addEventListener('DOMContentLoaded', function() {
    const voiceCommandButton = document.getElementById('voice-command-button');

    // Get all categories with their names and tab IDs from the backend
    const categories = @json($eventCategories); // This will create an array of categories in JavaScript

    if ('webkitSpeechRecognition' in window) {
        const recognition = new webkitSpeechRecognition();
        recognition.continuous = false; // Stops listening after each command
        recognition.interimResults = false;
        recognition.lang = 'en-US'; // Set language

        // Start speech recognition when the button is clicked
        voiceCommandButton.addEventListener('click', function() {
            recognition.start();
            console.log('Voice recognition started...');
        });

        // Process the speech result
        recognition.onresult = function(event) {
            let transcript = event.results[0][0].transcript.toLowerCase();
            console.log('Raw voice command received:', transcript);

            recognition.stop(); // Stop recognition after getting the result

            // Clean up transcript to remove extra spaces or punctuation
            transcript = transcript.trim().replace(/[^\w\s]/gi, '').toLowerCase();
            console.log('Cleaned transcript:', transcript);

            // Process the transcript for event category navigation
            if (transcript.includes('take me to') && transcript.includes('events')) {
                let spokenCategory = transcript.replace('take me to', '').replace('events', '').trim();
                console.log('Extracted category:', spokenCategory);

                // Iterate through the categories and match the spokenCategory with category names
                let matchedCategory = categories.find(category => category.name.toLowerCase() === spokenCategory);

                if (matchedCategory) {
                    // Navigate to the corresponding tab based on the matched category
                    let tabId = `pills-${matchedCategory.id}-tab`;
                    document.getElementById(tabId).click();
                    console.log(`Navigating to tab ID: ${tabId}`);
                } else {
                    console.error(`Sorry, I couldn't find a category for "${spokenCategory}".`);
                    alert(`Sorry, I couldn't find a category for "${spokenCategory}". Please try again.`);
                }
            } else {
                alert('Please say a command like "Take me to Educational events".');
            }
        };

        recognition.onerror = function(event) {
            console.error('Speech recognition error:', event.error);
        };
    } else {
        alert('Sorry, your browser does not support speech recognition.');
    }
});


    
</script>
@endsection

<!-- Styles for map and layout -->
<style>
    .pagination .page-link {
    padding: 10px 15px;
    border-radius: 50%;
    background-color: white;
    color: #007bff;
    transition: background-color 0.3s;
}

.pagination .page-item.active .page-link {
    background-color: #007bff;
    color: white;
}

.pagination .page-link:hover {
    background-color: #e9ecef;
}

    
    body, html {
        margin: 0;
        padding: 0;
    }

    .navbar {
        margin-bottom: 0 !important; /* Remove space between navbar and image */
    }

    .carousel-item img {
        width: 100%; 
        height: auto; 
        object-fit: cover;
    }

    .overlay {
        backdrop-filter: none;
        z-index: 2;
    }

    .image-fluid-container {
        margin: 0;
        padding: 0;
    }

    @media (max-width: 767px) {
        .carousel-item img {
            height: 300px;
        }

        .overlay h1 {
            font-size: 2rem;
        }
    }

    @media (min-width: 768px) and (max-width: 1024px) {
        .carousel-item img {
            height: 400px;
        }

        .overlay h1 {
            font-size: 2.5rem;
        }
    }

    @media (min-width: 1025px) {
        .carousel-item img {
            height: 500px;
        }

        .overlay h1 {
            font-size: 3rem;
        }
    }

    .category-img {
        max-width: 600px;
        height: 250px;
        object-fit: contain;
        border-radius: 10px;
        margin-bottom: 20px;
    }

    .category-details {
        margin-top: 20px;
        text-align: center;
    }

    .category-details p {
        font-size: 16px;
        color: #333;
    }

    .text-muted {
        color: #6c757d;
    }

    .search-bar-container {
        display: flex;
        align-items: center;
        border-radius: 20px;
        border: 1px solid #ccc;
        overflow: hidden;
        padding: 2px;
        background-color: #f9f9f9;
        width: 300px;
    }

    .search-bar {
        border: none;
        outline: none;
        padding: 5px;
        flex: 1;
        border-radius: 20px;
        font-size: 14px;
    }

    .search-button {
        background: none;
        border: none;
        padding: 2px;
        cursor: pointer;
    }

    .search-button i {
        font-size: 16px;
        color: #aaa;
    }

    .search-bar:focus {
        box-shadow: 0 0 3px rgba(0, 123, 255, 0.3);
    }
    #pills-tab {
        display: none;
    }
    
</style>
