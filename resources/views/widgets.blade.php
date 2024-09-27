@extends('layouts.vertical', ['title' => 'Widgets'])

@section('content')
<div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-semibold m-0">Widgets</h4>
    </div>

    <div class="text-end">
        <ol class="breadcrumb m-0 py-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Components</a></li>
            <li class="breadcrumb-item active">Widgets</li>
        </ol>
    </div>
</div>

<!-- start row -->
<div class="row">
    <div class="col-md-12 col-xl-6">
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <div class="border border-dark rounded-2 me-2 widget-icons-sections">
                        <i data-feather="bar-chart" class="widgets-icons"></i>
                    </div>
                    <h5 class="card-title mb-0">Web Analytics</h5>
                </div>
            </div>

            <div class="card-body">
                <div class="justify-content-center mb-4">
                    <div class="row g-3">
                        <div class="col-md-6 col-xl-3">
                            <a href="#">
                                <div class="border rounded-3 px-2 py-3 text-center">
                                    <p class="mb-2 text-dark">Users</p>
                                    <h3 class="m-0 mb-2 fs-24 text-black">3 680</h3>
                                    <p class="text-muted mb-0 fs-13">
                                        <span class="text-success bg-success-subtle rounded-2 p-1 me-2"><i class="mdi mdi-arrow-up-circle"></i> 2.5%</span>
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <a href="#">
                                <div class="border rounded-3 px-2 py-3 text-center">
                                    <p class="mb-2 text-dark">New Users</p>
                                    <h3 class="m-0 mb-2 fs-24 text-black">2 870</h3>
                                    <p class="text-muted mb-0 fs-13">
                                        <span class="text-success bg-success-subtle rounded-2 p-1 me-2"><i class="mdi mdi-arrow-up-circle"></i> 1.6%</span>
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <a href="#">
                                <div class="border rounded-3 px-2 py-3 text-center">
                                    <p class="mb-2 text-dark">Key Event</p>
                                    <h3 class="m-0 mb-2 fs-24 text-black">78</h3>
                                    <p class="text-muted mb-0 fs-13">
                                        <span class="text-danger bg-danger-subtle rounded-2 p-1 me-2"><i class="mdi mdi-arrow-down-circle"></i> 7.7%</span>
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <a href="#">
                                <div class="border rounded-3 px-2 py-3 text-center">
                                    <p class="mb-2 text-dark">Event Count</p>
                                    <h3 class="m-0 mb-2 fs-24 text-black">9.4K</h3>
                                    <p class="text-muted mb-0 fs-13">
                                        <span class="text-success bg-success-subtle rounded-2 p-1 me-2"><i class="mdi mdi-arrow-up-circle"></i> 17.6%</span>
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div id="chart-new-clients" class="apex-charts"></div>
                <div class="row">
                    <div class="col-12">
                        <a class="btn text-black border fw-normal d-flex align-items-center justify-content-center text-capitalize rounded-3 mt-3">View reports snapshot <i class="mdi mdi-arrow-right ms-2 fs-17"></i></a>
                    </div>
                </div>
            </div>

        </div> <!-- end card -->
    </div> <!-- end sales -->

    <div class="col-md-12 col-xl-6">
        <div class="row">
            <div class="col-md-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <div class="border border-dark rounded-2 me-2 widget-icons-sections">
                                <i data-feather="trending-up" class="widgets-icons"></i>
                            </div>
                            <h5 class="card-title mb-0">Traffic summary</h5>
                        </div>
                    </div>

                    <div class="card-body">
                        <div id="chart-traffic" class="apex-charts"></div>
                    </div> <!-- end card body -->        
                </div> <!-- end card -->
            </div>

            <div class="col-md-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <div class="border border-dark rounded-2 me-2 widget-icons-sections">
                                <i data-feather="zap" class="widgets-icons"></i>
                            </div>
                            <h5 class="card-title mb-0">Subscribers</h5>
                        </div>
                    </div>

                    <div class="card-body">
                        <div id="chart-development-activity" class="apex-charts"></div>
                    </div> <!-- end card body -->
                </div> <!-- end card -->

            </div>
        </div>
    </div> <!-- end sales -->
</div>
<!-- end row -->

