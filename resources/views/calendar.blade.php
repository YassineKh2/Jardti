@extends('layouts.vertical', ['title' => 'Dashboard'])

@section('content')
<div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-semibold m-0">Calendar</h4>
    </div>

    <div class="text-end">
        <ol class="breadcrumb m-0 py-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Maps</a></li>
            <li class="breadcrumb-item active">Calendar</li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    
                    <div class="card-body app-calendar">
                        <div id="calendar"></div>
                    </div> <!-- end card-body -->
                    
                </div> <!-- end card-->
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div> <!-- end col -->
</div> <!-- end row -->
@endsection

@section('script')
    @vite(['resources/js/pages/demo.calendar.js',])
@endsection