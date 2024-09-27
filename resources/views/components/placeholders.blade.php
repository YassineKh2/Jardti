@extends('layouts.vertical', ['title' => 'Placeholders'])

@section('content')
<div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-semibold m-0">Placeholders</h4>
    </div>

    <div class="text-end">
        <ol class="breadcrumb m-0 py-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Components</a></li>
            <li class="breadcrumb-item active">Placeholders</li>
        </ol>
    </div>
</div>


<div class="row">

    <!-- Default Placeholders -->
    <div class="col-xl-6">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Default Placeholders</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card mb-0">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#20c997"></rect></svg>
                            
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card mb-0" aria-hidden="true">

                            <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect></svg>

                            <div class="card-body">
                                <h5 class="card-title placeholder-glow">
                                    <span class="placeholder col-6"></span>
                                </h5>
                                <p class="card-text placeholder-glow">
                                    <span class="placeholder col-7"></span>
                                    <span class="placeholder col-4"></span>
                                    <span class="placeholder col-4"></span>
                                    <span class="placeholder col-6"></span>
                                    <span class="placeholder col-8"></span>
                                </p>
                                <a class="btn btn-primary disabled placeholder col-6" aria-disabled="true"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col -->

    <div class="col-xl-6">
        <div class="row">
            <!-- Color Placeholders -->
            <div class="col-12">
                <div class="card">

                    <div class="card-header">
                        <h5 class="card-title mb-0">Color</h5>
                    </div><!-- end card header -->

                    <div class="card-body">
                        <span class="placeholder col-12"></span>
                        <span class="placeholder col-12 bg-primary"></span>
                        <span class="placeholder col-12 bg-secondary"></span>
                        <span class="placeholder col-12 bg-success"></span>
                        <span class="placeholder col-12 bg-danger"></span>
                        <span class="placeholder col-12 bg-warning"></span>
                        <span class="placeholder col-12 bg-info"></span>
                        <span class="placeholder col-12 bg-light"></span>
                        <span class="placeholder col-12 bg-dark"></span>
                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div>

            <!-- Sizing Placeholders -->
            <div class="col-12">
                <div class="card">

                    <div class="card-header">
                        <h5 class="card-title mb-0">Sizing</h5>
                    </div><!-- end card header -->

                    <div class="card-body">
                        <span class="placeholder col-12 placeholder-lg"></span>
                        <span class="placeholder col-12"></span>
                        <span class="placeholder col-12 placeholder-sm"></span>
                        <span class="placeholder col-12 placeholder-xs"></span>
                    </div> <!-- end card-body -->
                    
                </div> <!-- end card-->
            </div>

        </div>
    </div> <!-- end col -->

    <!-- Width Placeholders -->
    <div class="col-xl-6">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Width Placeholders</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <span class="placeholder col-6"></span>
                <span class="placeholder w-75"></span>
                <span class="placeholder" style="width: 25%;"></span>
            </div> <!-- end card-body -->

        </div> <!-- end card-->
    </div> <!-- end col -->

    <!-- How it works Placeholders -->
    <div class="col-xl-6">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">How IT Works</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <p aria-hidden="true">
                    <span class="placeholder col-6"></span>
                </p>
                    
                <a class="btn btn-primary disabled placeholder col-4" aria-disabled="true"></a>
            </div> <!-- end card-body -->
            
        </div> <!-- end card-->
    </div> <!-- end col -->

    <!-- Animation Placeholders Glow -->
    <div class="col-xl-6">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Animation Placeholder Glow</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <p class="placeholder-glow">
                    <span class="placeholder col-12"></span>
                </p>
            </div> <!-- end card-body -->
            
        </div> <!-- end card-->
    </div> <!-- end col -->


    <!-- Animation Placeholders wave -->
    <div class="col-xl-6">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Animation Placeholder wave</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <p class="placeholder-wave">
                    <span class="placeholder col-12"></span>
                </p>
            </div> <!-- end card-body -->
            
        </div> <!-- end card-->
    </div> <!-- end col -->
</div> <!-- end row -->
@endsection