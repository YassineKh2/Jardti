@extends('layouts.vertical', ['title' => 'Event Categories'])

@section('content')
<div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-semibold m-0">Event Categories</h4>
    </div>

    <div class="text-end">
        <ol class="breadcrumb m-0 py-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Components</a></li>
            <li class="breadcrumb-item active">Event Categories</li>
        </ol>

        <!-- Create Event Category Button -->
        <a href="{{ route('categories.create') }}" class="btn btn-primary">
            <i data-feather="plus"></i> Create Event Category
        </a>
    </div>
</div>

<div class="row">
    @foreach($categories as $category)
    <div class="col-sm-6 col-xl-3">
        <!-- Category card -->
        <div class="card d-block">
            <!-- If category has an image, display it; otherwise, show a default image -->
            <img class="card-img-top rounded-top" src="{{ $category->image ? asset($category->image) : '/images/default-category.jpg' }}" alt="{{ $category->name }}">

            <div class="card-body">
                <h4 class="card-title">{{ $category->name }}</h4>
                <p class="card-text text-muted">{{ $category->description ? Str::limit($category->description, 100) : 'No description available.' }}</p>

                <!-- Icons for Edit and Delete -->
                <div class="d-flex justify-content-end">
                    <!-- Edit Icon -->
                    <a href="{{ route('categories.edit', $category->id) }}" title="Edit Category" style="border: none; background: none;">
                        <i data-feather="edit" style="color: gray; cursor: pointer;"></i>
                    </a>

                    <!-- Delete Icon with SweetAlert Confirmation -->
                    <button type="button" title="Delete Category" style="border: none; background: none;" onclick="confirmDelete('{{ $category->id }}')">
                        <i data-feather="trash" style="color: red; cursor: pointer;"></i>
                    </button>

                    <form id="delete-form-{{ $category->id }}" action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </div>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div><!-- end col -->
    @endforeach
</div>
@endsection

@section('script')
    <!-- Include SweetAlert JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        // Initialize Feather icons
        feather.replace();

        // SweetAlert for Delete Confirmation
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
                    // Submit the form for deletion
                    document.getElementById('delete-form-' + categoryId).submit();
                    
                    // Show success message after form submission
                    Swal.fire({
                        title: 'Deleted!',
                        text: 'The category has been deleted.',
                        icon: 'success',
                        timer: 2000,
                        showConfirmButton: false
                    });
                }
            })
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
