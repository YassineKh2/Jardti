@extends('layouts.vertical', ['title' => 'Spinners'])

@section('content')
<div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-semibold m-0">Spinners</h4>
    </div>

    <div class="text-end">
        <ol class="breadcrumb m-0 py-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Components</a></li>
            <li class="breadcrumb-item active">Spinners</li>
        </ol>
    </div>
</div>

<div class="row">
    <!-- Border Spinner -->
    <div class="col-xl-6">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Border Spinner</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="spinner-border m-2" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div> <!-- end card-body -->

        </div> <!-- end card-->
    </div> <!-- end col -->

    <!-- Colors Spinner -->
    <div class="col-xl-6">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Colors Spinner</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="spinner-border text-primary m-2" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <div class="spinner-border text-secondary m-2" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <div class="spinner-border text-success m-2" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <div class="spinner-border text-danger m-2" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <div class="spinner-border text-warning m-2" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <div class="spinner-border text-info m-2" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <div class="spinner-border text-light m-2" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <div class="spinner-border text-dark m-2" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div> <!-- end card-body -->

        </div> <!-- end card-->
    </div> <!-- end col -->

    <!-- Growing Spinner -->
    <div class="col-xl-6">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Growing Spinner</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="spinner-grow m-2" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div> <!-- end card-body -->

        </div> <!-- end card-->
    </div> <!-- end col -->


    <!-- Colors Growing Spinner -->
    <div class="col-xl-6">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Colors Growing Spinner</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="spinner-grow text-primary m-2" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <div class="spinner-grow text-secondary m-2" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <div class="spinner-grow text-success m-2" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <div class="spinner-grow text-danger m-2" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <div class="spinner-grow text-warning m-2" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <div class="spinner-grow text-info m-2" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <div class="spinner-grow text-light m-2" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <div class="spinner-grow text-dark m-2" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div> <!-- end card-body -->

        </div> <!-- end card-->
    </div> <!-- end col -->


    <!-- Alignment -->
    <div class="col-xl-6">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Alignment</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="d-flex justify-content-center">
                    <div class="spinner-border m-2" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
            </div> <!-- end card-body -->

        </div> <!-- end card-->
    </div> <!-- end col -->

    <!-- Placement -->
    <div class="col-xl-6">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Placement</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="clearfix">
                    <div class="spinner-border float-end m-2" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
            </div> <!-- end card-body -->

        </div> <!-- end card-->
    </div> <!-- end col -->

    <!-- Size -->
    <div class="col-xl-6">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Size</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="row justify-content-center align-items-center">

                    <div class="col-md-4 text-center">
                        <div class="spinner-border m-2" style="width: 4rem; height: 4rem;" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        <div class="spinner-grow m-2" style="width: 4rem; height: 4rem;" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>

                    <div class="col-md-4 text-center">
                        <div class="spinner-border spinner-border-xl m-2" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        <div class="spinner-grow spinner-grow-xl m-2" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>

                    <div class="col-md-4 text-center">
                        <div class="spinner-border spinner-border-sm" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        <div class="spinner-grow spinner-grow-sm" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                </div>
                
            </div> <!-- end card-body -->

        </div> <!-- end card-->
    </div> <!-- end col -->

    <!-- Buttons With Spinner -->
    <div class="col-xl-6">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Buttons Spinner</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="d-flex flex-wrap gap-2">
                            <button class="btn btn-primary" type="button" disabled>
                                <span class="spinner-border spinner-border-sm" aria-hidden="true"></span>
                                <span class="visually-hidden" role="status">Loading...</span>
                            </button>
                            <button class="btn btn-primary" type="button" disabled>
                                <span class="spinner-border spinner-border-sm" aria-hidden="true"></span>
                                <span role="status">Loading...</span>
                            </button>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="d-flex flex-wrap gap-2 mt-2 mt-sm-0">
                            <button class="btn btn-primary" type="button" disabled>
                                <span class="spinner-grow spinner-grow-sm" aria-hidden="true"></span>
                                <span class="visually-hidden" role="status">Loading...</span>
                            </button>
                            <button class="btn btn-primary" type="button" disabled>
                                <span class="spinner-grow spinner-grow-sm" aria-hidden="true"></span>
                                <span role="status">Loading...</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div> <!-- end card-body -->

        </div> <!-- end card-->
    </div> <!-- end col -->
    
</div>
@endsection