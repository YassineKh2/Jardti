@extends('layouts.vertical', ['title' => 'Embed Video'])

@section('content')
<div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-semibold m-0">Video</h4>
    </div>

    <div class="text-end">
        <ol class="breadcrumb m-0 py-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Components</a></li>
            <li class="breadcrumb-item active">Video</li>
        </ol>
    </div>
</div>


<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Ratio Video 16:9</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/O151OAc3nqQ" title="YouTube video" allowfullscreen></iframe>
                </div>
            </div>
        </div> <!-- end card-->

        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Ratio Video 21:9</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="ratio ratio-21x9">
                    <iframe src="https://www.youtube.com/embed/7CN1A4vVlvk" title="YouTube video" allowfullscreen></iframe>
                </div>
            </div>
        </div> <!-- end card-->

        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Ratio Video 4:3</h5>
            </div><!-- end card header -->
            
            <div class="card-body">
                <div class="ratio ratio-4x3">
                    <iframe src="https://www.youtube.com/embed/quF1NirPrcU" title="YouTube video" allowfullscreen></iframe>
                </div>
            </div>    
        </div> <!-- end card-->
        
    </div> <!-- end col -->


    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Ratio Video 1:1</h5>
            </div>
            
            <div class="card-body">
                <div class="ratio ratio-1x1">
                    <iframe src="https://www.youtube.com/embed/5Sud0wrUGlI" title="YouTube video" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Custom ratios</h5>
            </div>

            <div class="card-body">
                <div class="ratio" style="--bs-aspect-ratio: 50%;">
                    <iframe src="https://www.youtube.com/embed/zr-C5fN4-j0" title="YouTube video" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div> <!-- end col -->
</div>
@endsection