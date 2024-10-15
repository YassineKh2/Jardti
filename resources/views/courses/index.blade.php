@extends('layouts.vertical', ['title' => 'Courses'])

@section('content')
<div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-semibold m-0">Course List</h4>
    </div>

    <div class="text-end">
        <ol class="breadcrumb m-0 py-0">
            <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
            <li class="breadcrumb-item active">Courses</li>
        </ol>
    </div>
</div>

<!-- Button to add a new course -->
<div class="mb-3">
    <a href="{{ route('courses.create') }}" class="btn btn-primary">
        <i class="fas fa-plus"></i> Add New Course
    </a>
</div>

<!-- Grid of courses -->
<div class="row">
    @if($courses->count() > 0)
        @foreach($courses as $course)
            <div class="col-md-3">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">{{ $course->title }}</h5>
                        <p class="card-text">
                            {{ Str::limit($course->description, 100) }}
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <!-- View Course -->
                            <a href="{{ route('courses.show', $course->id) }}" class="btn btn-info btn-sm" title="View">
                                <i class="fas fa-eye"></i> View
                            </a>

                            <!-- Edit Course -->
                            <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-warning btn-sm" title="Edit">
                                <i class="fas fa-edit"></i> Edit
                            </a>

                            <!-- Delete Course -->
                            <form action="{{ route('courses.destroy', $course->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this course? This action cannot be undone.');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete">
                                    <i class="fas fa-trash-alt"></i> Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <p class="text-muted">No courses available.</p>
    @endif
</div>
@endsection
