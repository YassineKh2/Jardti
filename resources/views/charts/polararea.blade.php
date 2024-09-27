@extends('layouts.vertical', ['title' => 'Polararea Charts'])

@section('content')
<div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-semibold m-0">Polar Area Charts</h4>
    </div>

    <div class="text-end">
        <ol class="breadcrumb m-0 py-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Charts</a></li>
            <li class="breadcrumb-item active">Polararea Charts</li>
        </ol>
    </div>
</div>


<div class="row">
    <!-- Basic Polar Area Charts -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Basic Polararea Chart</h5>
            </div>

            <div class="card-body">
                <div id="basic_polar_chart" class="apex-charts"></div> 
            </div>
        </div>  
    </div>

    <!-- Monochrome Charts -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Monochrome Polararea Chart</h5>
            </div>

            <div class="card-body">
                <div id="monochrome_polar_chart" class="apex-charts"></div> 
            </div>
        </div>  
    </div>

</div>
@endsection

@section('script')
    @vite([ 'resources/js/pages/apexcharts-polararea.init.js'])
@endsection