<!-- Recent Transaction Section -->
<div class="row">
    <div class="col-md-12 col-xl-4">
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <div class="border border-dark rounded-2 me-2 widget-icons-sections">
                        <i data-feather="dollar-sign" class="widgets-icons"></i>
                    </div>
                    <h5 class="card-title mb-0">Recent Transaction</h5>
                </div>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table align-middle table-nowrap mb-0">

                        <tbody>
                            <tr>
                                <td class="d-flex align-items-center">
                                    <div class="avatar-md me-3 align-items-center justify-content-center d-flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="53.9" height="16" viewBox="0 0 256 114"><path fill="#1a1f71" d="M97.197 1.46L63.68 81.418H41.814L25.32 17.604c-1-3.921-1.869-5.364-4.912-7.022C15.434 7.88 7.22 5.353 0 3.781L.487 1.46h35.204c4.48 0 8.514 2.983 9.54 8.148l8.715 46.273L75.462 1.46zm29.56 0l-17.103 79.958H88.966L106.071 1.46zm56.116 53.852c.086-21.099-29.174-22.27-28.983-31.697c.07-2.866 2.8-5.917 8.776-6.697c2.96-.383 11.138-.688 20.401 3.58l3.624-16.966C181.714 1.732 175.309 0 167.342 0c-20.45 0-34.835 10.862-34.95 26.428c-.134 11.514 10.275 17.931 18.103 21.766c8.063 3.916 10.767 6.433 10.73 9.933c-.058 5.365-6.44 7.74-12.373 7.828c-10.404.165-16.435-2.812-21.246-5.053l-3.755 17.528c4.84 2.218 13.76 4.145 22.999 4.243c21.74 0 35.959-10.737 36.023-27.36m54 26.106H256L239.29 1.46h-17.647c-3.98 0-7.325 2.31-8.809 5.861l-31.04 74.097h21.723l4.309-11.944h26.54zm-23.09-28.329l10.892-30.027l6.257 30.027zm-60.55 50.338h-8.406v7.823h9.402v2.352h-12.234V91.9h11.752v2.352h-8.92v6.857h8.405zm5.339-12.686h2.832v22.86h-2.832zm9.978 15.583c.064 3.833 2.48 5.41 5.344 5.41c2.03 0 3.285-.354 4.317-.804l.514 2.029c-.998.45-2.736.997-5.217.997c-4.796 0-7.661-3.187-7.661-7.889c0-4.7 2.767-8.372 7.308-8.372c5.12 0 6.44 4.445 6.44 7.31c0 .579-.033.997-.098 1.32zm8.307-2.028c.033-1.77-.74-4.572-3.928-4.572c-2.898 0-4.122 2.608-4.348 4.572zm18.154 8.758c-.74.355-2.383.903-4.475.903c-4.701 0-7.76-3.188-7.76-7.954c0-4.798 3.283-8.307 8.371-8.307c1.674 0 3.155.417 3.928.837l-.642 2.157c-.679-.354-1.741-.742-3.286-.742c-3.575 0-5.505 2.673-5.505 5.895c0 3.605 2.318 5.827 5.409 5.827c1.61 0 2.672-.386 3.477-.74zm7.948-18.772v3.735h4.056v2.156h-4.056v8.405c0 1.934.548 3.027 2.125 3.027c.772 0 1.224-.063 1.643-.194l.129 2.16c-.548.192-1.417.385-2.512.385c-1.321 0-2.384-.451-3.059-1.19c-.773-.871-1.095-2.254-1.095-4.09v-8.503h-2.416v-2.156h2.416V95.12zm8.013 8.598c0-1.836-.034-3.413-.129-4.863h2.48l.13 3.09h.094c.71-2.091 2.447-3.412 4.346-3.412c.291 0 .517.033.775.064v2.674c-.29-.066-.579-.066-.968-.066c-1.994 0-3.413 1.481-3.798 3.608a8.5 8.5 0 0 0-.097 1.32v8.308h-2.833zm25.111 2.8c0 5.764-4.026 8.276-7.76 8.276c-4.187 0-7.47-3.092-7.47-8.017c0-5.185 3.445-8.243 7.728-8.243c4.475 0 7.502 3.25 7.502 7.985m-12.333.162c0 3.413 1.932 5.99 4.701 5.99c2.706 0 4.733-2.546 4.733-6.055c0-2.64-1.32-5.958-4.669-5.958c-3.315 0-4.765 3.093-4.765 6.023m16.675-3.607c0-1.641-.034-2.93-.13-4.217h2.512l.161 2.576h.064c.773-1.45 2.576-2.898 5.152-2.898c2.156 0 5.506 1.288 5.506 6.631v9.275h-2.833v-8.984c0-2.51-.934-4.605-3.606-4.605c-1.836 0-3.286 1.321-3.799 2.898c-.13.355-.194.837-.194 1.321v9.37h-2.833z"/></svg>
                                    </div>
                                    <div>
                                        <h5 class="fs-14 my-1">Internal Payment</h5>
                                        <span class="text-muted">Expiry 05/2024 </span>
                                    </div>
                                </td>
                                <td>
                                    <p class="fs-14 my-1 fw-normal text-primary">+ $192.00</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="d-flex align-items-center">
                                    <div class="avatar-md me-3 align-items-center justify-content-center d-flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30.88" height="16" viewBox="0 0 256 199"><path d="M46.54 198.011V184.84c0-5.05-3.074-8.342-8.343-8.342c-2.634 0-5.488.878-7.464 3.732c-1.536-2.415-3.731-3.732-7.024-3.732c-2.196 0-4.39.658-6.147 3.073v-2.634h-4.61v21.074h4.61v-11.635c0-3.731 1.976-5.488 5.05-5.488c3.072 0 4.61 1.976 4.61 5.488v11.635h4.61v-11.635c0-3.731 2.194-5.488 5.048-5.488c3.074 0 4.61 1.976 4.61 5.488v11.635zm68.271-21.074h-7.463v-6.366h-4.61v6.366h-4.171v4.17h4.17v9.66c0 4.83 1.976 7.683 7.245 7.683c1.976 0 4.17-.658 5.708-1.536l-1.318-3.952c-1.317.878-2.853 1.098-3.951 1.098c-2.195 0-3.073-1.317-3.073-3.513v-9.44h7.463zm39.076-.44c-2.634 0-4.39 1.318-5.488 3.074v-2.634h-4.61v21.074h4.61v-11.854c0-3.512 1.536-5.488 4.39-5.488c.878 0 1.976.22 2.854.439l1.317-4.39c-.878-.22-2.195-.22-3.073-.22m-59.052 2.196c-2.196-1.537-5.269-2.195-8.562-2.195c-5.268 0-8.78 2.634-8.78 6.805c0 3.513 2.634 5.488 7.244 6.147l2.195.22c2.415.438 3.732 1.097 3.732 2.195c0 1.536-1.756 2.634-4.83 2.634s-5.488-1.098-7.025-2.195l-2.195 3.512c2.415 1.756 5.708 2.634 9 2.634c6.147 0 9.66-2.853 9.66-6.805c0-3.732-2.854-5.708-7.245-6.366l-2.195-.22c-1.976-.22-3.512-.658-3.512-1.975c0-1.537 1.536-2.415 3.951-2.415c2.635 0 5.269 1.097 6.586 1.756zm122.495-2.195c-2.635 0-4.391 1.317-5.489 3.073v-2.634h-4.61v21.074h4.61v-11.854c0-3.512 1.537-5.488 4.39-5.488c.879 0 1.977.22 2.855.439l1.317-4.39c-.878-.22-2.195-.22-3.073-.22m-58.833 10.976c0 6.366 4.39 10.976 11.196 10.976c3.073 0 5.268-.658 7.463-2.414l-2.195-3.732c-1.756 1.317-3.512 1.975-5.488 1.975c-3.732 0-6.366-2.634-6.366-6.805c0-3.951 2.634-6.586 6.366-6.805c1.976 0 3.732.658 5.488 1.976l2.195-3.732c-2.195-1.757-4.39-2.415-7.463-2.415c-6.806 0-11.196 4.61-11.196 10.976m42.588 0v-10.537h-4.61v2.634c-1.537-1.975-3.732-3.073-6.586-3.073c-5.927 0-10.537 4.61-10.537 10.976s4.61 10.976 10.537 10.976c3.073 0 5.269-1.097 6.586-3.073v2.634h4.61zm-16.904 0c0-3.732 2.415-6.805 6.366-6.805c3.732 0 6.367 2.854 6.367 6.805c0 3.732-2.635 6.805-6.367 6.805c-3.951-.22-6.366-3.073-6.366-6.805m-55.1-10.976c-6.147 0-10.538 4.39-10.538 10.976s4.39 10.976 10.757 10.976c3.073 0 6.147-.878 8.562-2.853l-2.196-3.293c-1.756 1.317-3.951 2.195-6.146 2.195c-2.854 0-5.708-1.317-6.367-5.05h15.587v-1.755c.22-6.806-3.732-11.196-9.66-11.196m0 3.951c2.853 0 4.83 1.757 5.268 5.05h-10.976c.439-2.854 2.415-5.05 5.708-5.05m114.372 7.025v-18.879h-4.61v10.976c-1.537-1.975-3.732-3.073-6.586-3.073c-5.927 0-10.537 4.61-10.537 10.976s4.61 10.976 10.537 10.976c3.074 0 5.269-1.097 6.586-3.073v2.634h4.61zm-16.903 0c0-3.732 2.414-6.805 6.366-6.805c3.732 0 6.366 2.854 6.366 6.805c0 3.732-2.634 6.805-6.366 6.805c-3.952-.22-6.366-3.073-6.366-6.805m-154.107 0v-10.537h-4.61v2.634c-1.537-1.975-3.732-3.073-6.586-3.073c-5.927 0-10.537 4.61-10.537 10.976s4.61 10.976 10.537 10.976c3.074 0 5.269-1.097 6.586-3.073v2.634h4.61zm-17.123 0c0-3.732 2.415-6.805 6.366-6.805c3.732 0 6.367 2.854 6.367 6.805c0 3.732-2.635 6.805-6.367 6.805c-3.951-.22-6.366-3.073-6.366-6.805"/><path fill="#ff5f00" d="M93.298 16.903h69.15v124.251h-69.15z"/><path fill="#eb001b" d="M97.689 79.029c0-25.245 11.854-47.637 30.074-62.126C114.373 6.366 97.47 0 79.03 0C35.343 0 0 35.343 0 79.029s35.343 79.029 79.029 79.029c18.44 0 35.343-6.366 48.734-16.904c-18.22-14.269-30.074-36.88-30.074-62.125"/><path fill="#f79e1b" d="M255.746 79.029c0 43.685-35.343 79.029-79.029 79.029c-18.44 0-35.343-6.366-48.734-16.904c18.44-14.488 30.075-36.88 30.075-62.125s-11.855-47.637-30.075-62.126C141.373 6.366 158.277 0 176.717 0c43.686 0 79.03 35.563 79.03 79.029"/></svg>
                                    </div>
                                    <div>
                                        <h5 class="fs-14 my-1">External Payment</h5>
                                        <span class="text-muted">Expiry 08/2024 </span>
                                    </div>
                                </td>
                                <td>
                                    <p class="fs-14 my-1 fw-normal text-danger">- $201.00</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="d-flex align-items-center">
                                    <div class="avatar-md me-3 align-items-center justify-content-center d-flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="53.9" height="16" viewBox="0 0 256 114"><path fill="#1a1f71" d="M97.197 1.46L63.68 81.418H41.814L25.32 17.604c-1-3.921-1.869-5.364-4.912-7.022C15.434 7.88 7.22 5.353 0 3.781L.487 1.46h35.204c4.48 0 8.514 2.983 9.54 8.148l8.715 46.273L75.462 1.46zm29.56 0l-17.103 79.958H88.966L106.071 1.46zm56.116 53.852c.086-21.099-29.174-22.27-28.983-31.697c.07-2.866 2.8-5.917 8.776-6.697c2.96-.383 11.138-.688 20.401 3.58l3.624-16.966C181.714 1.732 175.309 0 167.342 0c-20.45 0-34.835 10.862-34.95 26.428c-.134 11.514 10.275 17.931 18.103 21.766c8.063 3.916 10.767 6.433 10.73 9.933c-.058 5.365-6.44 7.74-12.373 7.828c-10.404.165-16.435-2.812-21.246-5.053l-3.755 17.528c4.84 2.218 13.76 4.145 22.999 4.243c21.74 0 35.959-10.737 36.023-27.36m54 26.106H256L239.29 1.46h-17.647c-3.98 0-7.325 2.31-8.809 5.861l-31.04 74.097h21.723l4.309-11.944h26.54zm-23.09-28.329l10.892-30.027l6.257 30.027zm-60.55 50.338h-8.406v7.823h9.402v2.352h-12.234V91.9h11.752v2.352h-8.92v6.857h8.405zm5.339-12.686h2.832v22.86h-2.832zm9.978 15.583c.064 3.833 2.48 5.41 5.344 5.41c2.03 0 3.285-.354 4.317-.804l.514 2.029c-.998.45-2.736.997-5.217.997c-4.796 0-7.661-3.187-7.661-7.889c0-4.7 2.767-8.372 7.308-8.372c5.12 0 6.44 4.445 6.44 7.31c0 .579-.033.997-.098 1.32zm8.307-2.028c.033-1.77-.74-4.572-3.928-4.572c-2.898 0-4.122 2.608-4.348 4.572zm18.154 8.758c-.74.355-2.383.903-4.475.903c-4.701 0-7.76-3.188-7.76-7.954c0-4.798 3.283-8.307 8.371-8.307c1.674 0 3.155.417 3.928.837l-.642 2.157c-.679-.354-1.741-.742-3.286-.742c-3.575 0-5.505 2.673-5.505 5.895c0 3.605 2.318 5.827 5.409 5.827c1.61 0 2.672-.386 3.477-.74zm7.948-18.772v3.735h4.056v2.156h-4.056v8.405c0 1.934.548 3.027 2.125 3.027c.772 0 1.224-.063 1.643-.194l.129 2.16c-.548.192-1.417.385-2.512.385c-1.321 0-2.384-.451-3.059-1.19c-.773-.871-1.095-2.254-1.095-4.09v-8.503h-2.416v-2.156h2.416V95.12zm8.013 8.598c0-1.836-.034-3.413-.129-4.863h2.48l.13 3.09h.094c.71-2.091 2.447-3.412 4.346-3.412c.291 0 .517.033.775.064v2.674c-.29-.066-.579-.066-.968-.066c-1.994 0-3.413 1.481-3.798 3.608a8.5 8.5 0 0 0-.097 1.32v8.308h-2.833zm25.111 2.8c0 5.764-4.026 8.276-7.76 8.276c-4.187 0-7.47-3.092-7.47-8.017c0-5.185 3.445-8.243 7.728-8.243c4.475 0 7.502 3.25 7.502 7.985m-12.333.162c0 3.413 1.932 5.99 4.701 5.99c2.706 0 4.733-2.546 4.733-6.055c0-2.64-1.32-5.958-4.669-5.958c-3.315 0-4.765 3.093-4.765 6.023m16.675-3.607c0-1.641-.034-2.93-.13-4.217h2.512l.161 2.576h.064c.773-1.45 2.576-2.898 5.152-2.898c2.156 0 5.506 1.288 5.506 6.631v9.275h-2.833v-8.984c0-2.51-.934-4.605-3.606-4.605c-1.836 0-3.286 1.321-3.799 2.898c-.13.355-.194.837-.194 1.321v9.37h-2.833z"/></svg>
                                    </div>
                                    <div>
                                        <h5 class="fs-14 my-1">External Payment</h5>
                                        <span class="text-muted">example@gmail.com</span>
                                    </div>
                                </td>
                                <td>
                                    <p class="fs-14 my-1 fw-normal text-danger">- $221.00</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="d-flex align-items-center border-0">
                                    <div class="avatar-md me-3 align-items-center justify-content-center d-flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30.88" height="16" viewBox="0 0 256 199"><path d="M46.54 198.011V184.84c0-5.05-3.074-8.342-8.343-8.342c-2.634 0-5.488.878-7.464 3.732c-1.536-2.415-3.731-3.732-7.024-3.732c-2.196 0-4.39.658-6.147 3.073v-2.634h-4.61v21.074h4.61v-11.635c0-3.731 1.976-5.488 5.05-5.488c3.072 0 4.61 1.976 4.61 5.488v11.635h4.61v-11.635c0-3.731 2.194-5.488 5.048-5.488c3.074 0 4.61 1.976 4.61 5.488v11.635zm68.271-21.074h-7.463v-6.366h-4.61v6.366h-4.171v4.17h4.17v9.66c0 4.83 1.976 7.683 7.245 7.683c1.976 0 4.17-.658 5.708-1.536l-1.318-3.952c-1.317.878-2.853 1.098-3.951 1.098c-2.195 0-3.073-1.317-3.073-3.513v-9.44h7.463zm39.076-.44c-2.634 0-4.39 1.318-5.488 3.074v-2.634h-4.61v21.074h4.61v-11.854c0-3.512 1.536-5.488 4.39-5.488c.878 0 1.976.22 2.854.439l1.317-4.39c-.878-.22-2.195-.22-3.073-.22m-59.052 2.196c-2.196-1.537-5.269-2.195-8.562-2.195c-5.268 0-8.78 2.634-8.78 6.805c0 3.513 2.634 5.488 7.244 6.147l2.195.22c2.415.438 3.732 1.097 3.732 2.195c0 1.536-1.756 2.634-4.83 2.634s-5.488-1.098-7.025-2.195l-2.195 3.512c2.415 1.756 5.708 2.634 9 2.634c6.147 0 9.66-2.853 9.66-6.805c0-3.732-2.854-5.708-7.245-6.366l-2.195-.22c-1.976-.22-3.512-.658-3.512-1.975c0-1.537 1.536-2.415 3.951-2.415c2.635 0 5.269 1.097 6.586 1.756zm122.495-2.195c-2.635 0-4.391 1.317-5.489 3.073v-2.634h-4.61v21.074h4.61v-11.854c0-3.512 1.537-5.488 4.39-5.488c.879 0 1.977.22 2.855.439l1.317-4.39c-.878-.22-2.195-.22-3.073-.22m-58.833 10.976c0 6.366 4.39 10.976 11.196 10.976c3.073 0 5.268-.658 7.463-2.414l-2.195-3.732c-1.756 1.317-3.512 1.975-5.488 1.975c-3.732 0-6.366-2.634-6.366-6.805c0-3.951 2.634-6.586 6.366-6.805c1.976 0 3.732.658 5.488 1.976l2.195-3.732c-2.195-1.757-4.39-2.415-7.463-2.415c-6.806 0-11.196 4.61-11.196 10.976m42.588 0v-10.537h-4.61v2.634c-1.537-1.975-3.732-3.073-6.586-3.073c-5.927 0-10.537 4.61-10.537 10.976s4.61 10.976 10.537 10.976c3.073 0 5.269-1.097 6.586-3.073v2.634h4.61zm-16.904 0c0-3.732 2.415-6.805 6.366-6.805c3.732 0 6.367 2.854 6.367 6.805c0 3.732-2.635 6.805-6.367 6.805c-3.951-.22-6.366-3.073-6.366-6.805m-55.1-10.976c-6.147 0-10.538 4.39-10.538 10.976s4.39 10.976 10.757 10.976c3.073 0 6.147-.878 8.562-2.853l-2.196-3.293c-1.756 1.317-3.951 2.195-6.146 2.195c-2.854 0-5.708-1.317-6.367-5.05h15.587v-1.755c.22-6.806-3.732-11.196-9.66-11.196m0 3.951c2.853 0 4.83 1.757 5.268 5.05h-10.976c.439-2.854 2.415-5.05 5.708-5.05m114.372 7.025v-18.879h-4.61v10.976c-1.537-1.975-3.732-3.073-6.586-3.073c-5.927 0-10.537 4.61-10.537 10.976s4.61 10.976 10.537 10.976c3.074 0 5.269-1.097 6.586-3.073v2.634h4.61zm-16.903 0c0-3.732 2.414-6.805 6.366-6.805c3.732 0 6.366 2.854 6.366 6.805c0 3.732-2.634 6.805-6.366 6.805c-3.952-.22-6.366-3.073-6.366-6.805m-154.107 0v-10.537h-4.61v2.634c-1.537-1.975-3.732-3.073-6.586-3.073c-5.927 0-10.537 4.61-10.537 10.976s4.61 10.976 10.537 10.976c3.074 0 5.269-1.097 6.586-3.073v2.634h4.61zm-17.123 0c0-3.732 2.415-6.805 6.366-6.805c3.732 0 6.367 2.854 6.367 6.805c0 3.732-2.635 6.805-6.367 6.805c-3.951-.22-6.366-3.073-6.366-6.805"/><path fill="#ff5f00" d="M93.298 16.903h69.15v124.251h-69.15z"/><path fill="#eb001b" d="M97.689 79.029c0-25.245 11.854-47.637 30.074-62.126C114.373 6.366 97.47 0 79.03 0C35.343 0 0 35.343 0 79.029s35.343 79.029 79.029 79.029c18.44 0 35.343-6.366 48.734-16.904c-18.22-14.269-30.074-36.88-30.074-62.125"/><path fill="#f79e1b" d="M255.746 79.029c0 43.685-35.343 79.029-79.029 79.029c-18.44 0-35.343-6.366-48.734-16.904c18.44-14.488 30.075-36.88 30.075-62.125s-11.855-47.637-30.075-62.126C141.373 6.366 158.277 0 176.717 0c43.686 0 79.03 35.563 79.03 79.029"/></svg>
                                    </div>
                                    <div>
                                        <h5 class="fs-14 my-1">Internal Payment</h5>
                                        <span class="text-muted">Expiry 09/2024</span>
                                    </div>
                                </td>
                                <td class="border-0">
                                    <p class="fs-14 my-1 fw-normal text-primary">+ $231.00</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div> <!-- end card body -->
        </div> <!-- end card -->
    </div>

    <div class="col-md-12 col-xl-8">
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <div class="border border-dark rounded-2 me-2 widget-icons-sections">
                        <i data-feather="git-commit" class="widgets-icons"></i>
                    </div>
                    <h5 class="card-title mb-0">Money Flow</h5>
                </div>
            </div>

            <div class="card-body">
                <div id="chart-money" class="apex-charts"></div>
            </div>
        </div>
    </div>
