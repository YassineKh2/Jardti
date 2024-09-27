@extends('layouts.vertical', ['title' => 'Timeline Charts'])

@section('content')

<div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-semibold m-0">Timeline Charts</h4>
    </div>

    <div class="text-end">
        <ol class="breadcrumb m-0 py-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Charts</a></li>
            <li class="breadcrumb-item active">Timeline Charts</li>
        </ol>
    </div>
</div>


<!-- Timeline Charts -->
<div class="row">
    <!-- Basic Timeline Chart -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Basic Timeline Chart</h5>
            </div>

            <div class="card-body">
                <div id="basic_timeline_chart" class="apex-charts"></div> 
            </div>
        </div>  
    </div>

    <!-- Distributed Timeline Chart -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Distributed Timeline</h5>
            </div>

            <div class="card-body">
                <div id="distributed_timeline_chart" class="apex-charts"></div> 
            </div>
        </div>  
    </div>

    <!-- Multi-Series Timeline Chart -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Multi Series Timeline</h5>
            </div>

            <div class="card-body">
                <div id="multi_timeline_chart" class="apex-charts"></div> 
            </div>
        </div>  
    </div>

    <!-- Advanced Timeline Chart -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Advanced Timeline</h5>
            </div>

            <div class="card-body">
                <div id="advanced_timeline_chart" class="apex-charts"></div> 
            </div>
        </div>  
    </div>

    <!-- Multiple series – Group rows Chart -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Multiple Series Group Rows Timeline</h5>
            </div>

            <div class="card-body">
                <div id="group_timeline_chart" class="apex-charts"></div> 
            </div>
        </div>  
    </div>

    <!-- Dumbbell (Horizontal) Chart -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Dumbbell Horizontal Timeline</h5>
            </div>

            <div class="card-body">
                <div id="dumbbell_timeline_chart" class="apex-charts"></div> 
            </div>
        </div>  
    </div>

</div>

@endsection

@section('script')
    @vite([ 'resources/js/pages/apexcharts-timeline.init.js'])
@endsection