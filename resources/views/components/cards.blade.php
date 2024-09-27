@extends('layouts.vertical', ['title' => 'Cards'])

@section('content')
<div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-semibold m-0">Cards</h4>
    </div>

    <div class="text-end">
        <ol class="breadcrumb m-0 py-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Components</a></li>
            <li class="breadcrumb-item active">Cards</li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-sm-6 col-xl-3">
        <!-- Simple card -->
        <div class="card d-block">
            <img class="card-img-top rounded-top" src="/images/small/img-1.jpg" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">Card title</h4>
                <p class="card-text text-muted">Some quick example text to build on the card title and make
                    up the bulk of the card's content.</p>
                <a href="javascript: void(0);" class="btn btn-primary">Button</a>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div><!-- end col -->

    <div class="col-sm-6 col-xl-3">
        <div class="card d-block">
            <img class="card-img-top rounded-top" src="/images/small/img-2.jpg" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">Card title</h4>
                <p class="card-text text-muted">Some quick example text to build on the card..</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item bg-white">Cras justo odio</li>
            </ul>
            <div class="card-body">
                <a href="javascript: void(0);" class="card-link fw-medium">Card link</a>
                <a href="javascript: void(0);" class="card-link fw-medium">Another link</a>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div><!-- end col -->

    <div class="col-sm-6 col-xl-3">
        <div class="card d-block">
            <img class="card-img-top rounded-top" src="/images/small/img-3.jpg" alt="Card image cap">
            <div class="card-body">
                <p class="card-text text-muted">Some quick example text to build on the card title and make
                    up the bulk of the card's content. Some quick example text to build on the card
                    title and make up.</p>
                <a href="javascript: void(0);" class="btn btn-primary">Button</a>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div><!-- end col -->

    <div class="col-sm-6 col-xl-3">
        <div class="card d-block">
            <div class="card-body">
                <h4 class="card-title">Card title</h4>
                <h6 class="card-subtitle text-muted">Support card subtitle</h6>
            </div>
            <img class="img-fluid" src="/images/small/img-4.jpg" alt="Card image cap">
            <div class="card-body">
                <p class="card-text text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="javascript: void(0);" class="card-link text-custom">Card link</a>
                <a href="javascript: void(0);" class="card-link text-custom">Another link</a>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div><!-- end col -->
</div>

<div class="row">
    <div class="col-lg-12 col-md-12">
        <h5 class="mb-4 mt-4">Header and footer</h5>
    </div>
</div>

<!-- Featured Card -->
<div class="row">
    <div class="col-sm-6 col-lg-4">
        <div class="card d-block">
            <h5 class="card-header">Featured</h5>
            <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text text-muted">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div><!-- end col -->

    <div class="col-sm-6 col-lg-4">
        <div class="card d-block">
            <div class="card-header">Quote</div>

            <div class="card-body">
                <blockquote class="card-blockquote mb-0">
                    <p class="card-text text-muted">With supporting text below as a natural lead-in to additional content.</p>
                    <footer class="blockquote-footer mt-0 font-size-12">
                        Someone famous in <cite title="Source Title">Source Title</cite>
                    </footer>
                </blockquote>
            </div>
            
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-sm-6 col-lg-4">
        <div class="card d-block">
            <div class="card-header">Featured</div>
            <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text text-muted">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div><!-- end card body -->
            <div class="card-footer text-body-secondary bg-transparent border-top text-muted">2 days ago</div>
        </div><!-- end card -->
    </div><!-- end col -->


    <div class="col-sm-6 col-lg-4">
        <div class="card d-block">
            <div class="card-header">
                <h4 class="card-title mb-0">Basic Card</h4>
            </div>
            <div class="card-body">
                <p class="text-muted">Nemo enim ipsam voluptatem quia voluptas site that aspernatur aut odit aut fugit sed quia consequunture magni that is dolores qui ratione voluptateme.</p>
                <p class="text-muted mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-sm-6 col-lg-4">
        <div class="card d-block">
            <div class="card-header">
                <h4 class="card-title">Card Sub Title</h4>
                <p class="card-text text-muted mb-0">With supporting text below as a natural lead-in to additional content.</p>
            </div>
            <div class="card-body">
                <p class="card-text text-muted mb-0">Nemo enim ipsam voluptatem quia voluptas site that aspernatur aut odit aut fugit sed quia consequunture magni that is dolores qui ratione voluptateme.</p>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-sm-6 col-lg-4">
        <div class="card d-block">
            <div class="card-header">
                <h4 class="card-title"> <i class="mdi mdi-emoticon-wink-outline me-1"></i>Icon with Heading</h4>
            </div>
            <div class="card-body">
                <p class="card-text text-muted mb-0">Nemo enim ipsam voluptatem quia voluptas site that aspernatur aut odit aut fugit sed quia consequunture magni that is dolores qui ratione voluptateme.</p>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->
