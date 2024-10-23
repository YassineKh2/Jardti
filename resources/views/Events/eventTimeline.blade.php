@extends('layouts.navbar', ['title' => 'Timeline'])

@section('content')

<!-- Centered header section -->
<div class="py-3 d-flex align-items-center justify-content-center flex-column">
    <div class="text-center">
        <h4 class="fs-18 fw-semibold m-0">Timeline</h4>
    </div>

    <div class="text-center">
        <ol class="breadcrumb m-0 py-0 justify-content-center">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
            <li class="breadcrumb-item active">Timeline</li>
        </ol>
    </div>
</div>

<!-- Centering container and timeline content -->
<div class="container-fluid d-flex justify-content-center">
    <div class="col-lg-8 col-md-10 col-sm-12"> <!-- Adjusting col size for proper centering -->
        <div class="timeline-page position-relative">

            @foreach($events as $index => $event)
            <div class="timeline-section mt-4">
                <div class="row">
                    @if($index % 2 == 0)
                        <!-- Left-aligned event -->
                        <div class="col-lg-6 col-md-6 col-sm-12 text-end">
                            <div class="duration label-left fs-16 fw-medium position-relative p-2 px-4 fst-italic rounded-2">
                                {{ \Carbon\Carbon::parse($event->start_date)->format('d M Y') ?? 'No date available' }}
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="card description-right border-0 overflow-hidden">
                                <div class="card-body">
                                    <h6 class="title mb-1 text-capitalize">{{ $event->name ?? 'Unnamed event' }}</h6>
                                    <p class="timeline-subtitle mt-3 mb-0 text-muted">
                                        {{ Str::limit($event->description ?? 'No description available', 150) }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @else
                        <!-- Right-aligned event -->
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="card description-left border-0 overflow-hidden">
                                <div class="card-body">
                                    <h6 class="title mb-1 text-capitalize">{{ $event->name ?? 'Unnamed event' }}</h6>
                                    <p class="timeline-subtitle mt-3 mb-0 text-muted">
                                        {{ Str::limit($event->description ?? 'No description available', 150) }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 text-start">
                            <div class="duration label-right fs-16 fw-medium position-relative p-2 px-4 fst-italic rounded-2">
                                {{ \Carbon\Carbon::parse($event->start_date)->format('d M Y') ?? 'No date available' }}
                            </div>
                        </div>
                    @endif
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>

@endsection
