@extends('layouts.vertical', ['title' => 'Create New Course'])

@section('content')
<div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-semibold m-0">Create New Course</h4>
    </div>

    <div class="text-end">
        <ol class="breadcrumb m-0 py-0">
            <li class="breadcrumb-item"><a href="{{ route('courses.index') }}">Courses</a></li>
            <li class="breadcrumb-item active">Create New Course</li>
        </ol>
    </div>
</div>

<!-- Form to create a new course -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">New Course</h5>
            </div>

            <div class="card-body">
                <form action="{{ route('courses.store') }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                    @csrf

                    <div class="mb-3">
                        <label for="title" class="form-label">Course Title:</label>
                        <input type="text" name="title" id="title" class="form-control" placeholder="Enter course title" required>
                        <div class="invalid-feedback">
                            Please enter a course title.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Course Description:</label>
                        <textarea name="description" id="description" class="form-control" placeholder="Enter course description" rows="4"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="pdf" class="form-label">Upload PDF:</label>
                        <input type="file" name="pdf" id="pdf" class="form-control" required>
                        <div class="invalid-feedback">
                            Please upload a course PDF.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="course_category_id" class="form-label">Select Category:</label>
                        <select name="course_category_id" id="course_category_id" class="form-select" required>
                            <option value="">Select a category</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">
                            Please select a category.
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Create Course</button>
                    <a href="{{ route('courses.index') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
