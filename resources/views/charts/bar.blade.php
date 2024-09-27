@extends('layouts.vertical', ['title' => 'Bar Charts'])

@section('content')
<div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-semibold m-0">Bar Charts</h4>
    </div>

    <div class="text-end">
        <ol class="breadcrumb m-0 py-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Charts</a></li>
            <li class="breadcrumb-item active">Bar Charts</li>
        </ol>
    </div>
</div>


<!-- Bar Charts -->
<div class="row">
    <!-- Basic Bar Chart -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Basic Bar Chart</h5>
            </div>

            <div class="card-body">
                <div id="basic_bar_chart" class="apex-charts"></div> 
            </div>
        </div>  
    </div>

    <!-- Grouped Bar Chart -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Grouped Bar Chart</h5>
            </div>

            <div class="card-body">
                <div id="grouped_bar_chart" class="apex-charts"></div> 
            </div>
        </div>  
    </div>
</div>

<div class="row">
    <!-- Stacked Bar Chart -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Stacked Bar Chart</h5>
            </div>

            <div class="card-body">
                <div id="stacked_bar_chart" class="apex-charts"></div> 
            </div>
        </div>  
    </div>

    <!-- Stacked Bars 100 Chart -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Stacked Bars 100</h5>
            </div>

            <div class="card-body">
                <div id="stackedfull_bar_chart" class="apex-charts"></div> 
            </div>
        </div>  
    </div>
</div>

<!-- Grouped Stacked Bars Chart -->
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Grouped Stacked Bars Chart</h5>
            </div>

            <div class="card-body">
                <div id="groupedstacked_bar_chart" class="apex-charts"></div> 
            </div>
        </div>  
    </div>

    <!-- Bar with Negative Values Chart -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Bar with Negative Values</h5>
            </div>

            <div class="card-body">
                <div id="negative_bar_chart" class="apex-charts"></div> 
            </div>
        </div>  
    </div>
</div>

<div class="row">
    <!-- Bar with Markers Chart -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Bar with Markers</h5>
            </div>

            <div class="card-body">
                <div id="markers_bar_chart" class="apex-charts"></div> 
            </div>
        </div>  
    </div>

    <!-- Reversed Bar Chart -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Reversed Bar Chart</h5>
            </div>

            <div class="card-body">
                <div id="reversed_bar_chart" class="apex-charts"></div> 
            </div>
        </div>  
    </div>
</div>

<div class="row">
    <!-- Custom DataLabels Bar Chart -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Custom DataLabels Bar</h5>
            </div>

            <div class="card-body">
                <div id="datalabels_bar_chart" class="apex-charts"></div> 
            </div>
        </div>  
    </div>

    <!-- Patterned Bar Chart -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Patterned Chart</h5>
            </div>

            <div class="card-body">
                <div id="patterned_bar_chart" class="apex-charts"></div> 
            </div>
        </div>  
    </div>
</div>


<div class="row">
    <!-- Patterned Bar Chart -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Bar with Images</h5>
            </div>

            <div class="card-body">
                <div id="image_bar_chart" class="apex-charts"></div> 
            </div>
        </div>  
    </div>
</div>
@endsection

@section('script')
    <script src="https://apexcharts.com/samples/assets/stock-prices.js"></script>
    @vite([ 'resources/js/pages/apexcharts-bar.init.js'])
@endsection