</div><!-- end row -->


<div class="row">
    <div class="col-lg-12 col-md-12">
        <h5 class="mb-4 mt-4">Sizing</h5>
    </div>
</div>

<!-- Grid Card Start -->
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text text-muted">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text text-muted">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
</div><!-- end row -->

<div class="row">
    <div class="col-lg-12 col-md-12">
        <h5 class="mb-4 mt-4">Text alignment</h5>
    </div>
</div>

<!-- Text alignment -->
<div class="row">
    <div class="col-lg-4">
        <div class="card card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text text-muted">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div> <!-- end card -->
    </div><!-- end col -->

    <div class="col-lg-4 text-center">
        <div class="card card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text text-muted">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div> <!-- end card -->
    </div><!-- end col -->

    <div class="col-lg-4 text-end">
        <div class="card card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text text-muted">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div> <!-- end card -->
    </div><!-- end col -->
</div> <!-- end row -->


<div class="row">
    <div class="col-lg-12 col-md-12">
        <h5 class="mb-4 mt-4">Navigation</h5>
    </div>
</div>

<!-- Navigation -->
<div class="row">
    <div class="col-lg-6">
        <div class="card text-center">
            <!-- start card-header -->
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="true" href="#">Active</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
            </div> <!-- end card-header -->
            <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text text-muted">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div> <!-- end card -->
    </div><!-- end col -->

    <div class="col-lg-6 text-center">
        <div class="card text-center">
            <!-- start card-header -->
            <div class="card-header">
                <ul class="nav nav-pills card-header-pills">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Active</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
            </div> <!-- end card-header -->
            <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text text-muted">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div><!-- end card -->
    </div><!-- end col -->
</div> <!-- end row -->


<div class="row">
    <div class="col-lg-12 col-md-12">
        <h5 class="mb-4 mt-4">Image Caps & Overlays</h5>
    </div>
</div>


<!-- Card Image Caps & Overlays -->
<div class="row">
    <div class="col-lg-4 col-md-6">
        <div class="card">
            <img class="card-img-top rounded-top" src="/images/small/img-5.jpg" alt="Card image top">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text text-muted">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
            </div>
        </div> <!-- end card -->
    </div><!-- end col -->

    <div class="col-lg-4 col-md-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text text-muted">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
            </div>
            <img class="card-img-bottom rounded-bottom" src="/images/small/img-7.jpg" alt="Card image bottom">
        </div> <!-- end card -->
    </div><!-- end col -->

    <div class="col-lg-4 col-md-6">
        <div class="card text-bg-dark">
            <img class="card-img rounded"  src="/images/small/img-6.jpg" alt="Card image overlay">
            <div class="card-img-overlay">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small>Last updated 3 mins ago</small></p>
            </div> <!-- end card -->
        </div><!-- end col -->
    </div>
</div> <!-- end row -->

<div class="row">
    <div class="col-lg-12 col-md-12">
        <h5 class="mb-4 mt-4">Horizontal</h5>
    </div>
</div>

<!-- Horizontal Card -->
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="row no-gutters align-items-center">
                <div class="col-md-5">
                    <img class="card-img img-fluid rounde" src="/images/small/img-8.jpg" alt="Card image">
                </div>
                <div class="col-md-7">
                    <div class="card-body">
                        <h5 class="card-title mb-1">Card title</h5>
                        <p class="card-text text-muted">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div><!-- end card -->
    </div><!-- end col -->
    <div class="col-lg-6">
        <div class="card">
            <div class="row no-gutters align-items-center">
                <div class="col-md-7">
                    <div class="card-body">
                        <h5 class="card-title mb-1">Card title</h5>
                        <p class="card-text text-muted">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="col-md-5">
                    <img class="card-img img-fluid" src="/images/small/img-9.jpg" alt="Card image">
                </div>
            </div>
        </div><!-- end card -->
    </div><!-- end col -->
