@extends('layouts.vertical', ['title' => 'Create New Category'])

@section('css')
    @vite(['node_modules/flatpickr/dist/flatpickr.min.css'])
@endsection

@section('content')
<div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-semibold m-0">Create New Category</h4>
    </div>

    <div class="text-end">
        <ol class="breadcrumb m-0 py-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Categories</a></li>
            <li class="breadcrumb-item active">Create New Category</li>
        </ol>
    </div>
</div>

<!-- Form for creating a new category -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Create Category</h5>
            </div>

            <div class="card-body">
                <form action="{{ route('course-categories.store') }}" method="POST" class="needs-validation" novalidate>
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Category Name:</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Enter category name" required>
                        <div class="invalid-feedback">
                            Please enter a category name.
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Add Category</button>
                    <a href="{{ route('course-categories.index') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
    @vite([ 'resources/js/pages/form-picker.js'])
@endsection
