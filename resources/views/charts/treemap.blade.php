@extends('layouts.vertical', ['title' => 'Treemaps Charts'])

@section('content')
<div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-semibold m-0">Treemaps Charts</h4>
    </div>

    <div class="text-end">
        <ol class="breadcrumb m-0 py-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Charts</a></li>
            <li class="breadcrumb-item active">Treemaps Charts</li>
        </ol>
    </div>
</div>

<!-- Treemap Charts -->
<div class="row">
    <!-- Basic  Treemap Charts -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Basic Treemap Chart</h5>
            </div>

            <div class="card-body">
                <div id="basic_treemap_chart" class="apex-charts"></div> 
            </div>
        </div>  
    </div>

    <!-- Multiple Series Charts -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Multiple Series Chart</h5>
            </div>

            <div class="card-body">
                <div id="multi_series_chart" class="apex-charts"></div> 
            </div>
        </div>  
    </div>

    <!-- Color Range Charts -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Color Range Chart</h5>
            </div>

            <div class="card-body">
                <div id="color_range_chart" class="apex-charts"></div> 
            </div>
        </div>  
    </div>

    <!-- Distributed Treemap Charts -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Distributed Treemap Charts (Different Color for each Cell)</h5>
            </div>

            <div class="card-body">
                <div id="distributed_treemap_chart" class="apex-charts"></div> 
            </div>
        </div>  
    </div>

</div>
@endsection

@section('script')
    @vite([ 'resources/js/pages/apexcharts-treemap.init.js'])
@endsection