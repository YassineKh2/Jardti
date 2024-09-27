@extends('layouts.vertical', ['title' => 'Collapse'])

@section('content')
<div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-semibold m-0">Collapse</h4>
    </div>

    <div class="text-end">
        <ol class="breadcrumb m-0 py-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Components</a></li>
            <li class="breadcrumb-item active">Collapse</li>
        </ol>
    </div>
</div>

<!-- Start Carousel -->
<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Default Collapse</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="flex-wrap gap-2">
                    <p class="d-inline-flex gap-1 mb-0">
                        <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                            Link with href
                        </a>
                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                            Button with data-bs-target
                        </button>
                    </p>
                    <div class="collapse mt-2" id="collapseExample">
                        <div class="card card-body mb-0">
                            Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                        </div>
                    </div>
                </div>
            </div> <!-- end card-body -->

        </div> <!-- end card-->
    </div> <!-- end col -->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Multiple Toggles And Targets</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="flex-wrap gap-2">
                    <p class="d-inline-flex gap-1 mb-0">
                        <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Toggle first element</a>
                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Toggle second element</button>
                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Toggle both elements</button>
                    </p>
                    <div class="row">
                        <div class="col">
                            <div class="collapse multi-collapse mt-2" id="multiCollapseExample1">
                                <div class="card card-body mb-0">
                                    Some placeholder content for the first collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="collapse multi-collapse mt-2" id="multiCollapseExample2">
                                <div class="card card-body mb-0">
                                    Some placeholder content for the second collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end card-body -->
            
        </div> <!-- end card-->
    </div> <!-- end col -->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Horizontal Collapse</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <p class="mb-0">
                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
                        Toggle width collapse
                    </button>
                </p>
                <div style="min-height: 120px;">
                    <div class="collapse collapse-horizontal" id="collapseWidthExample">
                        <div class="card card-body" style="width: 300px;">
                            This is some placeholder content for a horizontal collapse. It's hidden by default and shown when triggered.
                        </div>
                    </div>
                </div>
            </div> <!-- end card-body -->

        </div> <!-- end card-->
    </div> <!-- end col -->
    
</div> <!-- end row -->
@endsection