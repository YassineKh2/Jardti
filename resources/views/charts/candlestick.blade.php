@extends('layouts.vertical', ['title' => 'Candle Stick Charts'])

@section('content')

<div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-semibold m-0">Candle Stick Charts</h4>
    </div>

    <div class="text-end">
        <ol class="breadcrumb m-0 py-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Charts</a></li>
            <li class="breadcrumb-item active">Candle Stick Charts</li>
        </ol>
    </div>
</div>

<!-- Candle Stick Charts -->
<div class="row">
    <!-- Basic Candlestick Charts -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Basic Candlestick</h5>
            </div>

            <div class="card-body">
                <div id="basic_candlestick_chart" class="apex-charts"></div> 
            </div>
        </div>  
    </div>

    <!-- Combo Candlestick Charts -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Combo Candlestick</h5>
            </div>

            <div class="card-body">
                <div id="combo_candlestick_chart" class="apex-charts"></div> 
                <div id="combo_candlestick_chart1" class="apex-charts"></div> 
            </div>
        </div>  
    </div>
</div>


<div class="row">
    <!-- Line Candlestick Charts -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Line Candlestick</h5>
            </div>

            <div class="card-body">
                <div id="line_candlestick_chart" class="apex-charts"></div> 
            </div>
        </div>  
    </div>
</div>
@endsection

@section('script')
    <script src="https://apexcharts.com/samples/assets/ohlc.js"></script>
    @vite([ 'resources/js/pages/apexcharts-candlestick.init.js'])
@endsection