</div>

<!-- Average revenue -->
<div class="row">
    <div class="col-md-6 col-xl-6">
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <div class="border border-dark rounded-2 me-2 widget-icons-sections">
                        <i data-feather="crosshair" class="widgets-icons"></i>
                    </div>
                    <h5 class="card-title mb-0">Average revenue</h5>
                </div>
            </div>

            <div class="card-body">
                <div id="average-revenue" class="apex-charts"></div>

                <div class="row">
                    <div class="col-md-4 col-xl-4">
                        <div class="mt-3">
                            <p class="mb-2 text-dark fs-15">This month</p>
                            <h3 class="m-0 mb-1 fs-18 text-black">$ 36,026.89</h3>
                            <div class="d-flex align-items-center">
                                <span class="avatar-xs rounded-circle bg-success-subtle d-flex justify-content-center align-items-center me-2"><i class="mdi mdi-arrow-up fs-13 text-success"></i></span>
                                <p class="text-muted mb-0 fs-13">+ $ 1,670.76</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-xl-4">
                        <div class="mt-3">
                            <p class="mb-2 text-dark fs-15">Today</p>
                            <h3 class="m-0 mb-1 fs-18 text-black">$ 1,260.16</h3>
                            <div class="d-flex align-items-center">
                                <span class="avatar-xs rounded-circle bg-danger-subtle d-flex justify-content-center align-items-center me-2"><i class="mdi mdi-arrow-down fs-13 text-danger"></i></span>
                                <p class="text-muted mb-0 fs-13">+ $ 1,670.76</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-xl-4">
                        <div class="mt-3">
                            <p class="mb-2 text-dark fs-15">This Year</p>
                            <h3 class="m-0 mb-1 fs-18 text-black">$ 136,026.89</h3>
                            <div class="d-flex align-items-center">
                                <span class="avatar-xs rounded-circle bg-success-subtle d-flex justify-content-center align-items-center me-2"><i class="mdi mdi-arrow-up fs-13 text-success"></i></span>
                                <p class="text-muted mb-0 fs-13">+ $ 11,670.76</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="col-md-6 col-xl-6">
        <div class="card overflow-hidden">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <div class="border border-dark rounded-2 me-2 widget-icons-sections">
                        <i data-feather="wind" class="widgets-icons"></i>
                    </div>
                    <h5 class="card-title mb-0">Earnings Reports</h5>
                </div>
            </div>

            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-traffic mb-0">
                        <thead>
                            <tr>
                                <th class="border-top-0 fw-semibold text-black">Date</th>
                                <th class="border-top-0 fw-semibold text-black">Item Count</th>
                                <th class="border-top-0 fw-semibold text-black">Text</th>
                                <th class="border-top-0 fw-semibold text-black">Earnings</th>
                            </tr><!--end tr-->
                        </thead>

                        <tr>
                            <td>
                                <a href="#" class="text-reset">01 January</a>
                            </td>
                            <td>
                                45
                            </td>
                            <td class="text-success">
                                +$70
                            </td> 
                            <td>
                                $78,000
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <a href="#" class="text-reset">05 February</a>
                            </td>
                            <td>
                                35
                            </td>
                            <td class="text-danger">
                                -$48
                            </td> 
                            <td>
                                $18,000
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <a href="#" class="text-reset">15 March</a>
                            </td>
                            <td>
                                28
                            </td>
                            <td class="text-danger">
                                -$31
                            </td> 
                            <td>
                                $15,000
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <a href="#" class="text-reset">06 April</a>
                            </td>
                            <td>
                                38
                            </td>
                            <td class="text-success">
                                +$58
                            </td> 
                            <td>
                                $125,000
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <a href="#" class="text-reset">08 May</a>
                            </td>
                            <td>
                                42
                            </td>
                            <td class="text-success">
                                +$65
                            </td> 
                            <td>
                                $80,000
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <a href="#" class="text-reset">25 December</a>
                            </td>
                            <td>
                                39
                            </td>
                            <td class="text-danger">
                                -$41
                            </td> 
                            <td>
                                $73,000
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <a href="#" class="text-reset">18 January</a>
                            </td>
                            <td>
                                45
                            </td>
                            <td class="text-success">
                                +$74
                            </td> 
                            <td>
                                $72,500
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <a href="#" class="text-reset">09 September</a>
                            </td>
                            <td>
                                29
                            </td>
                            <td class="text-danger">
                                -$25
                            </td> 
                            <td>
                                $23,000
                            </td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Sale Section Mix Widget -->
