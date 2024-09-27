@extends('layouts.vertical', ['title' => 'Scatter Charts'])

@section('content')
<div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-semibold m-0">Scatter Charts</h4>
    </div>

    <div class="text-end">
        <ol class="breadcrumb m-0 py-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Charts</a></li>
            <li class="breadcrumb-item active">Scatter Charts</li>
        </ol>
    </div>
</div>

<!-- Scatter Charts -->
<div class="row">
    <!-- Basic Scatter Charts -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Basic Scatter Chart</h5>
            </div>

            <div class="card-body">
                <div id="basic_scatter_chart" class="apex-charts"></div> 
            </div>
        </div>  
    </div>

    <!-- Datetime Scatter Charts -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Datetime Scatter Chart</h5>
            </div>

            <div class="card-body">
                <div id="datetime_scatter_chart" class="apex-charts"></div> 
            </div>
        </div>  
    </div>

    <!-- Image Scatter Charts -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Images Scatter Chart</h5>
            </div>

            <div class="card-body">
                <div id="images_scatter_chart" class="apex-charts"></div> 
            </div>
        </div>  
    </div>
</div>
@endsection

@section('script')
    @vite([ 'resources/js/pages/apexcharts-scatter.init.js'])
@endsection