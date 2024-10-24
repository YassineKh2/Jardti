@extends('layouts.vertical', ['title' => 'Event Categories'])

@section('css')
    <style>
        .category-image {
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
        <h4 class="fs-18 fw-semibold m-0">Event Categories</h4>
    </div>

    <div class="text-end">
        <ol class="breadcrumb m-0 py-0 d-inline-block">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Components</a></li>
            <li class="breadcrumb-item active">Event Categories</li>
        </ol>
    </div>

    <!-- Create Event Category Button -->
    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('event-categories.create') }}" class="btn btn-primary">
            <i data-feather="plus"></i> Create Event Category
        </a>
    </div>
</div>

<!-- Table-based Category Listing with Image Column -->
<div class="row">
    <div class="col-md-12">
        <div class="card overflow-hidden">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <h5 class="card-title mb-0">Event Categories</h5>
                </div>
            </div>

            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-traffic mb-0">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Category Name</th>
                                <th>Description</th>
                                <th colspan="2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($eventCategories as $category)
                            <tr>
                                <!-- Category Image -->
                                <td>
                                    <img src="{{ $category->image ? asset($category->image) : asset('images/default-category.jpg') }}" alt="{{ $category->name }}" class="category-image">
                                </td>

                                <!-- Other Category Details -->
                                <td>{{ $category->name }}</td>
                                <td>{{ Str::limit($category->description ?? 'No description available', 50) }}</td>
                                <td>                                                       
                                    <a href="{{ route('event-categories.edit', $category->id) }}">
                                        <i class="mdi mdi-pencil text-muted fs-18 rounded-2 border p-1 me-1"></i>
                                    </a>
                                    <form id="delete-form-{{ $category->id }}" action="{{ route('event-categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="delete-button" onclick="confirmDelete({{ $category->id }})" style="border: none; background: none;">
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
        function confirmDelete(categoryId) {
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
                    document.getElementById('delete-form-' + categoryId).submit();

                    Swal.fire({
                        title: 'Deleted!',
                        text: 'The category has been deleted.',
                        icon: 'success',
                        timer: 2000,
                        showConfirmButton: false
                    });
                }
            });
        }
    </script>

    <!-- Show success message if session has 'success' key -->
    @if(session('success'))
        <script>
            Swal.fire({
                title: 'Success!',
                text: '{{ session('success') }}',
                icon: 'success',
                timer: 2000,
                showConfirmButton: false
            });
        </script>
    @endif
@endsection
