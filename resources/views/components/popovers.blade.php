@extends('layouts.vertical', ['title' => 'Popovers'])

@section('content')
<div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-semibold m-0">Popovers</h4>
    </div>

    <div class="text-end">
        <ol class="breadcrumb m-0 py-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Components</a></li>
            <li class="breadcrumb-item active">Popovers</li>
        </ol>
    </div>
</div>


<div class="row">

    <!-- Default Popovers -->
    <div class="col-xl-6">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Default Popovers</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <button type="button" class="btn btn-danger" data-bs-toggle="popover" data-bs-title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">Click to toggle popover</button>
            </div> <!-- end card-body -->

        </div> <!-- end card-->
    </div>

    <!-- Custom Popovers -->
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Custom Popovers</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="d-flex flex-wrap gap-2">
                    <button type="button" class="btn btn-primary"
                        data-bs-toggle="popover" data-bs-placement="right"
                        data-bs-custom-class="custom-popover"
                        data-bs-title="Custom popover"
                        data-bs-content="This popover is themed via CSS variables.">
                        Custom popover
                    </button>
                </div>
            </div> <!-- end card-body -->

        </div> <!-- end card-->
    </div> 

    <!-- Four Directions  -->
    <div class="col-xl-6">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Four Directions</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="d-flex flex-wrap gap-2">
                    <button type="button" class="btn btn-primary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Top popover">
                        Popover on top
                    </button>
                    <button type="button" class="btn btn-primary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Right popover">
                        Popover on right
                    </button>
                    <button type="button" class="btn btn-primary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Bottom popover">
                        Popover on bottom
                    </button>
                    <button type="button" class="btn btn-primary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-content="Left popover">
                        Popover on left
                    </button>
                </div>
                
            </div> <!-- end card-body -->

        </div> <!-- end card-->
    </div>

    <!-- Dismiss Click -->
    <div class="col-xl-6">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Dismiss Click</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="d-flex flex-wrap gap-2">
                    <a tabindex="0" class="btn btn-secondary" role="button" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-title="Dismissible popover" data-bs-content="And here's some amazing content. It's very engaging. Right?">Dismissible popover</a>
                </div>
            </div> <!-- end card-body -->

        </div> <!-- end card-->
    </div>

    <!-- Hover Popover -->
    <div class="col-xl-6">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Hover</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="d-flex flex-wrap gap-2">
                    <button type="button" tabindex="0" class="btn btn-success" data-bs-toggle="popover"
                        data-bs-trigger="hover"
                        data-bs-content="And here's some amazing content. It's very engaging. Right?"
                        title="Ohh Wow !"> Please Hover Me 
                    </button>
                </div>
            </div> <!-- end card-body -->

        </div> <!-- end card-->
    </div>

    <!-- Disabled Elements -->
    <div class="col-xl-6">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Disabled Elements</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="d-flex flex-wrap gap-2">
                    <span class="d-inline-block" data-bs-toggle="popover" data-bs-content="Disabled popover">
                        <button class="btn btn-primary" style="pointer-events: none;" type="button" disabled>Disabled button</button>
                    </span>
                </div>
            </div> <!-- end card-body -->

        </div> <!-- end card-->
    </div>

    <!-- Disabled Hover Elements -->
    <div class="col-xl-6">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Disabled Hover Elements</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="d-flex flex-wrap gap-2">
                    <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Disabled popover">
                        <button class="btn btn-primary" type="button" disabled>Disabled button</button>
                    </span>
                </div>
            </div> <!-- end card-body -->

        </div> <!-- end card-->
    </div>
</div>
@endsection