@extends('layouts.vertical', ['title' => 'Scrollspy'])

@section('content')
<div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-semibold m-0">Scrollspy</h4>
    </div>

    <div class="text-end">
        <ol class="breadcrumb m-0 py-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Components</a></li>
            <li class="breadcrumb-item active">Scrollspy</li>
        </ol>
    </div>
</div>


<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Navbar Example</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <nav id="navbar-example2" class="navbar bg-light px-3 rounded">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link active" href="#scrollspyHeading1">First</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#scrollspyHeading2">Second</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button"
                                aria-haspopup="true" aria-expanded="false">Dropdown <i class="ri-arrow-down-s-line"></i></a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#scrollspyHeading3">one</a>
                                <a class="dropdown-item" href="#scrollspyHeading4">two</a>
                                <div role="separator" class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#scrollspyHeading5">three</a>
                            </div>
                        </li>
                    </ul>
                </nav>

                <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-smooth-scroll="true" data-bs-offset="0" class="scrollspy-example bg-body-tertiary p-3 rounded">
                    <h4 id="scrollspyHeading1">First heading</h4>
                    <p>This is some placeholder content for the scrollspy page. 
                        Note that as you scroll down the page, the appropriate 
                        navigation link is highlighted. It's repeated throughout 
                        the component example. We keep adding some more example 
                        copy here to emphasize the scrolling and highlighting.</p>
                    <h4 id="scrollspyHeading2">Second heading</h4>
                    <p>This is some placeholder content for the scrollspy page. 
                        Note that as you scroll down the page, the appropriate 
                        navigation link is highlighted. It's repeated throughout 
                        the component example. We keep adding some more example 
                        copy here to emphasize the scrolling and highlighting.</p>
                    <h4 id="scrollspyHeading3">Third heading</h4>
                    <p>This is some placeholder content for the scrollspy page. 
                        Note that as you scroll down the page, the appropriate 
                        navigation link is highlighted. It's repeated throughout 
                        the component example. We keep adding some more example 
                        copy here to emphasize the scrolling and highlighting.</p>
                    <h4 id="scrollspyHeading4">Fourth heading</h4>
                    <p>This is some placeholder content for the scrollspy page. 
                        Note that as you scroll down the page, the appropriate 
                        navigation link is highlighted. It's repeated throughout 
                        the component example. We keep adding some more example 
                        copy here to emphasize the scrolling and highlighting.</p>
                    <h4 id="scrollspyHeading5">Fifth heading</h4>
                    <p>This is some placeholder content for the scrollspy page. 
                        Note that as you scroll down the page, the appropriate 
                        navigation link is highlighted. It's repeated throughout 
                        the component example. We keep adding some more example 
                        copy here to emphasize the scrolling and highlighting.
                    </p>
                </div>
            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col -->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Nested Nav</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="row">
                    <div class="col-4">
                        <nav id="navbar-example3" class="h-100 flex-column align-items-stretch pe-4 border-end">
                            <nav class="nav nav-pills flex-column">
                                <a class="nav-link" href="#item-1">Item 1</a>
                                    <nav class="nav nav-pills flex-column">
                                        <a class="nav-link ms-3 my-1" href="#item-1-1">Item 1-1</a>
                                        <a class="nav-link ms-3 my-1" href="#item-1-2">Item 1-2</a>
                                    </nav>
                                <a class="nav-link" href="#item-2">Item 2</a>
                                <a class="nav-link" href="#item-3">Item 3</a>
                                <nav class="nav nav-pills flex-column">
                                    <a class="nav-link ms-3 my-1" href="#item-3-1">Item 3-1</a>
                                    <a class="nav-link ms-3 my-1" href="#item-3-2">Item 3-2</a>
                                </nav>
                            </nav>
                        </nav>
                    </div>
                    
                    <div class="col-8">
                        <div data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-smooth-scroll="true" class="scrollspy-example" style="height: 350px;" tabindex="0">
                            <div id="item-1">
                                <h4>Item 1</h4>
                                <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, 
                                    the appropriate navigation link is highlighted. It's repeated throughout the component example. 
                                    We keep adding some more example copy here to emphasize the scrolling and highlighting.
                                </p>
                                <p>Keep in mind that the JavaScript plugin tries to pick the right element among all that 
                                    may be visible. Multiple visible scrollspy targets at the same time may cause some issues.</p>
                            </div>
                            <div id="item-1-1">
                                <h5>Item 1-1</h5>
                                <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, 
                                    the appropriate navigation link is highlighted. It's repeated throughout the component example. 
                                    We keep adding some more example copy here to emphasize the scrolling and highlighting.
                                </p>
                            </div>
                            <div id="item-1-2">
                                <h5>Item 1-2</h5>
                                <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, 
                                    the appropriate navigation link is highlighted. It's repeated throughout the component example. 
                                    We keep adding some more example copy here to emphasize the scrolling and highlighting.
                                </p>
                            </div>
                            <div id="item-2">
                                <h4>Item 2</h4>
                                <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, 
                                    the appropriate navigation link is highlighted. It's repeated throughout the component example. 
                                    We keep adding some more example copy here to emphasize the scrolling and highlighting.
                                </p>
                            </div>
                            <div id="item-3">
                                <h4>Item 3</h4>
                                <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, 
                                    the appropriate navigation link is highlighted. It's repeated throughout the component example. 
                                    We keep adding some more example copy here to emphasize the scrolling and highlighting.
                                </p>
                            </div>
                            <div id="item-3-1">
                                <h5>Item 3-1</h5>
                                <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, 
                                    the appropriate navigation link is highlighted. It's repeated throughout the component example. 
                                    We keep adding some more example copy here to emphasize the scrolling and highlighting.
                                </p>
                            </div>
                            <div id="item-3-2">
                                <h5>Item 3-2</h5>
                                <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, 
                                    the appropriate navigation link is highlighted. It's repeated throughout the component example. 
                                    We keep adding some more example copy here to emphasize the scrolling and highlighting.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col -->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">List group</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="row">
                    <div class="col-4">
                        <div id="list-example" class="list-group">
                            <a class="list-group-item list-group-item-action" href="#list-item-1">Item 1</a>
                            <a class="list-group-item list-group-item-action" href="#list-item-2">Item 2</a>
                            <a class="list-group-item list-group-item-action" href="#list-item-3">Item 3</a>
                            <a class="list-group-item list-group-item-action" href="#list-item-4">Item 4</a>
                        </div>
                    </div>
                    
                    <div class="col-8">
                        <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
                            <h4 id="list-item-1">Item 1</h4>
                            <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, 
                                the appropriate navigation link is highlighted. It's repeated throughout the component example. 
                                We keep adding some more example copy here to emphasize the scrolling and highlighting.
                            </p>
                            <p>Keep in mind that the JavaScript plugin tries to pick the right element among all that 
                                may be visible. Multiple visible scrollspy targets at the same time may cause some issues.</p>
                            <h4 id="list-item-2">Item 2</h4>
                            <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, 
                                the appropriate navigation link is highlighted. It's repeated throughout the component example. 
                                We keep adding some more example copy here to emphasize the scrolling and highlighting.
                            </p>
                            <p>Keep in mind that the JavaScript plugin tries to pick the right element among all that 
                                may be visible. Multiple visible scrollspy targets at the same time may cause some issues.</p>
                            <h4 id="list-item-3">Item 3</h4>
                            <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, 
                                the appropriate navigation link is highlighted. It's repeated throughout the component example. 
                                We keep adding some more example copy here to emphasize the scrolling and highlighting.
                            </p>
                            <p>Keep in mind that the JavaScript plugin tries to pick the right element among all that 
                                may be visible. Multiple visible scrollspy targets at the same time may cause some issues.</p>
                            <h4 id="list-item-4">Item 4</h4>
                            <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, 
                                the appropriate navigation link is highlighted. It's repeated throughout the component example. 
                                We keep adding some more example copy here to emphasize the scrolling and highlighting.
                            </p>
                            <p>Keep in mind that the JavaScript plugin tries to pick the right element among all that 
                                may be visible. Multiple visible scrollspy targets at the same time may cause some issues.</p>
                        </div>
                    </div>
                </div>

            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col -->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Simple Anchors</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="row">
                    <div class="col-4">
                        <div id="simple-list-example" class="d-flex flex-column gap-2 simple-list-example-scrollspy text-center">
                            <a class="p-1 rounded" href="#simple-list-item-1">Item 1</a>
                            <a class="p-1 rounded" href="#simple-list-item-2">Item 2</a>
                            <a class="p-1 rounded" href="#simple-list-item-3">Item 3</a>
                            <a class="p-1 rounded" href="#simple-list-item-4">Item 4</a>
                            <a class="p-1 rounded" href="#simple-list-item-5">Item 5</a>
                        </div>
                    </div>
                    <div class="col-8">
                        <div data-bs-spy="scroll" data-bs-target="#simple-list-example" data-bs-offset="0" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
                            <h4 id="simple-list-item-1">Item 1</h4>
                            <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, 
                                the appropriate navigation link is highlighted. It's repeated throughout the component example. 
                                We keep adding some more example copy here to emphasize the scrolling and highlighting.
                            </p>
                            <h4 id="simple-list-item-2">Item 2</h4>
                            <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, 
                                the appropriate navigation link is highlighted. It's repeated throughout the component example. 
                                We keep adding some more example copy here to emphasize the scrolling and highlighting.
                            </p>
                            <h4 id="simple-list-item-3">Item 3</h4>
                            <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, 
                                the appropriate navigation link is highlighted. It's repeated throughout the component example. 
                                We keep adding some more example copy here to emphasize the scrolling and highlighting.
                            </p>
                            <h4 id="simple-list-item-4">Item 4</h4>
                            <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, 
                                the appropriate navigation link is highlighted. It's repeated throughout the component example. 
                                We keep adding some more example copy here to emphasize the scrolling and highlighting.
                            </p>
                            <h4 id="simple-list-item-5">Item 5</h4>
                            <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, 
                                the appropriate navigation link is highlighted. It's repeated throughout the component example. 
                                We keep adding some more example copy here to emphasize the scrolling and highlighting.
                            </p>
                        </div>
                    </div>
                </div>
            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col -->

</div> <!-- end row -->
@endsection