@extends('layouts.vertical', ['title' => 'Buttons'])

@section('content')
<div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-semibold m-0">Buttons</h4>
    </div>

    <div class="text-end">
        <ol class="breadcrumb m-0 py-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Components</a></li>
            <li class="breadcrumb-item active">Buttons</li>
        </ol>
    </div>
</div>
    
<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Default Buttons</h5>
            </div><!-- end card header -->

            <div class="card-body">

                <div class="d-flex flex-wrap gap-2">
                    <button type="button" class="btn btn-primary">Primary</button>
                    <button type="button" class="btn btn-secondary">Secondary</button>
                    <button type="button" class="btn btn-success">Success</button>
                    <button type="button" class="btn btn-danger">Danger</button>
                    <button type="button" class="btn btn-warning">Warning</button>
                    <button type="button" class="btn btn-info">Info</button>
                    <button type="button" class="btn btn-light">Light</button>
                    <button type="button" class="btn btn-dark">Dark</button>
                    <button type="button" class="btn btn-link">Link</button>
                </div>
            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col -->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Outline Buttons</h5>
            </div><!-- end card header -->

            <div class="card-body">

                <div class="d-flex flex-wrap gap-2">
                    <button type="button" class="btn btn-outline-primary">Primary</button>
                    <button type="button" class="btn btn-outline-secondary">Secondary</button>
                    <button type="button" class="btn btn-outline-success">Success</button>
                    <button type="button" class="btn btn-outline-danger">Danger</button>
                    <button type="button" class="btn btn-outline-warning">Warning</button>
                    <button type="button" class="btn btn-outline-info">Info</button>
                    <button type="button" class="btn btn-outline-light">Light</button>
                    <button type="button" class="btn btn-outline-dark">Dark</button>
                </div>
            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col -->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Rounded Default Buttons</h5>
            </div><!-- end card header -->

            <div class="card-body">

                <div class="d-flex flex-wrap gap-2">
                    <button type="button" class="btn btn-primary rounded-pill">Primary</button>
                    <button type="button" class="btn btn-secondary rounded-pill">Secondary</button>
                    <button type="button" class="btn btn-success rounded-pill">Success</button>
                    <button type="button" class="btn btn-danger rounded-pill">Danger</button>
                    <button type="button" class="btn btn-warning rounded-pill">Warning</button>
                    <button type="button" class="btn btn-info rounded-pill">Info</button>
                    <button type="button" class="btn btn-light rounded-pill">Light</button>
                    <button type="button" class="btn btn-dark rounded-pill">Dark</button>
                    <button type="button" class="btn btn-link rounded-pill">Link</button>
                </div>
            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col -->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Rounded Outline Buttons</h5>
            </div><!-- end card header -->

            <div class="card-body">

                <div class="d-flex flex-wrap gap-2">
                    <button type="button" class="btn btn-outline-primary rounded-pill">Primary</button>
                    <button type="button" class="btn btn-outline-secondary rounded-pill">Secondary</button>
                    <button type="button" class="btn btn-outline-success rounded-pill">Success</button>
                    <button type="button" class="btn btn-outline-danger rounded-pill">Danger</button>
                    <button type="button" class="btn btn-outline-warning rounded-pill">Warning</button>
                    <button type="button" class="btn btn-outline-info rounded-pill">Info</button>
                    <button type="button" class="btn btn-outline-light rounded-pill">Light</button>
                    <button type="button" class="btn btn-outline-dark rounded-pill">Dark</button>
                </div>
            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col -->

    <div class="col-xl-6">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Button Tags</h5>
            </div><!-- end card header -->

            <div class="card-body">

                <div class="d-flex flex-wrap gap-2">
                    <a class="btn btn-primary" href="#" role="button">Primary</a>
                    <button class="btn btn-secondary" type="submit">Secondary</button>
                    <input class="btn btn-success" type="button" value="Input">
                    <input class="btn btn-danger" type="submit" value="Submit">
                    <input class="btn btn-warning" type="reset" value="Reset">
                </div>
            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col -->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Buttons Sizes</h5>
            </div><!-- end card header -->

            <div class="card-body">

                <div class="d-flex flex-wrap gap-2 align-items-center">
                    <button type="button" class="btn btn-primary btn-lg">Large button</button>
                    <button type="button" class="btn btn-secondary btn-lg">Large button</button>
                    <button type="button" class="btn btn-success btn-sm">Small button</button>
                    <button type="button" class="btn btn-danger btn-sm">Small button</button>
                </div>
            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col -->

    <div class="col-xl-6">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Disabled State</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="mb-2">
                    <div class="d-flex flex-wrap gap-2">
                        <button type="button" class="btn btn-primary" disabled>Primary button</button>
                        <button type="button" class="btn btn-dark" disabled>Button</button>
                        <button type="button" class="btn btn-outline-primary" disabled>Primary button</button>
                        <button type="button" class="btn btn-outline-dark" disabled>Button</button>
                    </div>
                </div>

                <div>
                    <div class="d-flex flex-wrap gap-2">
                        <a class="btn btn-primary disabled" role="button" aria-disabled="true">Primary link</a>
                        <a class="btn btn-secondary disabled" role="button" aria-disabled="true">Link</a>
                        <a class="btn btn-outline-primary disabled" role="button" aria-disabled="true">Primary link</a>
                        <a class="btn btn-outline-secondary disabled" role="button" aria-disabled="true">Link</a>
                    </div>
                </div>
            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col -->

    <div class="col-xl-6">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Block Buttons</h5>
            </div><!-- end card header -->

            <div class="card-body">

                <div class="d-grid gap-2">
                    <button class="btn btn-primary btn-lg btn-block" type="button">Block level button</button>
                    <button class="btn btn-secondary btn-sm btn-block" type="button">Block level button</button>
                </div>
            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col -->

    <div class="col-xl-6">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Toggle states</h5>
            </div><!-- end card header -->

            <div class="card-body">

                <div class="d-flex flex-wrap">
                    <p class="d-inline-flex gap-2 mb-2">
                        <button type="button" class="btn" data-bs-toggle="button">Toggle button</button>
                        <button type="button" class="btn active" data-bs-toggle="button" aria-pressed="true">Active toggle button</button>
                        <button type="button" class="btn" disabled data-bs-toggle="button">Disabled toggle button</button>
                    </p>
                    <p class="d-inline-flex gap-2 mb-0">
                        <button type="button" class="btn btn-primary" data-bs-toggle="button">Toggle button</button>
                        <button type="button" class="btn btn-primary active" data-bs-toggle="button" aria-pressed="true">Active toggle button</button>
                        <button type="button" class="btn btn-primary" disabled data-bs-toggle="button">Disabled toggle button</button>
                    </p>
                </div>
            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col -->

    <div class="col-xl-6">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Button Group</h5>
            </div><!-- end card header -->

            <div class="card-body">

                <div class="d-flex flex-wrap gap-2">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-primary">Left</button>
                        <button type="button" class="btn btn-primary">Middle</button>
                        <button type="button" class="btn btn-primary">Right</button>
                    </div>
                    <div class="btn-group">
                        <a href="#" class="btn btn-primary active" aria-current="page">Active link</a>
                        <a href="#" class="btn btn-primary">Link</a>
                        <a href="#" class="btn btn-primary">Link</a>
                    </div>
                </div>
            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col -->

    <div class="col-xl-6">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Mixed & Outlined Group Button</h5>
            </div><!-- end card header -->

            <div class="card-body">

                <div class="row">
                    <div class="col-md-6">
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <button type="button" class="btn btn-danger">Left</button>
                            <button type="button" class="btn btn-warning">Middle</button>
                            <button type="button" class="btn btn-success">Right</button>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="btn-group" role="group" aria-label="Basic outlined example">
                            <button type="button" class="btn btn-outline-primary">Left</button>
                            <button type="button" class="btn btn-outline-primary">Middle</button>
                            <button type="button" class="btn btn-outline-primary">Right</button>
                        </div>
                    </div>
                </div>

            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col -->

    <div class="col-xl-6">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Checkbox & Radio Buttons</h5>
            </div><!-- end card header -->

            <div class="card-body">

                <div class="mb-2">
                    <div class="d-flex flex-wrap gap-2">
                        <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                            <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
                            <label class="btn btn-primary" for="btncheck1">Checkbox 1</label>
                            
                            <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
                            <label class="btn btn-primary" for="btncheck2">Checkbox 2</label>
                            
                            <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">
                            <label class="btn btn-primary" for="btncheck3">Checkbox 3</label>
                        </div>

                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked="">
                            <label class="btn btn-primary" for="btnradio1">Radio 1</label>
                            
                            <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                            <label class="btn btn-primary" for="btnradio2">Radio 2</label>
                            
                            <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                            <label class="btn btn-primary" for="btnradio3">Radio 3</label>
                        </div>
                    </div>
                </div>

                <div class="mb-0">
                    <div class="d-flex flex-wrap gap-2">
                        <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                            <input type="checkbox" class="btn-check" id="btncheck4" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btncheck4">Checkbox 4</label>
                            
                            <input type="checkbox" class="btn-check" id="btncheck5" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btncheck5">Checkbox 5</label>
                            
                            <input type="checkbox" class="btn-check" id="btncheck6" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btncheck6">Checkbox 6</label>
                        </div>

                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" name="btnradio" id="btnradio4" autocomplete="off" checked="">
                            <label class="btn btn-outline-primary" for="btnradio4">Radio 4</label>
                            
                            <input type="radio" class="btn-check" name="btnradio" id="btnradio5" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btnradio5">Radio 5</label>
                            
                            <input type="radio" class="btn-check" name="btnradio" id="btnradio6" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btnradio6">Radio 6</label>
                        </div>
                    </div>
                </div>
                

            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col -->

    <div class="col-xl-6">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Sizing</h5>
            </div><!-- end card header -->

            <div class="card-body">

                <div class="d-flex flex-wrap gap-2">
                    <div class="btn-group btn-group-lg" role="group" aria-label="Large button group">
                        <button type="button" class="btn btn-primary">Left</button>
                        <button type="button" class="btn btn-primary">Middle</button>
                        <button type="button" class="btn btn-primary">Right</button>
                    </div>
                    <div class="btn-group btn-group-lg" role="group" aria-label="Large button group">
                        <button type="button" class="btn btn-outline-primary">Left</button>
                        <button type="button" class="btn btn-outline-primary">Middle</button>
                        <button type="button" class="btn btn-outline-primary">Right</button>
                    </div>
                </div>
                <br>
                <div class="d-flex flex-wrap gap-2">
                    <div class="btn-group" role="group" aria-label="Default button group">
                        <button type="button" class="btn btn-secondary">Left</button>
                        <button type="button" class="btn btn-secondary">Middle</button>
                        <button type="button" class="btn btn-secondary">Right</button>
                    </div>
                    <div class="btn-group" role="group" aria-label="Default button group">
                        <button type="button" class="btn btn-outline-secondary">Left</button>
                        <button type="button" class="btn btn-outline-secondary">Middle</button>
                        <button type="button" class="btn btn-outline-secondary">Right</button>
                    </div>
                </div>
                <br>
                <div class="d-flex flex-wrap gap-2">
                    <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                        <button type="button" class="btn btn-success">Left</button>
                        <button type="button" class="btn btn-success">Middle</button>
                        <button type="button" class="btn btn-success">Right</button>
                    </div>
                    <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                        <button type="button" class="btn btn-outline-success">Left</button>
                        <button type="button" class="btn btn-outline-success">Middle</button>
                        <button type="button" class="btn btn-outline-success">Right</button>
                    </div>
                </div>
            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col -->

    <div class="col-xl-6">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Vertical Variation</h5>
            </div><!-- end card header -->

            <div class="card-body">

                <div class="d-flex flex-wrap gap-2 align-items-center">
                    <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                        <button type="button" class="btn btn-primary">Button</button>
                        <button type="button" class="btn btn-primary">Button</button>
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown <i class="mdi mdi-chevron-down"></i>
                            </button>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                            <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                            </ul>
                        </div>
                        <div class="btn-group dropstart" role="group">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-chevron-left"></i> Dropdown
                            </button>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                            <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                            </ul>
                        </div>
                        <div class="btn-group dropend" role="group">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown <i class="mdi mdi-chevron-right"></i>
                            </button>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                            <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                            </ul>
                        </div>
                        <div class="btn-group dropup" role="group">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown <i class="mdi mdi-chevron-up"></i>
                            </button>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                            <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="btn-group-vertical" role="group" aria-label="Vertical radio toggle button group">
                        <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio1" autocomplete="off" checked>
                        <label class="btn btn-outline-danger" for="vbtn-radio1">Radio 1</label>
                        <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio2" autocomplete="off">
                        <label class="btn btn-outline-danger" for="vbtn-radio2">Radio 2</label>
                        <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio3" autocomplete="off">
                        <label class="btn btn-outline-danger" for="vbtn-radio3">Radio 3</label>
                    </div>
                </div>
            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col -->

    <div class="col-xl-6">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Button Toolbar</h5>
            </div><!-- end card header -->

            <div class="card-body">

                <div class="d-flex flex-wrap gap-2">
                    <div class="btn-toolbar gap-2" role="toolbar" aria-label="Toolbar with button groups">
                        <div class="btn-group me-2" role="group" aria-label="First group">
                            <button type="button" class="btn btn-primary">1</button>
                            <button type="button" class="btn btn-primary">2</button>
                            <button type="button" class="btn btn-primary">3</button>
                            <button type="button" class="btn btn-primary">4</button>
                        </div>
                        <div class="btn-group me-2" role="group" aria-label="Second group">
                            <button type="button" class="btn btn-secondary">5</button>
                            <button type="button" class="btn btn-secondary">6</button>
                            <button type="button" class="btn btn-secondary">7</button>
                        </div>
                        <div class="btn-group" role="group" aria-label="Third group">
                            <button type="button" class="btn btn-info">8</button>
                        </div>
                    </div>
                </div>
            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col -->

    <div class="col-xl-6">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Nesting</h5>
            </div><!-- end card header -->

            <div class="card-body">

                <div class="d-flex flex-wrap gap-2">
                    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                        <button type="button" class="btn btn-success">1</button>
                        <button type="button" class="btn btn-success">2</button>
                        
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown <i class="mdi mdi-chevron-down"></i>
                            </button>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                            <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col -->

</div> <!-- end row -->
@endsection