</div><!-- end row -->

<div class="row">
    <div class="col-lg-12 col-md-12">
        <h5 class="mb-4 mt-4">Card Styles</h5>
    </div>
</div>

<!-- Start Card Background Color -->
<div class="row">
    <div class="col-lg-4 col-md-6">
        <div class="card text-bg-primary">
            <div class="card-header">
                <h4 class="card-title mb-0">Primary Card</h4>
            </div>
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div><!-- end card -->
    </div><!-- end col -->
    <div class="col-lg-4 col-md-6">
        <div class="card text-bg-secondary">
            <div class="card-header">
                <h4 class="card-title mb-0">Secondary Card</h4>
            </div>
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
    </div><!-- end card -->
    <div class="col-lg-4 col-md-6">
        <div class="card text-bg-success">
            <div class="card-header">
                <h4 class="card-title mb-0">Success Card</h4>
            </div>
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div><!-- end card -->
    </div>
    <div class="col-lg-4 col-md-6">
        <div class="card text-bg-danger">
            <div class="card-header">
                <h4 class="card-title mb-0">Danger Card</h4>
            </div>
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div><!-- end card -->
    </div>
    <div class="col-lg-4 col-md-6">
        <div class="card text-bg-warning">
            <div class="card-header">
                <h4 class="card-title mb-0">Warning Card</h4>
            </div>
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div><!-- end card -->
    </div>
    <div class="col-lg-4 col-md-6">
        <div class="card text-bg-info">
            <div class="card-header">
                <h4 class="card-title mb-0">Info Card</h4>
            </div>
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div><!-- end card -->
    </div>
    <div class="col-lg-4 col-md-6">
        <div class="card text-bg-light">
            <div class="card-header">
                <h4 class="card-title mb-0">Light Card</h4>
            </div>
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div><!-- end card -->
    </div>
    <div class="col-lg-4 col-md-6">
        <div class="card text-bg-dark">
            <div class="card-header">
                <h4 class="card-title mb-0">Dark Card</h4>
            </div>
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div><!-- end card -->
    </div>
    <div class="col-lg-4 col-md-6">
        <div class="card bg-white text-dark">
            <div class="card-header">
                <h4 class="card-title mb-0">White Card</h4>
            </div>
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div><!-- end card -->
    </div>
</div><!-- end row -->
<!-- End Card Background Color -->

<!-- Start Card Border -->
<div class="row">
    <div class="col-lg-4 col-md-6">
        <div class="card border border-primary">
            <div class="card-header bg-transparent border-primary">
                <h4 class="card-title mb-0 text-primary">Primary Outline Card</h4>
            </div>
            <div class="card-body text-primary">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-lg-4 col-md-6">
        <div class="card border border-secondary">
            <div class="card-header bg-transparent border-secondary">
                <h4 class="card-title mb-0 text-secondary">Secondary Outline Card</h4>
            </div>
            <div class="card-body text-secondary">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-lg-4 col-md-6">
        <div class="card border border-success">
            <div class="card-header bg-transparent border-success">
                <h4 class="card-title mb-0 text-success">Success Outline Card</h4>
            </div>
            <div class="card-body text-success">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-lg-4 col-md-6">
        <div class="card border border-danger">
            <div class="card-header bg-transparent border-danger">
                <h4 class="card-title mb-0 text-danger">Danger Outline Card</h4>
            </div>
            <div class="card-body text-danger">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-lg-4 col-md-6">
        <div class="card border border-warning">
            <div class="card-header bg-transparent border-warning">
                <h4 class="card-title mb-0 text-warning">Warning Outline Card</h4>
            </div>
            <div class="card-body text-warning">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-lg-4 col-md-6">
        <div class="card border border-info">
            <div class="card-header bg-transparent border-info">
                <h4 class="card-title mb-0 text-info">Info Outline Card</h4>
            </div>
            <div class="card-body text-info">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-lg-4 col-md-6">
        <div class="card border border-light">
            <div class="card-header bg-transparent border-light">
                <h4 class="card-title mb-0 text-dark">Light Outline Card</h4>
            </div>
            <div class="card-body text-dark">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-lg-4 col-md-6">
        <div class="card border border-dark">
            <div class="card-header bg-transparent border-dark">
                <h4 class="card-title mb-0 text-dark">Dark Outline Card</h4>
            </div>
            <div class="card-body text-dark">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-lg-4 col-md-6">
        <div class="card border border-white">
            <div class="card-header bg-transparent border-white">
                <h4 class="card-title mb-0 text-dark">White Outline Card</h4>
            </div>
            <div class="card-body text-dark">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            </div><!-- end card -->
    </div><!-- end col -->
