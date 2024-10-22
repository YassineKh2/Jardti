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

<!-- Table of courses -->
<div class="table-responsive">
    <table class="table table-striped table-bordered">
        <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Category</th>
                <th scope="col">PDF</th>
                <th scope="col">Audiobook version</th>
                <th scope="col" class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @if($courses->count() > 0)
                @foreach($courses as $index => $course)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $course->title }}</td>
                        <td>{{ Str::limit($course->description, 50) }}</td>
                        <td>{{ $course->category->name ?? 'No Category' }}</td>
                        <td>
                            @if($course->pdf)
                                <a href="{{ Storage::url($course->pdf) }}" target="_blank" class="btn btn-success btn-sm">
                                    <i class="fas fa-file-pdf"></i> View PDF
                                </a>
                            @else
                                <span class="text-muted">No PDF</span>
                            @endif
                        </td>
                        <td>
                            @if($course->audio)
                            <audio controls class="mt-2 w-100">
                                            <source src="{{ asset($course->audio) }}" type="audio/mpeg">
                                            Your browser does not support the audio element.
                                        </audio>
                                  @else
                                <span class="text-muted">No Audio</span>
                            @endif
                        </td>
                        <td class="text-center">
                            <!-- View Course -->
                            <a href="{{ route('courses.show', $course->id) }}" class="btn btn-info btn-sm" title="View">
                                <i class="fas fa-eye"></i>
                            </a>

                            <!-- Edit Course -->
                            <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-warning btn-sm" title="Edit">
                                <i class="fas fa-edit"></i>
                            </a>

                            <!-- Delete Course -->
                            <form action="{{ route('courses.destroy', $course->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this course? This action cannot be undone.');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="7" class="text-center text-muted">No courses available.</td>
                </tr>
            @endif
        </tbody>
    </table>
</div>
@endsection
