@extends('layouts.vertical', ['title' => 'Notifications'])

@section('content')
<div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-semibold m-0">Notifications</h4>
    </div>

    <div class="text-end">
        <ol class="breadcrumb m-0 py-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Extended UI</a></li>
            <li class="breadcrumb-item active">Notifications</li>
        </ol>
    </div>
</div>

<!-- Start Notifications -->
<div class="row">
    <div class="col-xl-4">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Basic Toasts</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header">
                        <img src="/images/logo-sm.png" class="rounded me-2" height="16" alt="toast header"/>
                        <strong class="me-auto">Tapeli</strong>
                        <small>11 mins ago</small>
                        <button type="button" class="ms-2 btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body">
                        Hello, world! This is a toast message.
                    </div>
                </div>
            </div> <!-- end card-body -->

        </div> <!-- end card-->
    </div> <!-- end col -->

    <div class="col-xl-4">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Toasts Live</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <button type="button" class="btn btn-primary" id="liveToastBtn">Show live toast</button>

                <div class="toast-container position-fixed bottom-0 end-0 p-3">
                    <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-header">
                            <img src="/images/logo-sm.png" class="rounded me-2" alt="toast header">
                            <strong class="me-auto">Bootstrap</strong>
                            <small>11 mins ago</small>
                            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                        <div class="toast-body">
                            Hello, world! This is a toast message.
                        </div>
                    </div>
                </div>

            </div> <!-- end card-body -->
            
        </div> <!-- end card-->
    </div> <!-- end col -->

    <div class="col-xl-4">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Translucent</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header">
                        <img src="/images/logo-sm.png" class="rounded me-2" height="16" alt="toast header">
                        <strong class="me-auto">Tapeli</strong>
                        <small class="text-body-secondary">11 mins ago</small>
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body">
                        Hello, world! This is a toast message.
                    </div>
                </div>
            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col -->

    <div class="col-xl-4">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Stacking</h5>
            </div><!-- end card header -->

            <div class="card-body">

                <!-- Then put toasts within -->
                <div class="toast-container position-static">
                    <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-header">
                            <img src="/images/logo-sm.png" alt="brand-logo" height="16" class="me-2" />
                            <strong class="me-auto">Tapeli</strong>
                            <small class="text-muted">just now</small>
                            <button type="button" class="ms-2 btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                        <div class="toast-body">See? Just like this.</div>
                    </div>

                    <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-header">
                            <img src="/images/logo-sm.png" alt="brand-logo" height="16" class="me-2" />
                            <strong class="me-auto">Tapeli</strong>
                            <small class="text-muted">2 seconds ago</small>
                            <button type="button" class="ms-2 btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                        <div class="toast-body">
                            Heads up, toasts will stack automatically
                        </div>
                    </div>
                </div> 
                <!--end toast-->

            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col -->

    <div class="col-xl-4">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Custom Content</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="toast show align-items-center mb-4" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="d-flex">
                        <div class="toast-body">
                            Hello, world! This is a toast message.
                        </div>
                        <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                </div>

                <div class="toast show align-items-center text-white bg-primary border-0 mb-4" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="d-flex">
                        <div class="toast-body">
                            Hello, world! This is a toast message.
                        </div>
                        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                </div>

                <div class="toast show mb-4" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-body">
                        Hello, world! This is a toast message.
                        <div class="mt-2 pt-2 border-top">
                            <button type="button" class="btn btn-primary btn-sm">Take action</button>
                            <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="toast">Close</button>
                        </div>
                    </div>
                </div>

                <div class="toast bg-primary show" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-body text-white">
                        Hello, world! This is a toast message.
                        <div class="mt-2 pt-2 border-top">
                            <button type="button" class="btn btn-light btn-sm">Take action</button>
                            <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="toast">Close</button>
                        </div>
                    </div>
                </div>

            </div> <!-- end card-body -->

        </div> <!-- end card-->
    </div> <!-- end col -->

    <div class="col-xl-4">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Placement</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label for="selectToastPlacement">Toast placement</label>
                        <select class="form-select mt-2" id="selectToastPlacement">
                            <option value="" selected>Select a position...</option>
                            <option value="top-0 start-0">Top left</option>
                            <option value="top-0 start-50 translate-middle-x">Top center
                            </option>
                            <option value="top-0 end-0">Top right</option>
                            <option value="top-50 start-0 translate-middle-y">Middle left
                            </option>
                            <option value="top-50 start-50 translate-middle">Middle center
                            </option>
                            <option value="top-50 end-0 translate-middle-y">Middle right
                            </option>
                            <option value="bottom-0 start-0">Bottom left</option>
                            <option value="bottom-0 start-50 translate-middle-x">Bottom
                                center</option>
                            <option value="bottom-0 end-0">Bottom right</option>
                        </select>
                    </div>
                </form>
                <div aria-live="polite" aria-atomic="true"
                    class="bg-light position-relative bd-example-toasts" style="min-height:294px">
                    <div class="toast-container position-absolute p-3" id="toastPlacement">
                        <div class="toast show">
                            <div class="toast-header">
                                <img src="/images/logo-sm.png" alt="brand-logo" height="16" class="me-2" />
                                <strong class="me-auto">Tapeli</strong>
                                <small>11 mins ago</small>
                            </div>
                            <div class="toast-body">
                                Hello, world! This is a toast message.
                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- end card-body -->

        </div> <!-- end card-->
    </div> <!-- end col -->

</div> <!-- end row -->
@endsection