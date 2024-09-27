@extends('layouts.vertical', ['title' => 'List Group'])

@section('content')
<div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-semibold m-0">List Group</h4>
    </div>

    <div class="text-end">
        <ol class="breadcrumb m-0 py-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Components</a></li>
            <li class="breadcrumb-item active">List Group</li>
        </ol>
    </div>
</div>

<!-- Start List Group -->
<div class="row">
    <div class="col-xl-4">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Basic List</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <ul class="list-group">
                    <li class="list-group-item">
                        Paypal Payment Company
                    </li>
                    <li class="list-group-item">
                        Artificial intelligence Company
                    </li>
                    <li class="list-group-item">
                        Open AI ChatGPT 
                    </li>
                    <li class="list-group-item">
                        Google One
                    </li>
                    <li class="list-group-item">
                        Clickup Time tracking Company
                    </li>
                </ul>
            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col -->

    <div class="col-xl-4">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Active Items</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <ul class="list-group">
                    <li class="list-group-item active" aria-current="true">
                        Paypal Payment Company
                    </li>
                    <li class="list-group-item">
                        Artificial intelligence Company
                    </li>
                    <li class="list-group-item">
                        Open AI ChatGPT
                    </li>
                    <li class="list-group-item">
                        Google One
                    </li>
                    <li class="list-group-item">
                        Clickup Time tracking Company
                    </li>
                </ul>
            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col -->

    <div class="col-xl-4">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Disabled Items</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <ul class="list-group">
                    <li class="list-group-item disabled" aria-disabled="true">
                        Paypal Payment Company
                    </li>
                    <li class="list-group-item">
                        Artificial intelligence Company
                    </li>
                    <li class="list-group-item">
                        Open AI ChatGPT
                    </li>
                    <li class="list-group-item">
                        Google One
                    </li>
                    <li class="list-group-item">
                        Clickup Time tracking Company
                    </li>
                </ul>
            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col -->

    <div class="col-xl-4">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Links and Buttons</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                        Paypal Payment Company
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        Artificial intelligence Company
                    </a>
                    <button type="button" class="list-group-item list-group-item-action">
                        Open AI ChatGPT
                    </button>
                    <button type="button" class="list-group-item list-group-item-action" disabled>
                        Google One
                    </button>
                    <a class="list-group-item list-group-item-action disabled" aria-disabled="true">
                        Clickup Time tracking Company
                    </a>
                </div>
            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col -->

    <div class="col-xl-4">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Flush</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        Paypal Payment Company
                    </li>
                    <li class="list-group-item">
                        Artificial intelligence Company
                    </li>
                    <li class="list-group-item">
                        Open AI ChatGPT
                    </li>
                    <li class="list-group-item">
                        Google One
                    </li>
                    <li class="list-group-item">
                        Clickup Time tracking Company
                    </li>
                </ul>
            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col -->

    <div class="col-xl-4">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Numbered With Custom</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <ol class="list-group list-group-numbered">
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">Subheading</div>
                            Paypal Payment Company
                        </div>
                        <span class="badge text-bg-primary rounded-pill">14</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">Subheading</div>
                            Artificial intelligence Company
                        </div>
                        <span class="badge text-bg-primary rounded-pill">14</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">Subheading</div>
                            Open AI ChatGPT
                        </div>
                        <span class="badge text-bg-primary rounded-pill">14</span>
                    </li>
                </ol>
            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col -->

    <div class="col-xl-4">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Horizontal</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <ul class="list-group list-group-horizontal mb-3">
                    <li class="list-group-item">Google</li>
                    <li class="list-group-item">Whatsapp</li>
                    <li class="list-group-item">Facebook</li>
                </ul>

                <ul class="list-group list-group-horizontal-sm mb-3">
                    <li class="list-group-item">Apple</li>
                    <li class="list-group-item">PayPal</li>
                    <li class="list-group-item">Intercom</li>
                </ul>

                <ul class="list-group list-group-horizontal-md">
                    <li class="list-group-item">Google</li>
                    <li class="list-group-item">Whatsapp</li>
                    <li class="list-group-item">Facebook</li>
                </ul>
            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col -->

    <div class="col-xl-4">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">With Badges</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        A list item
                        <span class="badge text-bg-primary rounded-pill">14</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        A second list item
                        <span class="badge text-bg-primary rounded-pill">2</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        A third list item
                        <span class="badge text-bg-primary rounded-pill">1</span>
                    </li>
                </ul>
            </div> <!-- end card-body -->
            
        </div> <!-- end card-->
    </div> <!-- end col -->

    <div class="col-xl-4">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Checkboxes And Radios</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <ul class="list-group">
                    <li class="list-group-item">
                        <input class="form-check-input me-1" type="checkbox" value="" id="firstCheckbox">
                        <label class="form-check-label" for="firstCheckbox">First checkbox</label>
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input me-1" type="checkbox" value="" id="secondCheckbox">
                        <label class="form-check-label" for="secondCheckbox">Second checkbox</label>
                    </li>
                </ul>

                <ul class="list-group">
                    <li class="list-group-item">
                        <input class="form-check-input me-1" type="radio" name="listGroupRadio" value="" id="firstRadio" checked>
                        <label class="form-check-label" for="firstRadio">First radio</label>
                    </li>
                    <li class="list-group-item">
                        <input class="form-check-input me-1" type="radio" name="listGroupRadio" value="" id="secondRadio">
                        <label class="form-check-label" for="secondRadio">Second radio</label>
                    </li>
                    </ul>
            </div> <!-- end card-body -->
            
        </div> <!-- end card-->
    </div> <!-- end col -->

    <div class="col-xl-4">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Custom content </h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">List group item heading</h5>
                            <small>3 days ago</small>
                        </div>
                        <p class="mb-1">Donec id elit non mi porta gravida at eget metus.
                            Maecenas sed diam eget risus varius blandit.</p>
                        <small>And some small print.</small>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">List group item heading</h5>
                            <small class="text-body-secondary">3 days ago</small>
                        </div>
                        <p class="mb-1">Nulla quis sem at nibh elementum imperdiet. 
                            Duis sagittis ipsum. Praesent mauris. Fusce nec.</p>
                        <small class="text-body-secondary">And some muted small print.</small>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">List group item heading</h5>
                            <small class="text-body-secondary">3 days ago</small>
                        </div>
                        <p class="mb-1">Cras ultricies mi eu turpis hendrerit fringilla. 
                            Vestibulum ante ipsum primis in faucibus orci luctus et.</p>
                        <small class="text-body-secondary">And some muted small print.</small>
                    </a>
                </div>
            </div> <!-- end card-body -->
            
        </div> <!-- end card-->
    </div> <!-- end col -->

    <div class="col-xl-4">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Contextual Variants</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <ul class="list-group">
                    <li class="list-group-item">A simple default list group item</li>
                    <li class="list-group-item list-group-item-primary">A simple primary list group item</li>
                    <li class="list-group-item list-group-item-secondary">A simple secondary list group item</li>
                    <li class="list-group-item list-group-item-success">A simple success list group item</li>
                    <li class="list-group-item list-group-item-danger">A simple danger list group item</li>
                    <li class="list-group-item list-group-item-warning">A simple warning list group item</li>
                    <li class="list-group-item list-group-item-info">A simple info list group item</li>
                    <li class="list-group-item list-group-item-light">A simple light list group item</li>
                    <li class="list-group-item list-group-item-dark">A simple dark list group item</li>
                </ul>

            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col -->

    <div class="col-xl-4">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Contextual Links And Buttons</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action">A simple default list group item</a>
                    <a href="#" class="list-group-item list-group-item-action list-group-item-primary">A simple primary list group item</a>
                    <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">A simple secondary list group item</a>
                    <a href="#" class="list-group-item list-group-item-action list-group-item-success">A simple success list group item</a>
                    <a href="#" class="list-group-item list-group-item-action list-group-item-danger">A simple danger list group item</a>
                    <a href="#" class="list-group-item list-group-item-action list-group-item-warning">A simple warning list group item</a>
                    <a href="#" class="list-group-item list-group-item-action list-group-item-info">A simple info list group item</a>
                    <a href="#" class="list-group-item list-group-item-action list-group-item-light">A simple light list group item</a>
                    <a href="#" class="list-group-item list-group-item-action list-group-item-dark">A simple dark list group item</a>
                </div>

            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col -->                            

</div> <!-- end row -->
@endsection