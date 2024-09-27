@extends('layouts.vertical', ['title' => 'Bubble Charts'])

@section('content')
<div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-semibold m-0">Bubble Charts</h4>
    </div>

    <div class="text-end">
        <ol class="breadcrumb m-0 py-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Charts</a></li>
            <li class="breadcrumb-item active">Bubble Charts</li>
        </ol>
    </div>
</div>

<!-- Bubble Charts -->
<div class="row">
    <!-- Basic Bubble Charts -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Simple Bubble Chart</h5>
            </div>

            <div class="card-body">
                <div id="simple_bubble_chart" class="apex-charts"></div> 
            </div>
        </div>  
    </div>

    <!-- 3D Bubble Charts -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">3D Bubble Chart</h5>
            </div>

            <div class="card-body">
                <div id="animation_bubble_chart" class="apex-charts"></div> 
            </div>
        </div>  
    </div>
</div>
@endsection

@section('script')
    <script src="https://apexcharts.com/samples/assets/stock-prices.js"></script>
    @vite([ 'resources/js/pages/apexcharts-bubble.init.js'])
@endsection