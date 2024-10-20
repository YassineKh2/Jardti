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
    <a href="{{ route('events.create') }}" class="btn btn-primary">Create Event</a>
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
                                <td>
                                    <img src="{{ $event->image_path ? asset($event->image_path) : asset('images/default-event.png') }}" alt="{{ $event->name }}" class="event-image">
                                </td>

                                <!-- Other Event Details -->
                                <td>{{ $event->name }}</td>
                                <td>{{ Str::limit($event->description, 50) }}</td>
                                <td>{{ $event->location }}</td>
                                <td>{{ \Carbon\Carbon::parse($event->start_date)->format('d M Y') }}</td>
                                <td>{{ \Carbon\Carbon::parse($event->end_date)->format('d M Y') }}</td>
                                <td>{{ $event->capacity }}</td>
                                <td>${{ $event->price }}</td>
                                <td>                                                       
                                    <a href="{{ route('events.edit', $event->id) }}">
                                        <i class="mdi mdi-pencil text-muted fs-18 rounded-2 border p-1 me-1"></i>
                                    </a>
                                    <form id="delete-form-{{ $event->id }}" action="{{ route('events.destroy', $event->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="delete-button" onclick="confirmDelete({{ $event->id }})" style="border: none; background: none;">
                                            <i class="mdi mdi-delete text-muted fs-18 rounded-2 border p-1"></i>
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

@endsection

@section('script')
    <!-- SweetAlert CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
    </script>
@endsection
