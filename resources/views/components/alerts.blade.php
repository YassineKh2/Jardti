@extends('layouts.vertical', ['title' => 'Alerts'])

@section('content')
<div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-semibold m-0">Alerts</h4>
    </div>

    <div class="text-end">
        <ol class="breadcrumb m-0 py-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Components</a></li>
            <li class="breadcrumb-item active">Alerts</li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-xl-6">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Default Alerts</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="alert alert-primary" role="alert">A simple primary alert—check it out!</div>
                <div class="alert alert-secondary" role="alert">A simple secondary alert—check it out!</div>
                <div class="alert alert-success" role="alert">A simple success alert—check it out!</div>
                <div class="alert alert-danger" role="alert">A simple danger alert—check it out!</div>
                <div class="alert alert-warning" role="alert">A simple warning alert—check it out!</div>
                <div class="alert alert-info" role="alert">A simple info alert—check it out!</div>
                <div class="alert alert-light" role="alert">A simple light alert—check it out!</div>
                <div class="alert alert-dark mb-0" role="alert">A simple dark alert—check it out!</div>
            </div> <!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-6">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Dismissing Alerts</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    A simple primary alert—check it out!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">  
                    </button>
                </div>
                <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                    A simple secondary alert—check it out!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    A simple success alert—check it out!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    A simple danger alert—check it out!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    A simple warning alert—check it out!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    A simple info alert—check it out!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <div class="alert alert-light alert-dismissible fade show" role="alert">
                    A simple light alert—check it out!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <div class="alert alert-dark alert-dismissible fade show mb-0" role="alert">
                    A simple dark alert—check it out!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div> <!-- end card body -->

        </div><!-- end card -->
    </div><!-- end col -->
</div> <!-- end row -->

<!-- Start Alerts Link Color && Outline Alerts -->
<div class="row">
    <div class="col-xl-6">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Alerts Link Color</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="alert alert-primary" role="alert">
                    A simple primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                </div>
                <div class="alert alert-secondary" role="alert">
                    A simple secondary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                </div>
                <div class="alert alert-success" role="alert">
                    A simple success alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                </div>
                <div class="alert alert-danger" role="alert">
                    A simple danger alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                </div>
                <div class="alert alert-warning" role="alert">
                    A simple warning alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                </div>
                <div class="alert alert-info" role="alert">
                    A simple info alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                </div>
                <div class="alert alert-light" role="alert">
                    A simple light alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                </div>
                <div class="alert alert-dark mb-0" role="alert">
                    A simple dark alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                </div>
            </div> <!-- end card body -->

        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-6">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Outline Alerts</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="alert alert-primary alert-outline  text-primary alert-dismissible fade show" role="alert">
                    <i class="mdi mdi-account-circle-outline me-2"></i>
                    A simple primary alert—check it out!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <div class="alert alert-secondary alert-outline text-secondary alert-dismissible fade show" role="alert">
                    <i class="mdi mdi-pencil-outline"></i>
                    A simple secondary alert—check it out!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <div class="alert alert-success alert-outline text-success alert-dismissible fade show" role="alert">
                    <i class="mdi mdi-check me-2"></i>
                    A simple success alert—check it out!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <div class="alert alert-danger alert-outline text-danger alert-dismissible fade show" role="alert">
                    <i class="mdi mdi-bag-personal me-2"></i>
                    A simple danger alert—check it out!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <div class="alert alert-warning alert-outline  text-warning alert-dismissible fade show" role="alert">
                    <i class="mdi mdi-alert-octagon-outline  me-2"></i>
                    A simple warning alert—check it out!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <div class="alert alert-info alert-outline text-info alert-dismissible fade show" role="alert">
                    <i class="mdi mdi-triangle-outline me-2"></i>
                    A simple info alert—check it out!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <div class="alert alert-light alert-outline alert-dismissible fade show" role="alert">
                    <i class="mdi mdi-help-circle-outline me-2"></i>
                    A simple light alert—check it out!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <div class="alert alert-dark alert-outline alert-dismissible fade show mb-0" role="alert">
                    <i class="mdi mdi-weather-night me-2"></i>
                    A simple dark alert—check it out!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div> <!-- end card body -->

        </div><!-- end card -->
    </div><!-- end col -->
</div>
<!-- End Alerts Link Color && Outline Alerts -->

<!-- Start Additional Content -->
<div class="row">
    <div class="col-xl-12 col-md-12">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Additional Content</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div>
                    <div class="alert alert-primary mb-0" role="alert">
                        <h4 class="alert-heading">Well done!</h4>
                        <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                        <hr>
                        <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                    </div>
                </div>
            </div> <!-- end card body -->

        </div><!-- end card -->
    </div><!-- end col -->
</div>
<!-- End Additional Content -->
@endsection