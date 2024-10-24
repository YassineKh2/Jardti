@extends('layouts.vertical', ['title' => 'Edit Category'])

@section('content')
<div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-semibold m-0">Edit Category: {{ $category->name }}</h4>
    </div>

    <div class="text-end">
        <ol class="breadcrumb m-0 py-0">
            <li class="breadcrumb-item"><a href="{{ route('course-categories.index') }}">Categories</a></li>
            <li class="breadcrumb-item active">Edit Category</li>
        </ol>
    </div>
</div>

<!-- Form to edit a category -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Edit Category</h5>
            </div>

            <div class="card-body">
                <form action="{{ route('course-categories.update', $category->id) }}" method="POST" class="needs-validation" novalidate>
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="name" class="form-label">Category Name:</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ $category->name }}" placeholder="Enter category name" required>
                        <div class="invalid-feedback">
                            Please enter a category name.
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Update Category</button>
                    <a href="{{ route('course-categories.index') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
