@extends('layouts.vertical', ['title' => 'Progress'])

@section('content')
<div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-semibold m-0">Progress</h4>
    </div>

    <div class="text-end">
        <ol class="breadcrumb m-0 py-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Components</a></li>
            <li class="breadcrumb-item active">Progress</li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-xl-6">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Default Progress</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class>
                    <div class="progress mt-0" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar" style="width: 0%"></div>
                    </div>
                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar" style="width: 25%"></div>
                    </div>
                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar" style="width: 50%"></div>
                    </div>
                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar" style="width: 75%"></div>
                    </div>
                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar" style="width: 100%"></div>
                    </div>
                </div>
            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col -->

    <!-- Backgrounds Progress -->
    <div class="col-xl-6">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Backgrounds Progress</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class>
                    <div class="progress mt-0" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar text-bg-primary" style="width: 25%"></div>
                    </div>
                    <div class="progress" role="progressbar" aria-label="Info example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar text-bg-secondary" style="width: 50%"></div>
                    </div>
                    <div class="progress" role="progressbar" aria-label="Warning example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar text-bg-success" style="width: 75%"></div>
                    </div>
                    <div class="progress" role="progressbar" aria-label="Danger example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar bg-danger" style="width: 100%"></div>
                    </div>
                    <div class="progress" role="progressbar" aria-label="Danger example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar bg-warning" style="width: 85%"></div>
                    </div>
                    <div class="progress" role="progressbar" aria-label="Danger example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar bg-info" style="width: 65%"></div>
                    </div>
                    <div class="progress" role="progressbar" aria-label="Danger example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar bg-dark" style="width: 33%"></div>
                    </div>
                </div>
            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col -->


    <!-- Multiple Progress Bars -->
    <div class="col-xl-6">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Striped</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="progress mt-0" role="progressbar" aria-label="Default striped example" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-striped" style="width: 10%"></div>
                    </div>
                    <div class="progress" role="progressbar" aria-label="Success striped example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-striped bg-success" style="width: 25%"></div>
                    </div>
                    <div class="progress" role="progressbar" aria-label="Info striped example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-striped bg-info" style="width: 50%"></div>
                    </div>
                    <div class="progress" role="progressbar" aria-label="Warning striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-striped bg-warning" style="width: 75%"></div>
                    </div>
                    <div class="progress" role="progressbar" aria-label="Danger striped example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-striped bg-danger" style="width: 100%"></div>
                    </div>
            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col -->

    <!-- Height Progress Bars -->
    <div class="col-xl-6">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Height</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="progress mb-2" style="height: 1px;">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="progress mb-2" style="height: 3px;">
                    <div class="progress-bar" role="progressbar" style="width: 25%; height: 20px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="progress mb-2 progress-sm">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="progress mb-2 progress-md">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="progress progress-lg mb-2">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="progress progress-xl">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 38%" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col -->

    <!-- Multiple Progress Bars -->
    <div class="col-xl-6">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Multiple Progress Bars</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="progress mt-0">
                    <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col -->

    <!-- Width -->
    <div class="col-xl-6">
        <div class="card">
            
            <div class="card-header">
                <h5 class="card-title mb-0">Width</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="progress mt-0" role="progressbar" aria-label="Basic example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar w-75"></div>
                </div>
            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col -->

    <!-- Labels -->
    <div class="col-xl-6">
        <div class="card">
            
            <div class="card-header">
                <h5 class="card-title mb-0">Progess With Labels</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="progress mt-0" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar" style="width: 25%">25%</div>
                </div>
            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col -->

    <!-- Animated Stripes -->
    <div class="col-xl-6">
        <div class="card">
            
            <div class="card-header">
                <h5 class="card-title mb-0">Animated Stripes</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="progress mt-0" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 75%"></div>
                </div>
            </div> <!-- end card-body -->

        </div> <!-- end card-->
    </div> <!-- end col -->

</div> <!-- end row -->
@endsection