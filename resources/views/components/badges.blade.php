@extends('layouts.vertical', ['title' => 'Badges'])

@section('content')
<div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-semibold m-0">Badges</h4>
    </div>

    <div class="text-end">
        <ol class="breadcrumb m-0 py-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Components</a></li>
            <li class="breadcrumb-item active">Badges</li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Default Badges</h5>
            </div><!-- end card header -->

            <div class="card-body">

                <span class="badge text-bg-primary">Primary</span>
                <span class="badge text-bg-secondary">Secondary</span>
                <span class="badge text-bg-success">Success</span>
                <span class="badge text-bg-danger">Danger</span>
                <span class="badge text-bg-warning">Warning</span>
                <span class="badge text-bg-info">Info</span>
                <span class="badge text-bg-light">Light</span>
                <span class="badge text-bg-dark">Dark</span>

            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col -->


    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Pill Badges</h5>
            </div><!-- end card header -->

            <div class="card-body">

                <span class="badge rounded-pill text-bg-primary">Primary</span>
                <span class="badge rounded-pill text-bg-secondary">Secondary</span>
                <span class="badge rounded-pill text-bg-success">Success</span>
                <span class="badge rounded-pill text-bg-danger">Danger</span>
                <span class="badge rounded-pill text-bg-warning">Warning</span>
                <span class="badge rounded-pill text-bg-info">Info</span>
                <span class="badge rounded-pill text-bg-light">Light</span>
                <span class="badge rounded-pill text-bg-dark">Dark</span>
                
            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col -->

    <div class="col-xl-6">
        <div class="row">
            <div class="col-xl-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Positioned Badges</h5>
                    </div><!-- end card header -->
    
                    <div class="card-body">

                        <div class="d-flex flex-wrap gap-3">
                            <button type="button" class="btn btn-primary position-relative">
                                Mails
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                99+
                                <span class="visually-hidden">unread messages</span>
                                </span>
                            </button>

                            <button type="button" class="btn btn-success position-relative">
                                Alerts
                                <span class="position-absolute top-0 start-100 translate-middle p-1 bg-danger border border-light rounded-circle">
                                <span class="visually-hidden">New alerts</span>
                                </span>
                            </button>
                        </div>

                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col-->
    
            <div class="col-xl-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Buttons Badges</h5>
                    </div><!-- end card header -->
    
                    <div class="card-body">
                        <button type="button" class="btn btn-primary">
                            Notifications <span class="badge text-bg-secondary">4</span>
                        </button>
                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col-->
            
        </div> <!-- end row-->
    </div> <!-- end col -->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Badges With Headings</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <h1>Example heading <span class="badge text-bg-secondary">New</span></h1>
                <h2>Example heading <span class="badge text-bg-secondary">New</span></h2>
                <h3>Example heading <span class="badge text-bg-secondary">New</span></h3>
                <h4>Example heading <span class="badge text-bg-secondary">New</span></h4>
                <h5>Example heading <span class="badge text-bg-secondary">New</span></h5>
                <h6 class="mb-0">Example heading <span class="badge text-bg-secondary">New</span></h6>
            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col -->

</div> <!-- end row -->
@endsection