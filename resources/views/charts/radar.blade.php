@extends('layouts.vertical', ['title' => 'Radar Charts'])

@section('content')
<div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-semibold m-0">Radar Charts</h4>
    </div>

    <div class="text-end">
        <ol class="breadcrumb m-0 py-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Charts</a></li>
            <li class="breadcrumb-item active">Radar Charts</li>
        </ol>
    </div>
</div>

<!-- Radar Pie Charts -->
<div class="row">
    <!-- Basic Radar Charts -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Basic Radar Chart</h5>
            </div>

            <div class="card-body">
                <div id="basic_radar_chart" class="apex-charts"></div> 
            </div>
        </div>  
    </div>

    <!-- Multiple Series Radar Charts -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Radar Chart - Multiple Series</h5>
            </div>

            <div class="card-body">
                <div id="multiple_radar_chart" class="apex-charts"></div> 
            </div>
        </div>  
    </div>

    <!-- Polygon Fill Radar Charts -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Radar Chart - Polygon Fill</h5>
            </div>

            <div class="card-body">
                <div id="polygonfill_radar_chart" class="apex-charts"></div> 
            </div>
        </div>  
    </div>
</div>
@endsection

@section('script')
    @vite([ 'resources/js/pages/apexcharts-radar.init.js'])
@endsection