@extends('layouts.vertical', ['title' => 'Pie Chart'])

@section('content')
<div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-semibold m-0">Pie Chart</h4>
    </div>

    <div class="text-end">
        <ol class="breadcrumb m-0 py-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Charts</a></li>
            <li class="breadcrumb-item active">Pie Charts</li>
        </ol>
    </div>
</div>

<!-- Simple Pie Charts -->
<div class="row">
    <!-- Simple Pie Charts -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Simple Pie Chart</h5>
            </div>

            <div class="card-body">
                <div id="simple_pie_chart" class="apex-charts"></div> 
            </div>
        </div>  
    </div>

    <!-- Simple Donut Charts -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Simple Donut Chart</h5>
            </div>

            <div class="card-body">
                <div id="simple_donut_chart" class="apex-charts"></div> 
            </div>
        </div>  
    </div>

    <!-- Monochrome Pie Charts -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Monochrome Pie Chart</h5>
            </div>

            <div class="card-body">
                <div id="monochrome_pie_chart" class="apex-charts"></div>
            </div>

        </div>  
    </div>

    <!-- Gradient Donut Pie Charts -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Gradient Donut Pie Chart</h5>
            </div>

            <div class="card-body">
                <div id="gradient_donut_pie_chart" class="apex-charts"></div> 
            </div>
        </div>  
    </div>

    <!-- Semi Donut Pie Charts -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Semi Donut Pie Chart</h5>
            </div>

            <div class="card-body">
                <div id="semi_donut_pie_chart" class="apex-charts"></div> 
            </div>
        </div>  
    </div>

    <!-- Donut with Pattern Charts -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Donut with Pattern Chart</h5>
            </div>

            <div class="card-body">
                <div id="pattern_donut_pie_chart" class="apex-charts"></div> 
            </div>
        </div>  
    </div>

</div>
@endsection

@section('script')
    @vite([ 'resources/js/pages/apexcharts-pie.init.js'])
@endsection