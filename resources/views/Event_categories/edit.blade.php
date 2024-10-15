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
                <h5 class="card-title mb-0">Category Details</h5>
            </div>

            <div class="card-body">
                <form action="{{ route('categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT') <!-- This method ensures it’s an update -->

                    <div class="row">
                        <div class="col-xl-6">
                            <!-- Category Name -->
                            <div class="mb-3">
                                <label class="form-label" for="name">Category Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $category->name) }}" required>
                            </div>

                            <!-- Description -->
                            <div class="mb-3">
                                <label class="form-label" for="description">Description</label>
                                <textarea class="form-control" id="description" name="description">{{ old('description', $category->description) }}</textarea>
                            </div>

                            <!-- Image Upload -->
                            <div class="mb-3">
                                <label class="form-label" for="image">Category Image</label>
                                @if($category->image)
                                    <img src="{{ asset($category->image) }}" alt="{{ $category->name }}" class="img-thumbnail mb-2" style="width: 150px;">
                                @endif
                                <input type="file" class="form-control" id="image" name="image">
                            </div>
                        </div>
                    </div>

                    <!-- Align Button to the Right -->
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Update Category</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
