@extends('layouts.vertical', ['title' => 'Offcanvas'])

@section('content')

<div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-semibold m-0">Offcanvas</h4>
    </div>

    <div class="text-end">
        <ol class="breadcrumb m-0 py-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Extended UI</a></li>
            <li class="breadcrumb-item active">Offcanvas</li>
        </ol>
    </div>
</div>

<!-- Start Offcanvas -->
<div class="row">
    <div class="col-xl-4">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Offcanvas</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="d-flex flex-wrap gap-2">
                    <a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                        Link with href
                    </a>
                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                        Button with data-bs-target
                    </button>
                </div>

                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <div>
                            Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
                        </div>
                        <div class="dropdown mt-3">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                Dropdown button
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div> <!-- end card-body -->
            
        </div> <!-- end card-->
    </div> <!-- end col -->

    <div class="col-xl-4">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Offcanvas Backdrop</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="d-flex flex-wrap gap-2">

                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">Enable body scrolling</button>
                    <button class="btn btn-primary mt-2 mt-md-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBackdrop" aria-controls="offcanvasWithBackdrop">Enable (default)</button>
                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">Enable both scrolling & backdrop</button>

                </div>

                <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Offcanvas with body scrolling</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <p>Try scrolling the rest of the page to see this option in action.</p>
                    </div>
                </div>

                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasWithBackdrop" aria-labelledby="offcanvasWithBackdropLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasWithBackdropLabel">Offcanvas with backdrop</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div> <!-- end offcanvas-header-->

                    <div class="offcanvas-body">
                        <div>
                            Some text as placeholder. In real life you can have the elements you have chosen. Like, text,
                            images, lists, etc.
                        </div>
                        <h5 class="mt-3">List</h5>
                        <ul class="ps-3">
                            <li class="">Nemo enim ipsam voluptatem quia aspernatur</li>
                            <li class="">Neque porro quisquam est, qui dolorem</li>
                            <li class="">Quis autem vel eum iure qui in ea</li>
                        </ul>

                        <ul class="ps-3">
                            <li class="">At vero eos et accusamus et iusto odio dignissimos</li>
                            <li class="">Et harum quidem rerum facilis</li>
                            <li class="">Temporibus autem quibusdam et aut officiis</li>
                        </ul>
                    </div> <!-- end offcanvas-body-->
                </div> <!-- end offcanvas-->


                <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Backdrop with scrolling</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <p>Try scrolling the rest of the page to see this option in action.</p>
                    </div>
                    </div>
            </div> <!-- end card-body -->
            
        </div> <!-- end card-->
    </div> <!-- end col -->

    <div class="col-xl-4">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Dark Offcanvas</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="d-flex flex-wrap gap-2">
                    <button class="btn btn-primary mt-2 mt-md-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDark" aria-controls="offcanvasDark">Dark offcanvas</button>
                </div>

                <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDark" aria-labelledby="offcanvasDarkLabel">
                    <div class="offcanvas-header">
                        <h5 id="offcanvasDarkLabel">Dark Offcanvas</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div> <!-- end offcanvas-header-->

                    <div class="offcanvas-body">
                        <div>
                            Some text as placeholder. In real life you can have the elements you have chosen. Like, text,
                            images, lists, etc.
                        </div>
                        <h5 class="mt-3">List</h5>
                        <ul class="ps-3">
                            <li class="">Nemo enim ipsam voluptatem quia aspernatur</li>
                            <li class="">Neque porro quisquam est, qui dolorem</li>
                            <li class="">Quis autem vel eum iure qui in ea</li>
                        </ul>
                    </div> <!-- end offcanvas-body-->
                </div> <!-- end offcanvas-->

            </div> <!-- end card-body -->
            
        </div> <!-- end card-->
    </div> <!-- end col -->

    <div class="col-xl-4">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Placement Offcanvas</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="d-flex flex-wrap gap-2">
                    <button class="btn btn-primary mt-2 mt-md-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">Toggle Top offcanvas</button>
                    <button class="btn btn-primary mt-2 mt-md-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Toggle right offcanvas</button>
                    <button class="btn btn-primary mt-2 mt-md-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">Toggle bottom offcanvas</button>
                    <button class="btn btn-primary mt-2 mt-lg-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasLeft" aria-controls="offcanvasLeft">Toggle Left offcanvas</button>
                </div>

                <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasTopLabel">Offcanvas top</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <div>
                            Some text as placeholder. In real life you can have the elements you have chosen. Like, text,
                            images, lists, etc.
                        </div>
                        <h5 class="mt-3">List</h5>
                        <ul class="ps-3">
                            <li class="">Nemo enim ipsam voluptatem quia aspernatur</li>
                            <li class="">Neque porro quisquam est, qui dolorem</li>
                            <li class="">Quis autem vel eum iure qui in ea</li>
                        </ul>
                    </div>
                </div>

                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                    <div class="offcanvas-header">
                        <h5 id="offcanvasRightLabel">Offcanvas right</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div> <!-- end offcanvas-header-->

                    <div class="offcanvas-body">
                        <div>
                            Some text as placeholder. In real life you can have the elements you have chosen. Like, text,
                            images, lists, etc.
                        </div>
                        <h5 class="mt-3">List</h5>
                        <ul class="ps-3">
                            <li class="">Nemo enim ipsam voluptatem quia aspernatur</li>
                            <li class="">Neque porro quisquam est, qui dolorem</li>
                            <li class="">Quis autem vel eum iure qui in ea</li>
                        </ul>
                    </div> <!-- end offcanvas-body-->
                </div> <!-- end offcanvas-->

                <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Offcanvas bottom</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div> <!-- end offcanvas-header-->

                    <div class="offcanvas-body">
                        <div>
                            Some text as placeholder. In real life you can have the elements you have chosen. Like, text,
                            images, lists, etc.
                        </div>
                        <h5 class="mt-3">List</h5>
                        <ul class="ps-3">
                            <li class="">Nemo enim ipsam voluptatem quia aspernatur</li>
                            <li class="">Neque porro quisquam est, qui dolorem</li>
                            <li class="">Quis autem vel eum iure qui in ea</li>
                        </ul>
                    </div> <!-- end offcanvas-body-->
                </div> <!-- end offcanvas-->

                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasLeft" aria-labelledby="offcanvasLeftLabel">
                    <div class="offcanvas-header">
                        <h5 id="offcanvasLeftLabel">Offcanvas Left</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div> <!-- end offcanvas-header-->

                    <div class="offcanvas-body">
                        <div>
                            Some text as placeholder. In real life you can have the elements you have chosen. Like, text,
                            images, lists, etc.
                        </div>
                        <h5 class="mt-3">List</h5>
                        <ul class="ps-3">
                            <li class="">Nemo enim ipsam voluptatem quia aspernatur</li>
                            <li class="">Neque porro quisquam est, qui dolorem</li>
                            <li class="">Quis autem vel eum iure qui in ea</li>
                        </ul>
                    </div> <!-- end offcanvas-body-->
                </div> <!-- end offcanvas-->
            </div> <!-- end card-body -->
            
        </div> <!-- end card-->
    </div> <!-- end col -->

    <div class="col-xl-4">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Placement Offcanvas</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="d-flex flex-wrap gap-2">
                    <button class="btn btn-primary d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasResponsive" aria-controls="offcanvasResponsive">Toggle offcanvas</button>
                </div>

                <div class="alert alert-info d-none d-lg-block">Resize your browser to show the responsive offcanvas toggle.</div>

                <div class="offcanvas-lg offcanvas-end" tabindex="-1" id="offcanvasResponsive" aria-labelledby="offcanvasResponsiveLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasResponsiveLabel">Responsive offcanvas</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasResponsive" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <p class="mb-0">This is content within an <code>.offcanvas-lg</code>.</p>
                    </div>
                </div>

            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col -->

</div> <!-- end row -->
@endsection