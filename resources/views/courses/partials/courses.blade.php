<!-- resources/views/courses/partials/courses.blade.php -->
@if($courses->count() > 0)
    <div class="row">
        @foreach($courses as $course)
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ $course->title }}</h5>
                        <p class="card-text">{{ Str::limit($course->description, 100) }}</p>
                        <a href="{{ Storage::url($course->pdf) }}" target="_blank" class="btn btn-primary">Download PDF</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@else
    <p>No courses available for this category.</p>
@endif
