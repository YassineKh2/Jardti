@extends('layouts.vertical', ['title' => 'Vector Map'])

@section('css')
    @vite(['node_modules/jsvectormap/dist/jsvectormap.min.css'])
@endsection

@section('content')
<div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-semibold m-0">Vector</h4>
    </div>

    <div class="text-end">
        <ol class="breadcrumb m-0 py-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Maps</a></li>
            <li class="breadcrumb-item active">Vector</li>
        </ol>
    </div>
</div>

<div class="row">
    <!-- Basic Polar Area Charts -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Markers</h5>
            </div>
            <div class="card-body">
                <div id="world-mapline-markers"  style="height: 420px"></div>
            </div>
        </div>  
    </div>

    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">World Vector Map with Markers</h5>
            </div>
            <div class="card-body">
                <div id="world-map-markers" data-colors='["#dee2e6"]' style="height: 420px"></div>
            </div>
        </div>  
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">World Vector Map with Image Markers</h5>
            </div>
            <div class="card-body">
                <div id="world-map-markers-image" data-colors='["#f0f4f7"]' style="height: 420px"></div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">USA (Merc En) Vector Map</h5>
            </div>
            <div class="card-body">
                <div id="usa-vectormap" data-colors='["#f0f4f7"]' style="height: 420px"></div>
            </div>
        </div>  
    </div>

    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Canada Vector Map</h5>
            </div>
            <div class="card-body">
                <div id="canada-vectormap" data-colors='["#f0f4f7"]' style="height: 420px"></div>
            </div>
        </div>  
    </div>

    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Russia Vector Map</h5>
            </div>
            <div class="card-body">
                <div id="russia-vectormap" data-colors='["#f0f4f7"]' style="height: 420px"></div>
            </div>
        </div>  
    </div>

    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Spain Vector Map</h5>
            </div>
            <div class="card-body">
                <div id="spain-vectormap" data-colors='["#f0f4f7"]' style="height: 420px"></div>
            </div>
        </div>  
    </div>

    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Iraq Vector Map</h5>
            </div>
            <div class="card-body">
                <div id="iraq-vectormap" data-colors='["#f0f4f7"]' style="height: 420px"></div>
            </div>
        </div>  
    </div>

    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">US (Lcc-En) Vector Map</h5>
            </div>
            <div class="card-body">
                <div id="us-lcc-vectormap" style="height: 420px"></div>
            </div>
        </div>  
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">US (Mill En) Vector Map</h5>
            </div>
            <div class="card-body">
                <div id="us-mill-vectormap" style="height: 420px"></div>
            </div>






            
        </div>  
    </div>
</div>
@endsection

@section('script')
    @vite(['resources/js/pages/vector-maps.init.js', 'resources/js/pages/iraq-map.js', 'resources/js/pages/canada-map.js', 'resources/js/pages/russia-map.js', 'resources/js/pages/spain-map.js', 'resources/js/pages/us-mill-en-map.js', 'resources/js/pages/us-lcc-en-map.js', 'resources/js/pages/us-merc-en-map.js'])
@endsection