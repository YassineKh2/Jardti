@extends('layouts.vertical', ['title' => 'Line Charts'])

@section('content')
<div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-semibold m-0">Line Charts</h4>
    </div>

    <div class="text-end">
        <ol class="breadcrumb m-0 py-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Charts</a></li>
            <li class="breadcrumb-item active">Line Charts</li>
        </ol>
    </div>
</div>

<!-- Line Charts -->
<div class="row">
    <!-- Basic Line Chart -->
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Basic Line Chart</h5>
            </div>

            <div class="card-body">
                <div id="basic_line_chart" class="apex-charts"></div>
            </div>
        </div>  
    </div>

    <!-- Line with Data Labels Line Chart -->
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Line with Data Labels Chart</h5>
            </div>

            <div class="card-body">
                <div id="datalabel_line_chart" class="apex-charts"></div> 
            </div>
        </div>  
    </div>
</div>

<div class="row">
    <!-- Zoomable Timeseries Line Chart -->
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Zoomable Timeseries Chart</h5>
            </div>

            <div class="card-body">
                <div id="zoomable_line_chart" class="apex-charts"></div> 
            </div>

        </div>  
    </div>

    <!-- Syncing Line charts -->
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Syncing Chart</h5>
            </div>

            <div class="card-body">
                <div id="syncing_line_chart" class="apex-charts"></div>
                <div id="syncing_line_chart2" class="apex-charts"></div>
                <div id="syncing_line_chart_area" class="apex-charts"></div>
            </div>
        </div>  
    </div>
</div>

<div class="row">
    <!-- Brush Line Chart -->
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Brush Chart</h5>
            </div>
            
            <div class="card-body">
                <div id="brush_line_chart" class="apex-charts"></div>
                <div id="brush_line_chart2" class="apex-charts"></div>
            </div>
        </div>  
    </div>

    <!-- Stepline Line Chart -->
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Stepline Chart</h5>
            </div>
            
            <div class="card-body">
                <div id="stepline_line_chart" class="apex-charts"></div>
            </div>
        </div>  
    </div>
</div>

<div class="row">
    <!-- Gradient Line Chart -->
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Gradient Chart</h5>
            </div>
            
            <div class="card-body">
                <div id="gradient_line_chart" class="apex-charts"></div>
            </div>
        </div>  
    </div>

    <!-- Missing / Null Values Line Chart -->
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Missing Data/ Null Value Chart</h5>
            </div>
            
            <div class="card-body">
                <div id="missingnull_line_chart" class="apex-charts"></div>
            </div>
        </div>  
    </div>
</div>

<div class="row">
    <!-- Realtime Line Chart -->
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Realtime Chart</h5>
            </div>
            
            <div class="card-body">
                <div id="realtime_line_chart" class="apex-charts"></div>
            </div>
        </div>  
    </div>

    <!-- Dashed Line Chart -->
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Dashed Chart</h5>
            </div>
            
            <div class="card-body">
                <div id="dashed_line_chart" class="apex-charts"></div>
            </div>
        </div>  
    </div>
</div>

<div class="row">
    <!-- Live Chart With Annotations Chart -->
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Live Chart With Annotations Chart</h5>
            </div>
            
            <div class="card-body">
                <div id="annotations_line_chart" class="apex-charts"></div>
            </div>
        </div>  
    </div>
</div>
@endsection

@section('script')
    <script src="https://apexcharts.com/samples/assets/stock-prices.js"></script>
    @vite([ 'resources/js/pages/apexcharts-line.init.js'])
@endsection