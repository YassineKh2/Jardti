@extends('layouts.vertical', ['title' => 'Create Event Category'])

@section('content')
<div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-semibold m-0">Create Event Category</h4>
    </div>

    <div class="text-end">
        <ol class="breadcrumb m-0 py-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Event Categories</a></li>
            <li class="breadcrumb-item active">Create Category</li>
        </ol>
    </div>
</div>

<!-- Create Event Category Form -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Category Details</h5>
            </div>

            <div class="card-body">
                <form action="{{ route('event-categories.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-xl-6">
                            <!-- Category Name -->
                            <div class="mb-3">
                                <label class="form-label" for="name">Category Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                            </div>

                            <!-- Description -->
                            <div class="mb-3">
                                <label class="form-label" for="description">Description</label>
                                <textarea class="form-control" id="description" name="description">{{ old('description') }}"></textarea>
                            </div>

                            <!-- Image Upload -->
                            <div class="mb-3">
                                <label class="form-label" for="image">Category Image</label>
                                <input type="file" class="form-control" id="image" name="image">
                            </div>
                        </div>
                    </div>

                    <!-- Align Button to the Right -->
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Create Category</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
