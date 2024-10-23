@extends('layouts.vertical', ['title' => 'Events'])

@section('css')
    <!-- Add any additional CSS if necessary -->
    <style>
        .event-image {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 5px;
        }

        /* Icon button styles */
        .actions-buttons i {
            font-size: 18px;
            padding: 8px;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            cursor: pointer;
            display: inline-flex;
            justify-content: center;
            align-items: center;
        }

        /* Align buttons in the action column */
        .actions-buttons {
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        .actions-buttons a, .actions-buttons form button {
            border: none;
            background: none;
            display: inline-block;
            padding: 0;
            margin-right: 5px;
        }

        /* Add hover effect for action buttons */
        .actions-buttons i:hover {
            background-color: #f1f1f1;
            border-color: #007bff;
        }

        /* Remove extra margin and padding from table cells */
        .table td {
            padding: 8px;
            vertical-align: middle;
        }

        .table tbody tr {
            border-bottom: 1px solid #dee2e6;
        }

        /* Responsive table styles */
        @media (max-width: 767px) {
            /* Hide table header */
            .table thead {
                display: none;
            }

            /* Make table rows look like cards */
            .table tbody, .table tr, .table td {
                display: block;
                width: 100%;
            }

            /* Each row becomes a card */
            .table tbody tr {
                margin-bottom: 1rem;
                border: 1px solid #dee2e6;
                border-radius: 0.25rem;
                padding: 1rem;
                background-color: #fff;
                box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
            }

            /* Each cell has a label before its value */
            .table td {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 0.75rem;
                border: none;
                border-bottom: 1px solid #dee2e6;
                text-align: left;
            }

            .table td:last-child {
                border-bottom: none;
            }

            /* Use the data-label attribute for the "labels" of each column */
            .table td::before {
                content: attr(data-label);
                font-weight: bold;
                text-transform: uppercase;
                margin-right: 1rem;
                color: #6c757d;
            }

            /* Adjust the image size */
            .event-image {
                width: 40px;
                height: 40px;
            }

            /* Better spacing for action buttons */
            .actions-buttons i {
                padding: 5px;
                font-size: 16px;
            }
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
    <a href="{{ route('events.create') }}" class="btn btn-info mb-3 mdi mdi-plus">Create Event</a>
    
    <!-- Change the CSV download button to an icon -->
    <a href="{{ url('/export-events') }}" class="btn btn-success mb-3 ms-2" title="Download CSV">
        <i class="mdi mdi-download"></i>
    </a>
</div>


<!-- Table-based Event Listing with Image Column -->
<div class="row">
    <div class="col-md-12">
        <div class="card overflow-hidden">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <div class="border border-dark rounded-2 me-2 widget-icons-sections">
                        <i data-feather="crosshair" class="widgets-icons"></i>
                    </div>
                    <h5 class="card-title mb-0">Event List</h5>
                </div>
            </div>

            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-traffic mb-0">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Event Name</th>
                                <th>Description</th>
                                <th>Location</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Capacity</th>
                                <th>Price</th>
                                <th colspan="2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($events as $event)
                            <tr>
                                <!-- Event Image -->
                                <td data-label="Image">
                                    <img src="{{ $event->image_path ? asset($event->image_path) : asset('images/default-event.png') }}" alt="{{ $event->name }}" class="event-image">
                                </td>

                                <!-- Other Event Details -->
                                <td data-label="Event Name">{{ $event->name }}</td>
                                <td data-label="Description">{{ Str::limit($event->description, 50) }}</td>
                                <td data-label="Location">{{ $event->location }}</td>
                                <td data-label="Start Date">{{ \Carbon\Carbon::parse($event->start_date)->format('d M Y') }}</td>
                                <td data-label="End Date">{{ \Carbon\Carbon::parse($event->end_date)->format('d M Y') }}</td>
                                <td data-label="Capacity">{{ $event->capacity }}</td>
                                <td data-label="Price">${{ $event->price }}</td>
                                <td class="actions-buttons" data-label="Actions">                                                       
                                    <a href="{{ route('events.edit', $event->id) }}">
                                        <i class="mdi mdi-pencil text-muted"></i>
                                    </a>
                                    <form id="delete-form-{{ $event->id }}" action="{{ route('events.destroy', $event->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="delete-button" onclick="confirmDelete({{ $event->id }})" style="border: none; background: none;">
                                            <i class="mdi mdi-delete text-muted"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Events by Category Section with Chart -->
<!-- Events by Category and Events This Month Section -->
<div class="container mt-5">
    <div class="row">
        <!-- Donut Chart -->
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Simple Donut Chart</h5>
                </div>
                <div class="card-body d-flex justify-content-center">
                    <div id="simple_donut_chart" class="apex-charts"></div> 
                </div>
            </div>  
        </div>

        <!-- Events This Month Card -->
        <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Events Per Month</h5>
            </div>
            <div class="card-body">
                <div id="basic_bar_chart" class="apex-charts"></div> <!-- Bar chart container -->
            </div>
        </div>  
    </div>
</div>
@endsection

@section('script')
    <!-- SweetAlert CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <script>
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

                    Swal.fire({
                        title: 'Deleted!',
                        text: 'The event has been deleted.',
                        icon: 'success',
                        timer: 2000,
                        showConfirmButton: false
                    });
                }
            });
        }
        document.addEventListener('DOMContentLoaded', function () {
        var options = {
            chart: {
                type: 'donut',
                width: 380,
            },
            labels: @json($eventsByCategory->pluck('category.name')), // Category names
            series: @json($eventsByCategory->pluck('total')), // Number of events per category
            responsive: [{
                breakpoint: 480,
                options: {
                    chart: {
                        width: 200
                    },
                    legend: {
                        position: 'bottom'
                    }
                }
            }]
        };

        var chart = new ApexCharts(document.querySelector("#simple_donut_chart"), options);
        chart.render();
    });

    document.addEventListener('DOMContentLoaded', function() {
        // Data passed from the controller
        const eventsPerMonth = @json(array_values($eventsThisYear)); // Only values of the array
        const months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

        // Bar chart for Events Per Month
        var options = {
            chart: {
                type: 'bar',
                height: 350
            },
            series: [{
                name: 'Events',
                data: eventsPerMonth // Data from the controller
            }],
            xaxis: {
                categories: months, // X-axis categories (Months)
            },
            title: {
                text: 'Number of Events in Each Month',
                align: 'center'
            }
        };

        var chart = new ApexCharts(document.querySelector("#basic_bar_chart"), options);
        chart.render();
    });
    </script>
   
@endsection
