@extends('layouts.vertical', ['title' => 'Bar Charts'])

@section('content')
<div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-semibold m-0">Mixed Charts</h4>
    </div>

    <div class="text-end">
        <ol class="breadcrumb m-0 py-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Charts</a></li>
            <li class="breadcrumb-item active">Mixed Charts</li>
        </ol>
    </div>
</div>

<!-- Mixed Charts -->
<div class="row">
    <!-- Line Column Mixed Chart -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Line & Column Chart</h5>
            </div>

            <div class="card-body">
                <div id="linecolumn_mixed_chart" class="apex-charts"></div> 
            </div>
        </div>  
    </div>

    <!-- Line && Area Mixed Chart -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Line & Area Chart</h5>
            </div>

            <div class="card-body">
                <div id="line_area_chart" class="apex-charts"></div> 
            </div>
        </div>  
    </div>

    <!-- Line && Column Area Mixed Chart -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Line & Column Area Chart</h5>
            </div>

            <div class="card-body">
                <div id="linecolumn_area_chart" class="apex-charts"></div> 
            </div>
        </div>  
    </div>

    <!-- Line Scatter Mixed Chart -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Line Scatter Chart</h5>
            </div>

            <div class="card-body">
                <div id="scatter_chart" class="apex-charts"></div> 
            </div>
        </div>  
    </div>

</div>

@endsection

@section('script')
    <script src="https://apexcharts.com/samples/assets/stock-prices.js"></script>
    @vite([ 'resources/js/pages/apexcharts-mixed.init.js'])
@endsection