@extends('layouts.vertical', ['title' => 'Edit Event Category'])

@section('content')
<div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-semibold m-0">Edit Event Category</h4>
    </div>

    <div class="text-end">
        <ol class="breadcrumb m-0 py-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Event Categories</a></li>
            <li class="breadcrumb-item active">Edit Category</li>
        </ol>
    </div>
</div>

<!-- Edit Event Category Form -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Event Category Details</h5>
            </div>

            <div class="card-body">
                <form action="{{ route('event-categories.update', $eventCategory->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <!-- Category Name -->
                    <div class="mb-3">
                        <label class="form-label">Category Name</label>
                        <input type="text" class="form-control" name="name" value="{{ old('name', $eventCategory->name) }}" required>
                    </div>

                    <!-- Category Description -->
                    <div class="mb-3">
                        <label class="form-label">Category Description</label>
                        <textarea class="form-control" name="description">{{ old('description', $eventCategory->description) }}</textarea>
                    </div>

                    <!-- Category Image -->
                    <div class="mb-3">
                        <label class="form-label">Category Image</label>
                        <input type="file" class="form-control" name="image">
                        @if($eventCategory->image)
                            <img src="{{ asset($eventCategory->image) }}" alt="{{ $eventCategory->name }}" class="img-thumbnail mt-2" style="max-width: 200px;">
                        @endif
                    </div>

                    <button type="submit" class="btn btn-primary">Update Category</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
