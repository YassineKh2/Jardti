@extends('layouts.vertical', ['title' => 'Radialbar Charts'])

@section('content')
<div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-semibold m-0">Radialbar Charts</h4>
    </div>

    <div class="text-end">
        <ol class="breadcrumb m-0 py-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Charts</a></li>
            <li class="breadcrumb-item active">Radialbar Charts</li>
        </ol>
    </div>
</div>

<!-- Radialbar Pie Charts -->
<div class="row">
    <!-- Radialbar Pie Charts -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Simple Radialbar Chart</h5>
            </div>

            <div class="card-body">
                <div id="simple_radialbar_chart" class="apex-charts"></div> 
            </div>
        </div>  
    </div>

    <!-- Multiple Pie Charts -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Multiple Radialbar Chart</h5>
            </div>

            <div class="card-body">
                <div id="multiple_radialbar_chart" class="apex-charts"></div> 
            </div>
        </div>  
    </div>

    <!-- Custom Angle Circle Radial Bar Charts -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Custom Angle Circle Radialbar Chart</h5>
            </div>

            <div class="card-body">
                <div id="angle_radialbar_chart" class="apex-charts"></div> 
            </div>
        </div>  
    </div>

    <!-- Gradient Radial Bar Charts -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Gradient Radialbar Chart</h5>
            </div>

            <div class="card-body">
                <div id="gradient_radialbar_chart" class="apex-charts"></div> 
            </div>
        </div>  
    </div>

    <!-- Radialbars with Image Radial Bar Charts -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Radialbars with Image Chart</h5>
            </div>

            <div class="card-body">
                <div id="image_radialbar_chart" class="apex-charts"></div> 
            </div>
        </div>  
    </div>

    <!-- Stroked Gauge Radial Bar Charts -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Stroked Gauge Chart</h5>
            </div>

            <div class="card-body">
                <div id="stroked_radialbar_chart" class="apex-charts"></div> 
            </div>
        </div>  
    </div>

    <!-- Semi Circle Gauge Radial Bar Charts -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Semi Circle Gauge Chart</h5>
            </div>

            <div class="card-body">
                <div id="semicircle_radialbar_chart" class="apex-charts"></div> 
            </div>
        </div>  
    </div>

</div>
@endsection

@section('script')
    @vite([ 'resources/js/pages/apexcharts-radialbar.init.js'])
@endsection