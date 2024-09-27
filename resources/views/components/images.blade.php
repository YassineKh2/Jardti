@extends('layouts.vertical', ['title' => 'Images'])

@section('content')
<div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-semibold m-0">Images</h4>
    </div>

    <div class="text-end">
        <ol class="breadcrumb m-0 py-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Components</a></li>
            <li class="breadcrumb-item active">Images</li>
        </ol>
    </div>
</div>


<div class="row">
    <div class="col-xl-6">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Image Thumbnails</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="row align-items-center">

                    <div class="col-xl-6">
                        <img src="/images/small/img-6.jpg" class="img-thumbnail img-fluid" alt="Thumbnails" data-holder-rendered="true" width="200">
                        <p class="mt-2 mb-lg-0"><code>.img-thumbnail</code></p>
                    </div>

                    <div class="col-xl-6">
                        <img src="/images/users/user-5.jpg" class="img-thumbnail rounded-circle avatar-xl img-fluid" alt="Thumbnails">
                        <p class="mt-2 mb-lg-0"><code>.img-thumbnail</code></p>
                    </div>

                </div>
            </div> <!-- end card-body -->

        </div> <!-- end card-->
    </div> <!-- end col -->

    <!-- Image Thumbnails -->
    <div class="col-xl-6">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Image Rounded & Circle</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="row align-items-center">

                    <div class="col-xl-6">
                        <img src="/images/small/img-1.jpg" class="img-fluid rounded" alt="Thumbnails" data-holder-rendered="true" width="200">
                        <p class="mt-2 mb-lg-0"><code>.rounded</code></p>
                    </div>

                    <div class="col-xl-6">
                        <img src="/images/users/user-6.jpg" class="img-fluid rounded-circle avatar-xl" alt="Thumbnails">
                        <p class="mt-2 mb-lg-0"><code>.rounded-circle</code></p>
                    </div>

                </div>
            </div> <!-- end card-body -->

        </div> <!-- end card-->
    </div> <!-- end col -->

</div>

<!-- Media Object -->
<div class="row">
    <!-- Media Object Default -->
    <div class="col-xl-4">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Media Object Default</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="d-flex">
                    <div class="flex-shrink-0">
                        <img src="/images/users/user-4.jpg" class="avatar-sm rounded" alt="flex shrink">
                    </div>
                    <div class="flex-grow-1 ms-3">
                        This is some content from a media component. You can replace this with any content and adjust it as needed.
                    </div>
                </div>
            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col -->

    <!-- Media Object Default / Center -->
    <div class="col-xl-4">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Media Object Center</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <img src="/images/users/user-4.jpg" class="avatar-sm rounded" alt="flex shrink">
                    </div>
                    <div class="flex-grow-1 ms-3">
                        This is some content from a media component. You can replace this with any content and adjust it as needed.
                    </div>
                </div>
            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col -->

    <!-- Media Object Bottom -->
    <div class="col-xl-4">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Media Object Bottom</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="d-flex align-items-end">
                    <div class="flex-shrink-0">
                        <img src="/images/users/user-4.jpg" class=" avatar-sm rounded" alt="flex shrink">
                    </div>
                    <div class="flex-grow-1 ms-3">
                        This is some content from a media component. You can replace this with any content and adjust it as needed.
                    </div>
                </div>
            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col -->
</div>

<!-- Responsive Images -->
<div class="row">
    <div class="col-xl-12">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Responsive Images</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="">
                    <img src="/images/small/responsive.jpg" class="img-fluid" alt="Responsive image">
                </div>
            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col -->
</div>

<div class="row">
    <div class="col-xl-6">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Figures</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <figure class="figure">
                    <img src="/images/small/img-1.jpg" class="img-fluid figure-img rounded" alt="Figure img">
                    <figcaption class="figure-caption">A caption for the above image.</figcaption>
                </figure>
            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col -->

    <div class="col-xl-6">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Figures</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <figure class="figure">
                    <img src="/images/small/img-7.jpg" class="img-fluid figure-img rounded" alt="Figure img">
                    <figcaption class="figure-caption text-end">A caption for the above image.</figcaption>
                </figure>
            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col -->
</div>

