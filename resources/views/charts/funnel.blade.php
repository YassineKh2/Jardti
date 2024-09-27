@extends('layouts.vertical', ['title' => 'Funnel Charts'])

@section('content')

<div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-semibold m-0">Funnel Charts</h4>
    </div>

    <div class="text-end">
        <ol class="breadcrumb m-0 py-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Charts</a></li>
            <li class="breadcrumb-item active">Funnel Charts</li>
        </ol>
    </div>
</div>

<!-- Funnel Charts Charts -->
<div class="row">
    <!-- Basic Funnel Charts Chart -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Funnel Area Chart</h5>
            </div>

            <div class="card-body">
                <div id="funnel_chart" class="apex-charts"></div> 
            </div>
        </div>  
    </div>

    <!-- Pyramid Funnel Chart -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Pyramid Funnel Chart</h5>
            </div>

            <div class="card-body">
                <div id="pyramid_funnel_chart" class="apex-charts"></div> 
            </div>
        </div>  
    </div>
</div>
@endsection

@section('script')
    @vite(['resources/js/pages/apexcharts-funnel.init.js'])
@endsection