<div class="row">
    <div class="col-md-6 col-xl-4">
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <div class="border border-dark rounded-2 me-2 widget-icons-sections">
                        <i data-feather="pie-chart" class="widgets-icons"></i>
                    </div>
                    <h5 class="card-title mb-0">Sales by Region</h5>
                </div>
            </div>

            <div class="card-body">
                <div id="sales-region" class="apex-charts"></div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-xl-4">
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <div class="border border-dark rounded-2 me-2 widget-icons-sections">
                        <i data-feather="cpu" class="widgets-icons"></i>
                    </div>
                    <h5 class="card-title mb-0">Top Selling Products</h5>
                </div>
            </div>

            <!-- start card body -->
            <div class="card-body">
                <ul class="list-group custom-group">
                    <li class="list-group-item align-items-center d-flex justify-content-between">
                        <div class="product-list">
                            <img class="avatar-md p-1 rounded-circle bg-primary-subtle img-fluid me-3" src="/images/products/shoes.jpg" alt="product-image">

                            <div class="product-body align-self-center">
                                <h6 class="m-0 fw-semibold">Nike Shoes</h6>
                                <p class="mb-0 mt-1 text-muted">Fashion</p>
                            </div>
                        </div>

                        <div class="product-price">
                            <h6 class="m-0 fw-semibold">$990</h6>
                            <p class="mb-0 mt-1 text-muted">10 Sold</p>
                        </div>
                    </li>

                    <li class="list-group-item align-items-center d-flex justify-content-between border-bottom">
                        <div class="product-list">
                            <img class="avatar-md p-1 rounded-circle bg-primary-subtle img-fluid me-3" src="/images/products/bags.jpg" alt="product-image">

                            <div class="product-body align-self-center">
                                <h6 class="m-0 fw-semibold">Nike Shoes</h6>
                                <p class="mb-0 mt-1 text-muted">Fashion</p>
                            </div>
                        </div>

                        <div class="product-price">
                            <h6 class="m-0 fw-semibold">$990</h6>
                            <p class="mb-0 mt-1 text-muted">10 Sold</p>
                        </div>
                    </li>

                    <li class="list-group-item align-items-center d-flex justify-content-between border-bottom">
                        <div class="product-list">
                            <img class="avatar-md p-1 rounded-circle bg-primary-subtle img-fluid me-3" src="/images/products/dresses.jpg" alt="product-image">

                            <div class="product-body align-self-center">
                                <h6 class="m-0 fw-semibold">Nike Shoes</h6>
                                <p class="mb-0 mt-1 text-muted">Fashion</p>
                            </div>
                        </div>

                        <div class="product-price">
                            <h6 class="m-0 fw-semibold">$990</h6>
                            <p class="mb-0 mt-1 text-muted">10 Sold</p>
                        </div>
                    </li>

                    <li class="list-group-item align-items-center d-flex justify-content-between border-bottom">
                        <div class="product-list">
                            <img class="avatar-md p-1 rounded-circle bg-primary-subtle img-fluid me-3" src="/images/products/headphone.jpg" alt="product-image">

                            <div class="product-body align-self-center">
                                <h6 class="m-0 fw-semibold">Nike Shoes</h6>
                                <p class="mb-0 mt-1 text-muted">Fashion</p>
                            </div>
                        </div>

                        <div class="product-price">
                            <h6 class="m-0 fw-semibold">$990</h6>
                            <p class="mb-0 mt-1 text-muted">10 Sold</p>
                        </div>
                    </li>
                </ul>
            </div> 
            <!-- end card body -->
        </div>
    </div>

    <div class="col-md-6 col-xl-4">
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <div class="border border-dark rounded-2 me-2 widget-icons-sections">
                        <i data-feather="framer" class="widgets-icons"></i>
                    </div>
                    <h5 class="card-title mb-0">Website Visitors</h5>
                </div>
            </div>

            <div class="card-body">
                <div id="website-visitors" class="apex-charts"></div>
            </div>
        </div>
    </div>