</div><!-- end row -->
<!-- End Card Border -->

<div class="row">
    <div class="col-lg-12 col-md-12">
        <h5 class="mb-4 mt-4">Card Groups</h5>
    </div>
</div>

<!-- Start Card Groups -->
<div class="row">
    <div class="col-12">
        <div class="card-deck-wrapper">
            <div class="card-group">
                <div class="card">
                    <img class="card-img-top img-fluid" src="/images/small/img-6.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text text-muted">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    </div>
                </div>

                <div class="card">
                    <img class="card-img-top img-fluid" src="/images/small/img-7.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text text-muted">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    </div>
                </div>

                <div class="card">
                    <img class="card-img-top img-fluid" src="/images/small/img-9.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text text-muted">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- End Card Groups -->

<!-- Start Card Groups footers -->
<div class="row mt-3">
    <div class="col-12">
        <div class="card-deck-wrapper">
            <div class="card-group">
                <div class="card">
                    <img class="card-img-top img-fluid" src="/images/small/img-1.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text text-muted">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        </div>
                        <div class="card-footer border-top">
                        <small class="text-body-secondary">Last updated 3 mins ago</small>
                    </div>
                </div>

                <div class="card">
                    <img class="card-img-top img-fluid" src="/images/small/img-2.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text text-muted">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        </div>
                        <div class="card-footer border-top">
                        <small class="text-body-secondary">Last updated 3 mins ago</small>
                    </div>
                </div>

                <div class="card">
                    <img class="card-img-top img-fluid" src="/images/small/img-3.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text text-muted">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        </div>
                        <div class="card-footer border-top">
                        <small class="text-body-secondary">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Card Groups -->


<div class="row">
    <div class="col-lg-12 col-md-12">
        <h5 class="mb-4 mt-4">Grid cards</h5>
    </div>
</div>


<!-- Start Cart Grid -->
<div class="row">
    <div class="col-12">
        <div class="row row-cols-1 row-cols-md-2">
            <div class="col">
                <div class="card">
                    <img src="/images/small/img-6.jpg" class="card-img-top rounded-top" alt="grid card">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text text-muted">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="/images/small/img-7.jpg" class="card-img-top rounded-top" alt="grid card">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text text-muted">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="/images/small/img-5.jpg" class="card-img-top rounded-top" alt="grid card">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text text-muted">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="/images/small/img-4.jpg" class="card-img-top rounded-top" alt="grid card">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text text-muted">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Cart Grid -->

<!-- Start Cart Grid -->
<div class="row">
    <div class="col-12">
        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
            <div class="col">
                <div class="card">
                    <img src="/images/small/img-6.jpg" class="card-img-top rounded-top" alt="grid card">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text text-muted">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="/images/small/img-1.jpg" class="card-img-top rounded-top" alt="grid card">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text text-muted">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="/images/small/img-3.jpg" class="card-img-top rounded-top" alt="grid card">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text text-muted">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="/images/small/img-7.jpg" class="card-img-top rounded-top" alt="grid card">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text text-muted">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Cart Grid -->

<!-- Start Cart Grid -->
<div class="row">
    <div class="col-12">
        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
            <div class="col">
                <div class="card h-100">
                    <img src="/images/small/img-1.jpg" class="card-img-top rounded-top" alt="grid card">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text text-muted">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="/images/small/img-6.jpg" class="card-img-top rounded-top" alt="grid card">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text text-muted">This is a short card.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="/images/small/img-5.jpg" class="card-img-top rounded-top" alt="grid card">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text text-muted">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="/images/small/img-3.jpg" class="card-img-top rounded-top" alt="grid card">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text text-muted">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Cart Grid -->
@endsection