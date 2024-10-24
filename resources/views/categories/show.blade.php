@extends('layouts.vertical', ['title' => 'Category Details'])

@section('content')
<div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-semibold m-0">{{ $category->name }}</h4>
    </div>

    <div class="text-end">
        <ol class="breadcrumb m-0 py-0">
            <li class="breadcrumb-item"><a href="{{ route('course-categories.index') }}">Categories</a></li>
            <li class="breadcrumb-item active">Category Details</li>
        </ol>
    </div>
</div>

<!-- Category Details -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Courses in {{ $category->name }}</h5>
            </div>

            <div class="card-body">
                @if($category->courses->count() > 0)
                    <ul class="list-group">
                        @foreach($category->courses as $course)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>{{ $course->title }}</span>
                                <a href="{{ Storage::url($course->pdf) }}" class="btn btn-sm btn-primary" target="_blank">Download PDF</a>
                            </li>
                        @endforeach
                    </ul>
                @else
                    <p class="text-muted">No courses in this category.</p>
                @endif

                <!-- Back to categories list -->
                <div class="mt-3">
                    <a href="{{ route('course-categories.index') }}" class="btn btn-secondary">Back to Categories</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