</div>

<!-- Tasks -->
<div class="row">
    <div class="col-md-12">
        <div class="card overflow-hidden">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <div class="border border-dark rounded-2 me-2 widget-icons-sections">
                        <i data-feather="crosshair" class="widgets-icons"></i>
                    </div>
                    <h5 class="card-title mb-0">Tasks</h5>
                </div>
            </div>

            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-traffic mb-0">

                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Task Name</th>
                                <th>Created Date</th>
                                <th>Number of Task</th>
                                <th>Deadline</th>
                                <th>Project</th>
                                <th>Assignee</th>
                            </tr>
                        </thead>

                        <tr>
                            <td>
                                <input type="checkbox" class="form-check-input m-0 align-middle" aria-label="Select task" checked>
                            </td>
                            <td>
                                <a href="#" class="text-reset">Create user interface designs.</a>
                            </td>
                            <td class="text-nowrap text-reset">
                                <i data-feather="calendar" style="height: 18px; width: 18px;" class="me-1"></i>
                                June 01, 2024
                            </td>
                            <td>
                                <a href="#" class="text-reset">
                                    <i data-feather="check" style="height: 18px; width: 18px;" class="me-1"></i>
                                    4/8
                                </a>
                            </td>
                            <td class="text-nowrap text-reset">
                                <i data-feather="calendar" style="height: 18px; width: 18px;" class="me-1"></i>
                                June 10, 2024
                            </td>
                            <td>
                                <a href="#" class="text-reset">
                                    <i data-feather="folder" style="height: 18px; width: 18px;" class="me-1"></i>
                                    2
                                </a>
                            </td>
                            <td>
                                <img src="/images/users/user-11.jpg" class="avatar avatar-sm rounded-2" />
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <input type="checkbox" class="form-check-input m-0 align-middle" aria-label="Select task" >
                            </td>
                            <td>
                                <a href="#" class="text-reset">Test new features and updates.</a>
                            </td>
                            <td class="text-nowrap text-reset">
                                <i data-feather="calendar" style="height: 18px; width: 18px;" class="me-1"></i>
                                July 15, 2023
                            </td>
                            <td class="text-nowrap">
                                <a href="#" class="text-reset">
                                    <i data-feather="check" style="height: 18px; width: 18px;" class="me-1"></i>
                                    1/5
                                </a>
                            </td>
                            <td class="text-nowrap text-reset">
                                <i data-feather="calendar" style="height: 18px; width: 18px;" class="me-1"></i>
                                September 10, 2023
                            </td>
                            <td class="text-nowrap">
                                <a href="#" class="text-reset">
                                    <i data-feather="folder" style="height: 18px; width: 18px;" class="me-1"></i>
                                    4
                                </a>
                            </td>
                            <td>
                                <img src="/images/users/user-12.jpg" class="avatar avatar-sm rounded-2" />
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <input type="checkbox" class="form-check-input m-0 align-middle" aria-label="Select task" >
                            </td>
                            <td>
                                <a href="#" class="text-reset">Optimize database queries</a>
                            </td>
                            <td class="text-nowrap text-reset">
                                <i data-feather="calendar" style="height: 18px; width: 18px;" class="me-1"></i>
                                August 12, 2023
                            </td>
                            <td class="text-nowrap">
                                <a href="#" class="text-reset">
                                    <i data-feather="check" style="height: 18px; width: 18px;" class="me-1"></i>
                                    0/4
                                </a>
                            </td>
                            <td class="text-nowrap text-reset">
                                <i data-feather="calendar" style="height: 18px; width: 18px;" class="me-1"></i>
                                December 08, 2023
                            </td>
                            <td class="text-nowrap">
                                <a href="#" class="text-reset">
                                    <i data-feather="folder" style="height: 18px; width: 18px;" class="me-1"></i>
                                    1
                                </a>
                            </td>
                            <td>
                                <img src="/images/users/user-13.jpg" class="avatar avatar-sm img-fluid rounded-2" />
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <input type="checkbox" class="form-check-input m-0 align-middle" aria-label="Select task">
                            </td>
                            <td>
                                <a href="#" class="text-reset">Develop API endpoints.</a>
                            </td>
                            <td class="text-nowrap text-reset">
                                <i data-feather="calendar" style="height: 18px; width: 18px;" class="me-1"></i>
                                September 5, 2023
                            </td>
                            <td class="text-nowrap">
                                <a href="#" class="text-reset">
                                    <i data-feather="check" style="height: 18px; width: 18px;" class="me-1"></i>
                                2/6
                                </a>
                            </td>
                            <td class="text-nowrap text-reset">
                                <i data-feather="calendar" style="height: 18px; width: 18px;" class="me-1"></i>
                                Fabruary 25, 2024
                            </td>
                            <td class="text-nowrap">
                                <a href="#" class="text-reset">
                                    <i data-feather="folder" style="height: 18px; width: 18px;" class="me-1"></i>
                                    5
                                </a>
                            </td>
                            <td>
                                <img src="/images/users/user-14.jpg" class="avatar avatar-sm img-fluid rounded-2" />
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <input type="checkbox" class="form-check-input m-0 align-middle" aria-label="Select task" checked >
                            </td>
                            <td>
                                <a href="#" class="text-reset">Conduct user feedback surveys</a>
                            </td>
                            <td class="text-nowrap text-reset">
                                <i data-feather="calendar" style="height: 18px; width: 18px;" class="me-1"></i>
                                October 1, 2023
                            </td>
                            <td class="text-nowrap">
                                <a href="#" class="text-reset">
                                    <i data-feather="check" style="height: 18px; width: 18px;" class="me-1"></i>
                                    4/10
                                </a>
                            </td>
                            <td class="text-nowrap text-reset">
                                <i data-feather="calendar" style="height: 18px; width: 18px;" class="me-1"></i>
                                November 29, 2023
                            </td>
                            <td class="text-nowrap">
                                <a href="#" class="text-reset">
                                    <i data-feather="folder" style="height: 18px; width: 18px;" class="me-1"></i>
                                    3
                                </a>
                            </td>
                            <td>
                                <img src="/images/users/user-15.jpg" class="avatar avatar-sm img-fluid rounded-2" />
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <input type="checkbox" class="form-check-input m-0 align-middle" aria-label="Select task" checked >
                            </td>
                            <td>
                                <a href="#" class="text-reset">Review codebase for security vulnerabilities</a>
                            </td>
                            <td class="text-nowrap text-reset">
                                <i data-feather="calendar" style="height: 18px; width: 18px;" class="me-1"></i>
                                May 15, 2023
                            </td>
                            <td class="text-nowrap">
                                <a href="#" class="text-reset">
                                    <i data-feather="check" style="height: 18px; width: 18px;" class="me-1"></i>
                                    5/8
                                </a>
                            </td>
                            <td class="text-nowrap text-reset">
                                <i data-feather="calendar" style="height: 18px; width: 18px;" class="me-1"></i>
                                December 08, 2023
                            </td>
                            <td class="text-nowrap">
                                <a href="#" class="text-reset">
                                    <i data-feather="folder" style="height: 18px; width: 18px;" class="me-1"></i>
                                    6
                                </a>
                            </td>
                            <td>
                                <img src="/images/users/user-10.jpg" class="avatar avatar-sm img-fluid rounded-2" />
                            </td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
    <script src="https://apexcharts.com/samples/assets/stock-prices.js"></script>
    @vite(['resources/js/pages/widgets.init.js'])
@endsection
