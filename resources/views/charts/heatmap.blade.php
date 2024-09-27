@extends('layouts.vertical', ['title' => 'Heatmap Charts'])

@section('content')
<div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-semibold m-0">Heatmap Charts</h4>
    </div>

    <div class="text-end">
        <ol class="breadcrumb m-0 py-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Charts</a></li>
            <li class="breadcrumb-item active">Heatmap Charts</li>
        </ol>
    </div>
</div>

<!-- Scatter Charts -->
<div class="row">
    <!-- Basic Scatter Charts -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Basic Heatmap Charts</h5>
            </div>

            <div class="card-body">
                <div id="basic_heatmap_chart" class="apex-charts"></div> 
            </div>
        </div>  
    </div>

    <!-- Multiple Colors Charts -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Multiple Colors Chart</h5>
            </div>

            <div class="card-body">
                <div id="multiple_color_chart" class="apex-charts"></div> 
            </div>
        </div>  
    </div>

    <!-- Color Range Charts -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Range Colors Chart</h5>
            </div>

            <div class="card-body">
                <div id="range_colors_chart" class="apex-charts"></div> 
            </div>
        </div>  
    </div>

    <!-- Rounded Colors Charts -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Rounded Colors Chart</h5>
            </div>

            <div class="card-body">
                <div id="rounded_colors_chart" class="apex-charts"></div> 
            </div>
        </div>  
    </div>

</div>
@endsection

@section('script')
    @vite([ 'resources/js/pages/apexcharts-heatmap.init.js'])
@endsection