<div class="row">
    <div class="col-xl-12">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Rounded Circle Image Sizes</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-2">
                        <div>
                            <img src="/images/users/user-11.jpg" alt="" class="img-fluid rounded-circle avatar-xs">
                            <p class="mt-2 mb-lg-0"><code>.avatar-xs</code></p>
                        </div>
                    </div><!-- end col -->
                    <div class="col-lg-2">
                        <div>
                            <img src="/images/users/user-2.jpg" alt="" class="img-fluid rounded-circle avatar-sm">
                            <p class="mt-2  mb-lg-0"><code>.avatar-sm</code></p>
                        </div>
                    </div><!-- end col -->
                    <div class="col-lg-2">
                        <div>
                            <img src="/images/users/user-3.jpg" alt="" class="img-fluid rounded-circle avatar-md">
                            <p class="mt-2 mb-lg-0"><code>.avatar</code></p>
                        </div>
                    </div><!-- end col -->
                    <div class="col-lg-2">
                        <div>
                            <img src="/images/users/user-4.jpg" alt="" class="img-fluid rounded-circle avatar-lg">
                            <p class="mt-2 mb-lg-0"><code>.avatar-md</code></p>
                        </div>
                    </div><!-- end col -->
                    <div class="col-lg-2">
                        <div>
                            <img src="/images/users/user-5.jpg" alt="" class="img-fluid rounded-circle avatar-xl">
                            <p class="mt-2 mb-lg-0"><code>.avatar-lg</code></p>
                        </div>
                    </div><!-- end col -->
                    <div class="col-lg-2">
                        <div>
                            <img src="/images/users/user-6.jpg" alt="" class="img-fluid rounded-circle avatar">
                            <p class="mt-2 mb-lg-0"><code>.avatar-xl</code></p>
                        </div>
                    </div><!-- end col -->
                </div>
            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col -->
</div>

<div class="row">
    <div class="col-xl-12">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Rounded Image Sizes</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="row">
                    <div class="col-lg-2">
                        <div>
                            <img src="/images/users/user-4.jpg" alt="" class="img-fluid rounded avatar-xs">
                            <p class="mt-2 mb-lg-0"><code>.avatar-xs</code></p>
                        </div>
                    </div><!-- end col -->
                    <div class="col-lg-2">
                        <div>
                            <img src="/images/users/user-6.jpg" alt="" class="img-fluid rounded avatar-sm">
                            <p class="mt-2  mb-lg-0"><code>.avatar-sm</code></p>
                        </div>
                    </div><!-- end col -->
                    <div class="col-lg-2">
                        <div>
                            <img src="/images/users/user-3.jpg" alt="" class="img-fluid rounded avatar-md">
                            <p class="mt-2 mb-lg-0"><code>.avatar</code></p>
                        </div>
                    </div><!-- end col -->
                    <div class="col-lg-2">
                        <div>
                            <img src="/images/users/user-2.jpg" alt="" class="img-fluid rounded avatar-lg">
                            <p class="mt-2 mb-lg-0"><code>.avatar-md</code></p>
                        </div>
                    </div><!-- end col -->
                    <div class="col-lg-2">
                        <div>
                            <img src="/images/users/user-5.jpg" alt="" class="img-fluid rounded avatar-xl">
                            <p class="mt-2 mb-lg-0"><code>.avatar-lg</code></p>
                        </div>
                    </div><!-- end col -->
                    <div class="col-lg-2">
                        <div>
                            <img src="/images/users/user-9.jpg" alt="" class="img-fluid rounded avatar">
                            <p class="mt-2 mb-lg-0"><code>.avatar-xl</code></p>
                        </div>
                    </div><!-- end col -->
                </div>
            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col -->
</div>

<div class="row">
    <div class="col-xl-6">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Aligning Image</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="row align-items-center">
                    
                    <div class="col-xl-6">
                        <div>
                            <img src="/images/users/user-4.jpg" alt="" class="img-fluid rounded float-start">
                        </div>
                    </div><!-- end col -->

                    <div class="col-xl-6">
                        <div>
                            <img src="/images/users/user-6.jpg" alt="" class="img-fluid rounded float-end">
                        </div>
                    </div><!-- end col -->

                </div>
            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col -->

    <div class="col-xl-6">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Aligning Image</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <img src="/images/users/user-4.jpg" alt="" class="img-fluid rounded mx-auto d-block">
            </div> <!-- end card-body -->
            
        </div> <!-- end card-->
    </div> <!-- end col -->
</div>
@endsection