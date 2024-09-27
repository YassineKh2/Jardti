@extends('layouts.vertical', ['title' => 'Column Chartjs'])

@section('content')
<div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-semibold m-0">Column Charts</h4>
    </div>

    <div class="text-end">
        <ol class="breadcrumb m-0 py-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Charts</a></li>
            <li class="breadcrumb-item active">Column Charts</li>
        </ol>
    </div>
</div>

<!-- Column Charts -->
<div class="row">
    <!-- Basic Column Chart -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Basic Column Chart</h5>
            </div>

            <div class="card-body">
                <div id="basic_column_chart" class="apex-charts"></div> 
            </div>
        </div>  
    </div>

    <!-- Data Labels With Column Chart -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Column With Data Labels</h5>
            </div>

            <div class="card-body">
                <div id="datalabels_column_chart" class="apex-charts"></div> 
            </div>
        </div>  
    </div>
</div>

<div class="row">
    <!-- Data Labels With Column Chart -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Stacked Columns Chart</h5>
            </div>

            <div class="card-body">
                <div id="stacked_column_chart" class="apex-charts"></div> 
            </div>
        </div>  
    </div>

    <!-- Stacked Column 100 Chart -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Stacked Column 100</h5>
            </div>

            <div class="card-body">
                <div id="stacked_100_column_chart" class="apex-charts"></div> 
            </div>
        </div>  
    </div>
</div>

<div class="row">
    <!-- Grouped Stacked Columns Chart -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Grouped Stacked Columns</h5>
            </div>

            <div class="card-body">
                <div id="grouped_column_chart" class="apex-charts"></div> 
            </div>
        </div>  
    </div>

    <!-- Dumbbell Chart -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Dumbbell Chart</h5>
            </div>

            <div class="card-body">
                <div id="dumbbell_column_chart" class="apex-charts"></div> 
            </div>
        </div>  
    </div>
</div>

<div class="row">
    <!-- Column With Markers Chart -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Column With Markers</h5>
            </div>

            <div class="card-body">
                <div id="markers_column_chart" class="apex-charts"></div> 
            </div>
        </div>  
    </div>

    <!-- Distributed Columns Chart -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Distributed Columns Chart</h5>
            </div>

            <div class="card-body">
                <div id="distributed_column_chart" class="apex-charts"></div>
            </div>
        </div>  
    </div>
</div>

<div class="row">
    <!-- Column with Rotated Labels Chart -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Column With Rotated Labels</h5>
            </div>

            <div class="card-body">
                <div id="rotated_column_chart" class="apex-charts"></div>
            </div>
        </div>  
    </div>

    <!-- Column with Negative Values Chart -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Column With Negative Values</h5>
            </div>

            <div class="card-body">
                <div id="negative_column_chart" class="apex-charts"></div>
            </div>
        </div>  
    </div>
</div>
@endsection

@section('script')
    <script src="https://apexcharts.com/samples/assets/stock-prices.js"></script>
    @vite([ 'resources/js/pages/apexcharts-column.init.js'])
@endsection