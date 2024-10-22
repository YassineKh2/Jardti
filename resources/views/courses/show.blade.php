@extends('layouts.vertical', ['title' => 'Course Details'])

@section('content')
<div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-semibold m-0">{{ $course->title }}</h4>
    </div>

    <div class="text-end">
        <ol class="breadcrumb m-0 py-0">
            <li class="breadcrumb-item"><a href="{{ route('courses.index') }}">Courses</a></li>
            <li class="breadcrumb-item active">Course Details</li>
        </ol>
    </div>
</div>

<!-- Course Details -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Course Information</h5>
            </div>

            <div class="card-body">
                <p><strong>Title:</strong> {{ $course->title }}</p>
                <p><strong>Description:</strong> {{ $course->description ?? 'No description available' }}</p>
                <p><strong>Category:</strong> {{ $course->category->name }}</p>
                <p><strong>PDF:</strong> <a href="{{ Storage::url($course->pdf) }}" target="_blank">Download PDF</a></p>

                <!-- MP3 Audio Player -->
                @if($course->audio)
                    <p><strong>AudioBook Version:</strong></p>
                    <audio controls>
    <source src="{{ asset($course->audio) }}" type="audio/mpeg">
    Your browser does not support the audio element.
</audio>

                @else
                    <p><strong>Audio:</strong> No audio available</p>
                @endif
<br>
                <!-- Back to list -->
                <a href="{{ route('courses.index') }}" class="btn btn-secondary">Back to Courses</a>
            </div>
        </div>
    </div>
</div>
@endsection
