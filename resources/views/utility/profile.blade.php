@extends('layouts.vertical', ['title' => 'Starter'])

@section('content')
<div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-semibold m-0">Profile</h4>
    </div>

    <div class="text-end">
        <ol class="breadcrumb m-0 py-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Components</a></li>
            <li class="breadcrumb-item active">Profile</li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">

            <div class="card-body">

                <div class="align-items-center">
                    <div class="d-flex align-items-center">
                        <img src="/images/users/user-11.jpg" class="rounded-circle avatar-xxl img-thumbnail float-start" alt="image profile">

                        <div class="overflow-hidden ms-4">
                            <h4 class="m-0 text-dark fs-20">Phoenix Baker</h4>
                            <p class="my-1 text-muted fs-16">Passionate Software Engineer Crafting Innovative Solutions</p>
                            <span class="fs-15"><i class="mdi mdi-message me-2 align-middle"></i>Speaks: <span>English <span class="badge bg-primary-subtle text-primary px-2 py-1 fs-13 fw-normal">native</span> , Bitish, Turkish </span></span>
                        </div>
                    </div>
                </div>

                <ul class="nav nav-underline border-bottom pt-2" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active p-2" id="profile_about_tab" data-bs-toggle="tab" href="#profile_about" role="tab">
                            <span class="d-block d-sm-none"><i class="mdi mdi-information"></i></span>
                            <span class="d-none d-sm-block">About</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link p-2" id="profile_experience_tab" data-bs-toggle="tab" href="#profile_experience" role="tab">
                            <span class="d-block d-sm-none"><i class="mdi mdi-sitemap-outline"></i></span>
                            <span class="d-none d-sm-block">Work experience</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link p-2" id="portfolio_education_tab" data-bs-toggle="tab" href="#profile_education" role="tab">
                            <span class="d-block d-sm-none"><i class="mdi mdi-school"></i></span>
                            <span class="d-none d-sm-block">Education</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link p-2" id="setting_tab" data-bs-toggle="tab" href="#profile_setting" role="tab">
                            <span class="d-block d-sm-none"><i class="mdi mdi-school"></i></span>
                            <span class="d-none d-sm-block">Setting</span>
                        </a>
                    </li>
                </ul>

                <div class="tab-content text-muted bg-white">
                    <div class="tab-pane active show pt-4" id="profile_about" role="tabpanel">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-md-6 mb-4">
                                <div class="">
                                    <h5 class="fs-16 text-dark fw-semibold mb-3 text-capitalize">About me</h5>
                                    <p>Geetings, fellow software enthusiasts! I'm thrilled to see your intereset in exploring my profile. I'm Christian Mayo, 
                                        a 24-year-old software engineer from the United Kingdom. My educational path led me to earn a Bachelor's Degeer in Computer Science, 
                                        specializing in Software Engineering. With this qualification, I'm equipped to dive into the world of coding and develooment,ready 
                                        to tackle exciting projects and contribute to cutting-edge technological advancement...
                                    </p>
                                </div>

                                <div class="skills-details mt-3">
                                    <h6 class="text-uppercase fs-13">Skills</h6>

                                    <div class="d-flex flex-wrap gap-2"> 
                                        <span class="badge bg-light px-3 text-dark py-2 fw-semibold">User Interface</span>
                                        <span class="badge bg-light px-3 text-dark py-2 fw-semibold">User Experience</span>
                                        <span class="badge bg-light px-3 text-dark py-2 fw-semibold">Interaction Design </span>
                                        <span class="badge bg-light px-3 text-dark py-2 fw-semibold">3D Design</span>
                                        <span class="badge bg-light px-3 text-dark py-2 fw-semibold">Information Architecture</span>
                                        <span class="badge bg-light px-3 text-dark py-2 fw-semibold">User Research</span>
                                        <span class="badge bg-light px-3 text-dark py-2 fw-semibold">Wireframing</span>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-md-6 mb-4">
                                <h5 class="fs-16 text-dark fw-semibold mb-3 text-capitalize">Contact Details</h5>
                                
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-lg-4">
                                        <div class="profile-email">
                                            <h6 class="text-uppercase fs-13">Email Addess</h6>
                                            <a href="#" class="text-primary fs-14 text-decoration-underline">zoyothemes@gmail.com</a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-lg-4">
                                        <div class="profile-email">
                                            <h6 class="text-uppercase fs-13">Social Media</h6>
                                            <ul class="social-list list-inline mt-0 mb-0">
                                                <li class="list-inline-item">
                                                    <a href="javascript: void(0);" class="social-item border-primary text-primary justify-content-center align-content-center"><i class="mdi mdi-facebook fs-14"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="javascript: void(0);" class="social-item border-danger text-danger justify-content-center align-content-center"><i class="mdi mdi-google fs-14"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="javascript: void(0);" class="social-item border-info text-info justify-content-center align-content-center"><i class="mdi mdi-twitter fs-14"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="javascript: void(0);" class="social-item border-secondary text-secondary justify-content-center align-content-center"><i class="mdi mdi-github fs-14"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-lg-4">
                                        <div class="profile-email">
                                            <h6 class="text-uppercase fs-13">Location</h6>
                                            <a href="#" class="fs-14">Melbourne, Australia</a>
                                        </div>
                                    </div>
                                </div>                                                    

                                <div class="skills-details mt-3">
                                    <h6 class="text-uppercase fs-13">Fluent In</h6>

                                    <div class="d-flex flex-wrap gap-2"> 
                                        <span class="badge bg-light px-3 py-2 text-dark fw-semibold">English</span>
                                        <span class="badge bg-light px-3 py-2 text-dark fw-semibold">Madrian</span>
                                        <span class="badge bg-light px-3 py-2 text-dark fw-semibold">Spanish</span>
                                        <span class="badge bg-light px-3 py-2 text-dark fw-semibold">French</span>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-md-6 mb-0">
                                <div class="">
                                    <h5 class="fs-16 text-dark fw-semibold mb-3 text-capitalize">Projects</h5>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <div class="card border">
                                            <div class="card-body">
                                                <h4 class="m-0 fw-semibold text-dark fs-16">Website Developing</h4>
                                                <div class="row mt-2 d-flex align-items-center">
                                                    <div class="col">
                                                        <h5 class="fs-20 mt-1 fw-bold">$12,000</h5> 
                                                        <p class="mb-0 text-muted">Total Budget</p>
                                                    </div>
                                                    <div class="col-auto">
                                                        <a href="#" class="btn btn-sm btn-outline-dark px-3">More Details</a>
                                                    </div>
                                                </div>
                                            </div><!--end card-body-->
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="card border">
                                            <div class="card-body">
                                                <h4 class="m-0 fw-semibold text-dark fs-16">Algorithm Developing</h4>
                                                <div class="row mt-2 d-flex align-items-center">
                                                    <div class="col">
                                                        <h5 class="fs-20 mt-1 fw-bold">$35,800</h5> 
                                                        <p class="mb-0 text-muted">Total Budget</p>
                                                    </div>
                                                    <div class="col-auto">
                                                        <a href="#" class="btn btn-sm btn-outline-dark px-3">More Details</a>
                                                    </div>
                                                </div>
                                            </div><!--end card-body-->
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="card border mb-0">
                                            <div class="card-body ">
                                                <h4 class="m-0 fw-semibold text-dark fs-16">Digital Marketing</h4>
                                                <div class="row mt-2 d-flex align-items-center">
                                                    <div class="col">
                                                        <h5 class="fs-20 mt-1 fw-bold">$8,000</h5> 
                                                        <p class="mb-0 text-muted">Total Budget</p>
                                                    </div>
                                                    <div class="col-auto">
                                                        <a href="#" class="btn btn-sm btn-outline-dark px-3">More Details</a>
                                                    </div>
                                                </div>
                                            </div><!--end card-body-->
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="card border mb-0">
                                            <div class="card-body">
                                                <h4 class="m-0 fw-semibold text-dark fs-16">Mobile Developing</h4>
                                                <div class="row mt-2 d-flex align-items-center">
                                                    <div class="col">
                                                        <h5 class="fs-20 mt-1 fw-bold">$16,000</h5>
                                                        <p class="mb-0 text-muted">Total Budget</p>
                                                    </div>
                                                    <div class="col-auto align-content-end">
                                                        <a href="#" class="btn btn-sm btn-outline-dark px-3">More Details</a>
                                                    </div>
                                                </div>
                                            </div><!--end card-body-->
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end project -->

                            <div class="col-md-6 col-sm-6 col-md-6 mb-0">
                                <div class="">
                                    <h5 class="fs-16 text-dark fw-semibold mb-3 text-capitalize">Expertise</h5>
                                </div>

                                <div class="row align-items-center g-0">
                                    <div class="col-sm-3">
                                        <p class="text-truncate mt-1 mb-0"><i class="mdi mdi-circle-medium text-primary me-2"></i> Photoshop </p>
                                    </div>
                
                                    <div class="col-sm-9">
                                        <div class="progress mt-1" style="height: 8px;">
                                            <div class="progress-bar progress-bar bg-primary rounded" role="progressbar" style="width: 72%" aria-valuenow="52" aria-valuemin="0" aria-valuemax="52">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row align-items-center g-0 mt-3">
                                    <div class="col-sm-3">
                                        <p class="text-truncate mt-1 mb-0"><i class="mdi mdi-circle-medium text-primary me-2"></i> illustrator </p>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="progress mt-1" style="height: 8px;">
                                            <div class="progress-bar progress-bar bg-primary rounded" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="45">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row align-items-center g-0 mt-3">
                                    <div class="col-sm-3">
                                        <p class="text-truncate mt-1 mb-0"><i class="mdi mdi-circle-medium text-primary me-2"></i> HTML </p>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="progress mt-1" style="height: 8px;">
                                            <div class="progress-bar progress-bar bg-primary rounded" role="progressbar" style="width: 68%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="48">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row align-items-center g-0 mt-3">
                                    <div class="col-sm-3">
                                        <p class="text-truncate mt-1 mb-0"><i class="mdi mdi-circle-medium text-primary me-2"></i> CSS </p>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="progress mt-1" style="height: 8px;">
                                            <div class="progress-bar progress-bar bg-primary rounded" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="78">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row align-items-center g-0 mt-3">
                                    <div class="col-sm-3">
                                        <p class="text-truncate mt-1 mb-0"><i class="mdi mdi-circle-medium text-primary me-2"></i> Javascript </p>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="progress mt-1" style="height: 8px;">
                                            <div class="progress-bar progress-bar bg-primary rounded" role="progressbar" style="width: 63%" aria-valuenow="63" aria-valuemin="0" aria-valuemax="63">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row align-items-center g-0 mt-3">
                                    <div class="col-sm-3">
                                        <p class="text-truncate mt-1 mb-0"><i class="mdi mdi-circle-medium text-primary me-2"></i> Php </p>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="progress mt-1" style="height: 8px;">
                                            <div class="progress-bar progress-bar bg-primary rounded" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="48">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div><!-- end skill -->
                        </div>

                    </div><!-- end Experience -->
                    
                    <div class="tab-pane pt-4" id="profile_experience" role="tabpanel">
                        <div class="row">

                            <div class="col-md-12 col-sm-12 col-lg-6">
                                <h5 class="fs-16 text-dark fw-semibold mb-3 text-capitalize">Experience</h5>
                            </div>

                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-lg-6">
                                    <ol class="profile-section list-unstyled mb-0 px-4">
                                        <li class="profile-item">
                                            <div class="avatar-sm profile-icon p-1">
                                                <div class="avatar-title rounded-2 bg-light" style="height: 35px; width: 35px;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 128 128"><path fill="#fff" d="m76.25.25l13.059.086c.246.191.445.316.656.41c2.367 1.07 4.933 1.836 7.066 3.258c6.184 4.11 12.223 8.441 18.258 12.77c2.805 2.007 5.57 4.097 8.156 6.37c1.922 1.688 2.785 4.083 2.79 6.637l-.005 80.371c-.003 1.121-.195 2.274-.507 3.352c-1.418 4.914-4.563 8.277-9.512 9.59c-2.61.691-5.367.906-8.074 1.129c-4.223.351-8.461.523-12.692.777l-8.004.5l-12.816.754l-7.879.492l-12.941.75l-6.688.274c-.215.011-.414.312-.617.48c-5.09 0-10.176 0-15.309-.082c-.246-.195-.433-.352-.652-.414c-3.102-.899-5.703-2.613-7.703-5.102c-2.77-3.441-5.402-6.988-8.066-10.511c-3.274-4.329-6.633-8.594-9.727-13.047a15.47 15.47 0 0 1-2.79-8.875a72122 72122 0 0 1 .009-71.211c0-.684.12-1.375.238-2.055C3.742 9.645 9.152 5.746 15.586 5.023c3.34-.375 6.703-.543 10.059-.765l8.87-.512l3.813-.25l11.5-.992l6.375-.5l10.559-.75l8.87-.524c.216-.015.415-.312.618-.48M25.945 114.184c.532.691 1.125 1.347 1.59 2.082c2.254 3.527 5.485 4.808 9.59 4.535l27.809-1.656l31.296-1.891l15.582-1.004c4.618-.371 6.848-2.867 6.938-7.5v-1l.035-75.863c.004-2.285-.785-3.883-2.613-5.16l-22.024-15.52c-3.543-2.578-7.304-3.781-11.66-3.437L57.824 9.594l-25.789 1.902l-16.187 1.262c-3.27.3-5.297 2.3-5.883 5.508a14 14 0 0 0-.207 2.48l-.067 66.242c-.023 4.34 1.305 7.95 3.903 11.27zm0 0"/><path d="m25.887 114.117l-12.293-15.86c-2.598-3.32-3.926-6.929-3.903-11.269l.067-66.242c0-.828.062-1.668.207-2.48c.586-3.207 2.613-5.207 5.883-5.508l16.187-1.262l25.79-1.902L82.488 7.77c4.356-.344 8.117.859 11.66 3.437c7.262 5.285 14.66 10.383 22.024 15.52c1.828 1.277 2.617 2.875 2.613 5.16l-.035 75.867v1c-.09 4.629-2.32 7.125-6.938 7.496c-5.187.418-10.386.688-15.582 1.004l-31.296 1.89l-27.809 1.657c-4.105.273-7.336-1.008-9.59-4.535c-.465-.735-1.058-1.391-1.648-2.149m6.406-45.992v33.488l.008 6.246c.054 2.801 1.426 4.196 4.226 4.356c.703.039 1.414.015 2.121-.028l23.442-1.382l44.765-2.559c2.79-.156 4.079-1.379 4.34-4.144c.051-.497.035-1 .035-1.5l.004-64.477c0-.375.012-.75-.011-1.125c-.168-2.566-1.27-3.613-3.82-3.477l-23.071 1.329a43791 43791 0 0 0-32.418 1.898l-16.207.973c-2.066.132-3 1.023-3.312 3.043a10.6 10.6 0 0 0-.098 1.617zm57.172-52.727c-1.957-1.062-4.082-1.414-6.27-1.293c-3.363.184-6.726.461-10.09.704l-47.949 3.484c-1.449.105-2.906.21-4.336.469c-.48.086-1.086.57-1.234 1.008c-.11.308.375.93.73 1.27c.657.628 1.414 1.155 2.13 1.722c1.699 1.34 3.507 2.562 5.066 4.043c2.957 2.808 6.398 3.457 10.34 3.172l31.035-1.946l33.41-2.004c.305-.015.61-.109 1.281-.234c-.613-.637-.969-1.125-1.433-1.469a234 234 0 0 0-4.957-3.562a698 698 0 0 0-7.723-5.364m0 0"/><path fill="#fff" d="m32.293 68l.004-25.617c0-.54.016-1.086.098-1.617c.312-2.02 1.246-2.91 3.312-3.043l16.207-.973l32.418-1.898l23.07-1.329c2.551-.136 3.653.914 3.82 3.477c.024.375.012.75.012 1.125l-.004 64.477l-.035 1.5c-.261 2.765-1.55 3.988-4.34 4.144l-44.765 2.559l-23.442 1.382l-2.12.028c-2.801-.16-4.173-1.555-4.227-4.352l-.008-6.25zm45.766.066L65.191 48.461c-.449-.684-.89-.91-1.718-.82l-5.485.37l-10.09.739c-2.48.227-3.98 2.559-3.293 4.977l5.344.457v43.293l-3.64 1.027c-1.614.476-2.305 1.836-1.762 3.574l12.308-.707l4.848-.398c2.09-.344 3.215-1.625 3.496-3.715l-6.73-1.535V63.16l.5.7l15.468 24.152a361 361 0 0 0 7.004 10.46c1.707 2.45 4.223 3.2 7.051 2.59c1.77-.378 3.469-1.097 5.203-1.656c.903-.293 1.211-.832 1.207-1.844l-.03-44.5c0-2.601 0-2.601 2.573-3.12c2.602-.524 3.254-1.563 2.66-4.344l-15.55.945c-1.692.121-2.973 1.535-3.23 3.18c-.126.793.038 1.23.987 1.285l4.708.52v30.179a7435 7435 0 0 0-8.961-13.637zM89.55 15.441a1123 1123 0 0 1 7.636 5.32a234 234 0 0 1 4.958 3.563c.464.344.82.832 1.433 1.469l-1.281.234l-33.41 2.004l-31.035 1.946c-3.942.285-7.383-.364-10.34-3.172c-1.559-1.48-3.367-2.703-5.067-4.043c-.715-.567-1.472-1.094-2.129-1.723c-.355-.34-.84-.96-.73-1.27c.148-.437.758-.921 1.234-1.007c1.43-.258 2.887-.364 4.336-.469l47.95-3.484l10.09-.704c2.187-.12 4.312.23 6.355 1.336m0 0"/><path d="m78.113 68.14l8.907 13.567v-30.18l-4.707-.52c-.95-.054-1.114-.491-.989-1.284c.258-1.645 1.54-3.059 3.23-3.18l15.551-.945c.594 2.78-.058 3.82-2.66 4.343c-2.574.516-2.574.516-2.574 3.121l.031 44.5c.004 1.012-.304 1.551-1.207 1.844l-5.203 1.656c-2.828.606-5.344-.14-7.05-2.59a367 367 0 0 1-7.004-10.46l-15.47-24.153c-.109-.172-.234-.332-.5-.699v32.563l6.731 1.535c-.281 2.09-1.406 3.37-3.496 3.715c-1.594.261-3.23.3-4.848.398l-12.308.707c-.543-1.738.148-3.098 1.762-3.574l3.64-1.027V54.184l-5.344-.457c-.687-2.418.813-4.75 3.293-4.977c3.356-.313 6.727-.504 10.09-.738c1.828-.125 3.664-.172 5.485-.371c.828-.09 1.27.136 1.718.82zm0 0"/></svg>
                                                </div>
                                            </div>
                                            <div class="exper-item-list">
                                                <div>
                                                    <h5 class="fs-16 text-dark">Chief Product Officer</h5>
                                                    <div class="list-inline list-inline-dots mb-1 fs-14">
                                                        <div class="list-inline-item">Notion</div>
                                                        <div class="list-inline-item list-inline-item-second">Full-time</div>
                                                    </div>
                                                    <div class="list-inline list-inline-dots mb-2 fs-14">
                                                        <div class="list-inline-item">Jan 2020 - Present</div>
                                                        <div class="list-inline-item list-inline-item-second">2 years</div>
                                                    </div>
                                                    <p class="mb-0">Responsible for the product management, product design, research and product partnerships teams at Notion.</p>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="profile-item">
                                            <div class="avatar-sm profile-icon p-1">
                                                <div class="avatar-title rounded-2 bg-light" style="height: 35px; width: 35px;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 256 232"><path fill="#fdb300" d="M128 0L55.855 7.628L0 82.607l128 149.055L256 82.607L200.146 7.628z"/><path fill="#eb6c00" d="m0 82.608l128 149.054L51.846 82.608zm204.153 0L128 231.662L255.999 82.608z"/><path fill="#fdad00" d="M51.846 82.608L128 231.662l76.154-149.054z"/><path fill="#fdd231" d="m55.855 7.628l-4.009 74.979L128 0zm148.298 74.98l-4.008-74.98L128 .001z"/><path fill="#fdad00" d="M204.154 82.608h51.845l-55.854-74.98zM0 82.608h51.846l4.009-74.98z"/><path fill="#feeeb7" d="M128 0L51.846 82.607h152.308z"/></svg>
                                                </div>
                                            </div>
                                            <div class="exper-item-list">
                                                <div>
                                                    <h5 class="font-size-16 mb-1">VP, Product Management</h5>
                                                    <div class="list-inline list-inline-dots mb-1 fs-14">
                                                        <div class="list-inline-item">Sketch</div>
                                                        <div class="list-inline-item list-inline-item-second">Full-time</div>
                                                    </div>
                                                    <div class="list-inline list-inline-dots mb-2 fs-14">
                                                        <div class="list-inline-item">Feb 2016 - May 2020</div>
                                                        <div class="list-inline-item list-inline-item-second">2 years</div>
                                                    </div>
                                                    <p class="mb-0">Lead and grew the sketch product management team. Managed teams across Menio Park, Denver, New York and Remote offices.</p>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="profile-item pb-0">
                                            <div class="avatar-sm profile-icon p-1">
                                                <div class="avatar-title rounded-2 bg-light" style="height: 35px; width: 35px;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 448 512">
                                                        <path fill="#4a5a6b" d="M330.61 243.52a36.15 36.15 0 0 1 9.3 0c1.66-3.83 1.95-10.43.45-17.61c-2.23-10.67-5.25-17.14-11.48-16.13s-6.47 8.74-4.24 19.42c1.26 6 3.49 11.14 6 14.32zM277.05 252c4.47 2 7.2 3.26 8.28 2.13c1.89-1.94-3.48-9.39-12.12-13.09a31.44 31.44 0 0 0-30.61 3.68c-3 2.18-5.81 5.22-5.41 7.06c.85 3.74 10-2.71 22.6-3.48c7-.44 12.8 1.75 17.26 3.71zm-9 5.13c-9.07 1.42-15 6.53-13.47 10.1c.9.34 1.17.81 5.21-.81a37 37 0 0 1 18.72-1.95c2.92.34 4.31.52 4.94-.49c1.46-2.22-5.71-8-15.39-6.85zm54.17 17.1c3.38-6.87-10.9-13.93-14.3-7s10.92 13.88 14.32 6.97zm15.66-20.47c-7.66-.13-7.95 15.8-.26 15.93s7.98-15.81.28-15.96zm-218.79 78.9c-1.32.31-6 1.45-8.47-2.35c-5.2-8 11.11-20.38 3-35.77c-9.1-17.47-27.82-13.54-35.05-5.54c-8.71 9.6-8.72 23.54-5 24.08c4.27.57 4.08-6.47 7.38-11.63a12.83 12.83 0 0 1 17.85-3.72c11.59 7.59 1.37 17.76 2.28 28.62c1.39 16.68 18.42 16.37 21.58 9a2.08 2.08 0 0 0-.2-2.33c.03.89.68-1.3-3.35-.39zm299.72-17.07c-3.35-11.73-2.57-9.22-6.78-20.52c2.45-3.67 15.29-24-3.07-43.25c-10.4-10.92-33.9-16.54-41.1-18.54c-1.5-11.39 4.65-58.7-21.52-83c20.79-21.55 33.76-45.29 33.73-65.65c-.06-39.16-48.15-51-107.42-26.47l-12.55 5.33c-.06-.05-22.71-22.27-23.05-22.57C169.5-18-41.77 216.81 25.78 273.85l14.76 12.51a72.49 72.49 0 0 0-4.1 33.5c3.36 33.4 36 60.42 67.53 60.38c57.73 133.06 267.9 133.28 322.29 3c1.74-4.47 9.11-24.61 9.11-42.38s-10.09-25.27-16.53-25.27zm-316 48.16c-22.82-.61-47.46-21.15-49.91-45.51c-6.17-61.31 74.26-75.27 84-12.33c4.54 29.64-4.67 58.49-34.12 57.81zM84.3 249.55C69.14 252.5 55.78 261.09 47.6 273c-4.88-4.07-14-12-15.59-15c-13.01-24.85 14.24-73 33.3-100.21C112.42 90.56 186.19 39.68 220.36 48.91c5.55 1.57 23.94 22.89 23.94 22.89s-34.15 18.94-65.8 45.35c-42.66 32.85-74.89 80.59-94.2 132.4M323.18 350.7s-35.74 5.3-69.51-7.07c6.21-20.16 27 6.1 96.4-13.81c15.29-4.38 35.37-13 51-25.35a102.85 102.85 0 0 1 7.12 24.28c3.66-.66 14.25-.52 11.44 18.1c-3.29 19.87-11.73 36-25.93 50.84A106.86 106.86 0 0 1 362.55 421a132.45 132.45 0 0 1-20.34 8.58c-53.51 17.48-108.3-1.74-126-43a66.33 66.33 0 0 1-3.55-9.74c-7.53-27.2-1.14-59.83 18.84-80.37c1.23-1.31 2.48-2.85 2.48-4.79a8.45 8.45 0 0 0-1.92-4.54c-7-10.13-31.19-27.4-26.33-60.83c3.5-24 24.49-40.91 44.07-39.91l5 .29c8.48.5 15.89 1.59 22.88 1.88c11.69.5 22.2-1.19 34.64-11.56c4.2-3.5 7.57-6.54 13.26-7.51a17.45 17.45 0 0 1 13.6 2.24c10 6.64 11.4 22.73 11.92 34.49c.29 6.72 1.1 23 1.38 27.63c.63 10.67 3.43 12.17 9.11 14c3.19 1.05 6.15 1.83 10.51 3.06c13.21 3.71 21 7.48 26 12.31a16.38 16.38 0 0 1 4.74 9.29c1.56 11.37-8.82 25.4-36.31 38.16c-46.71 21.68-93.68 14.45-100.48 13.68c-20.15-2.71-31.63 23.32-19.55 41.15c22.64 33.41 122.4 20 151.37-21.35c.69-1 .12-1.59-.73-1c-41.77 28.58-97.06 38.21-128.46 26c-4.77-1.85-14.73-6.44-15.94-16.67c43.6 13.49 71 .74 71 .74s2.03-2.79-.56-2.53M171.31 157.5c16.74-19.35 37.36-36.18 55.83-45.63a.73.73 0 0 1 1 1c-1.46 2.66-4.29 8.34-5.19 12.65a.75.75 0 0 0 1.16.79c11.49-7.83 31.48-16.22 49-17.3a.77.77 0 0 1 .52 1.38a41.86 41.86 0 0 0-7.71 7.74a.75.75 0 0 0 .59 1.19c12.31.09 29.66 4.4 41 10.74c.76.43.22 1.91-.64 1.72c-69.55-15.94-123.08 18.53-134.5 26.83a.76.76 0 0 1-1-1.12z"/>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="exper-item-list">        
                                                <h5 class="font-size-16 mb-1">Director, Product Management</h5>
                                                <div class="list-inline list-inline-dots mb-1 fs-14">
                                                    <div class="list-inline-item">MailChimp</div>
                                                    <div class="list-inline-item list-inline-item-second">Full-time</div>
                                                </div>
                                                <div class="list-inline list-inline-dots mb-2 fs-14">
                                                    <div class="list-inline-item">Aug 2013 - Jan 2016</div>
                                                    <div class="list-inline-item list-inline-item-second">3 years</div>
                                                </div>
                                                <p class="mb-0">Director and grew the mailchimp product management team. Managed teams across Menio Park, Denver, New York and Remote offices.</p>
                                            </div>
                                        </li>
                                    </ol>
                                </div>

                                <div class="col-md-6 col-sm-6 col-lg-6">
                                    <ol class="profile-section list-unstyled mb-0 px-4">
                                        <li class="profile-item">
                                            <div class="avatar-sm profile-icon p-1">
                                                <div class="avatar-title rounded-2 bg-light" style="height: 35px; width: 35px;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 128 128"><path d="M97.905 67.885c.174 18.8 16.494 25.057 16.674 25.137c-.138.44-2.607 8.916-8.597 17.669c-5.178 7.568-10.553 15.108-19.018 15.266c-8.318.152-10.993-4.934-20.504-4.934c-9.508 0-12.479 4.776-20.354 5.086c-8.172.31-14.395-8.185-19.616-15.724C15.822 94.961 7.669 66.8 18.616 47.791c5.438-9.44 15.158-15.417 25.707-15.571c8.024-.153 15.598 5.398 20.503 5.398c4.902 0 14.106-6.676 23.782-5.696c4.051.169 15.421 1.636 22.722 12.324c-.587.365-13.566 7.921-13.425 23.639M82.272 21.719c4.338-5.251 7.258-12.563 6.462-19.836c-6.254.251-13.816 4.167-18.301 9.416c-4.02 4.647-7.54 12.087-6.591 19.216c6.971.54 14.091-3.542 18.43-8.796"/></svg>
                                                </div>
                                            </div>
                                            <div class="exper-item-list">
                                                <h5 class="fs-16 text-dark">Sr, Software Engineer</h5>
                                                <div class="list-inline list-inline-dots mb-1 fs-14">
                                                    <div class="list-inline-item">Apple</div>
                                                    <div class="list-inline-item list-inline-item-second">Full-time</div>
                                                </div>
                                                <div class="list-inline list-inline-dots mb-2 fs-14">
                                                    <div class="list-inline-item">June 2010 - July 2013</div>
                                                    <div class="list-inline-item list-inline-item-second">2 years</div>
                                                </div>
                                                <p class="mb-0">Underlook 6 dynamic projects withing just 8 months, showcasing my versatility and proactiveapprocach. Notable accomplishments include Designed.</p>
                                            </div>
                                        </li>

                                        <li class="profile-item">
                                            <div class="avatar-sm profile-icon p-1">
                                                <div class="avatar-title rounded-2 bg-light" style="height: 35px; width: 35px;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 256 275"><path fill="#ff385c" d="M252.154 194.867c-1.231-3.456-2.67-6.8-4.039-9.898c-2.107-4.766-4.314-9.541-6.449-14.157l-.169-.366c-19.04-41.23-39.475-83.026-60.738-124.222l-.903-1.75c-2.169-4.206-4.411-8.556-6.712-12.83a83.351 83.351 0 0 0-9.875-15.198a45.98 45.98 0 0 0-15.808-12.133a46.072 46.072 0 0 0-38.935.005a45.976 45.976 0 0 0-15.804 12.137a83.712 83.712 0 0 0-9.87 15.195c-2.32 4.313-4.584 8.703-6.773 12.949l-.838 1.625c-21.264 41.2-41.699 82.994-60.738 124.221l-.278.6c-2.098 4.54-4.267 9.236-6.339 13.922c-1.37 3.096-2.806 6.437-4.039 9.902a60.699 60.699 0 0 0-3.274 29.588a58.455 58.455 0 0 0 11.835 27.646a58.603 58.603 0 0 0 24.027 18.129a59.593 59.593 0 0 0 22.481 4.349c2.42 0 4.839-.142 7.243-.422a73.906 73.906 0 0 0 27.645-9.327c11.152-6.265 22.165-15.446 34.196-28.566c12.031 13.12 23.044 22.301 34.196 28.566a73.89 73.89 0 0 0 27.645 9.327a62.62 62.62 0 0 0 7.244.422a59.586 59.586 0 0 0 22.48-4.349a58.609 58.609 0 0 0 24.027-18.13a58.453 58.453 0 0 0 11.836-27.645a60.752 60.752 0 0 0-3.274-29.59M128 209.17c-14.893-18.878-24.45-36.409-27.804-51.106a45.195 45.195 0 0 1-.956-16.85a27.533 27.533 0 0 1 4.432-11.52a30.688 30.688 0 0 1 10.772-8.802a30.762 30.762 0 0 1 27.116.002a30.685 30.685 0 0 1 10.77 8.803a27.548 27.548 0 0 1 4.432 11.522a45.21 45.21 0 0 1-.96 16.856C152.444 172.77 142.89 190.296 128 209.17m110.032 12.802a40.874 40.874 0 0 1-8.275 19.33a40.977 40.977 0 0 1-16.8 12.677a42.823 42.823 0 0 1-21.088 2.758a55.703 55.703 0 0 1-21.055-7.191c-9.926-5.577-19.974-14.138-31.28-26.696c17.999-22.195 29.239-42.652 33.4-60.873a62.51 62.51 0 0 0 1.197-23.421a44.91 44.91 0 0 0-7.307-18.776a48.223 48.223 0 0 0-17.075-14.405a48.313 48.313 0 0 0-43.495-.002a48.205 48.205 0 0 0-17.075 14.403a44.91 44.91 0 0 0-7.308 18.771a62.535 62.535 0 0 0 1.19 23.412c4.16 18.229 15.4 38.69 33.406 60.892c-11.307 12.557-21.355 21.118-31.281 26.696a55.7 55.7 0 0 1-21.055 7.19a42.827 42.827 0 0 1-21.089-2.758a40.978 40.978 0 0 1-16.8-12.677a40.872 40.872 0 0 1-8.273-19.33a43.049 43.049 0 0 1 2.437-21.231c.983-2.761 2.132-5.471 3.556-8.69c2.015-4.555 4.153-9.185 6.221-13.661l.278-.602C49.394 136.792 69.716 95.23 90.864 54.255l.842-1.631c2.153-4.178 4.38-8.497 6.626-12.67a67.774 67.774 0 0 1 7.758-12.115a28.411 28.411 0 0 1 9.8-7.594a28.462 28.462 0 0 1 34.015 7.59a67.46 67.46 0 0 1 7.76 12.111c2.225 4.136 4.432 8.416 6.567 12.555l.904 1.756c21.147 40.97 41.469 82.531 60.404 123.535l.17.369c2.104 4.552 4.28 9.257 6.328 13.891c1.426 3.224 2.577 5.936 3.557 8.687a43.081 43.081 0 0 1 2.437 21.233"/></svg>
                                                </div>
                                            </div>
                                            <div class="exper-item-list">
                                                <h5 class="font-size-16 mb-1">Mobile Developer & Algo Expert</h5>
                                                <div class="list-inline list-inline-dots mb-1 fs-14">
                                                    <div class="list-inline-item">Airbnb</div>
                                                    <div class="list-inline-item list-inline-item-second">Full-time</div>
                                                </div>
                                                <div class="list-inline list-inline-dots mb-2 fs-14">
                                                    <div class="list-inline-item">June 2009 - July 2010</div>
                                                    <div class="list-inline-item list-inline-item-second">1 years</div>
                                                </div>
                                                <p class="mb-0">Underlook 6 dynamic projects withing just 8 months, showcasing my versatility and proactiveapprocach. Notable accomplishments include Designed.</p>
                                            </div>
                                        </li>

                                        <li class="profile-item pb-0">
                                            <div class="avatar-sm profile-icon p-1">
                                                <div class="avatar-title rounded-2 bg-light" style="height: 35px; width: 35px;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 256 256"><path fill="#e74d89" d="M128 8.5c66 0 119.4 53.4 119.4 119.3S194 247.2 128 247.2S8.6 193.8 8.6 127.9S62 8.5 128 8.5"/><path fill="#b2215a" d="M128 255.7c-70.6 0-128-57.3-128-127.8C0 57.3 57.4 0 128 0s128 57.3 128 127.8s-57.4 127.9-128 127.9m107.9-110.4c-3.7-1.2-33.8-10.1-68.1-4.7c14.3 39.2 20.1 71.2 21.2 77.8c24.6-16.5 42.1-42.7 46.9-73.1m-65.2 83.2c-1.6-9.6-8-43-23.3-82.8c-.2.1-.5.2-.7.2c-61.7 21.5-83.8 64.2-85.8 68.2c18.5 14.4 41.8 23 67.1 23c15.1.1 29.6-3 42.7-8.6M46.8 201c2.5-4.2 32.5-53.8 88.9-72.1c1.4-.5 2.9-.9 4.3-1.3c-2.7-6.2-5.7-12.4-8.9-18.5c-54.6 16.3-107.6 15.6-112.4 15.5c0 1.1-.1 2.2-.1 3.3c.1 28.1 10.7 53.7 28.2 73.1M21 105.6c4.9.1 49.9.3 101.1-13.3C104 60.1 84.4 33.1 81.6 29.2C50.9 43.6 28.1 71.8 21 105.6m81.4-83.8c3 4 22.9 31 40.8 63.9c38.9-14.6 55.3-36.6 57.3-39.4c-19.3-17.1-44.7-27.5-72.5-27.5c-8.8 0-17.4 1.1-25.6 3m110.2 37.1c-2.3 3.1-20.6 26.6-61 43.1c2.5 5.2 5 10.5 7.3 15.8c.8 1.9 1.6 3.8 2.4 5.6c36.4-4.6 72.5 2.8 76.1 3.5c-.3-25.7-9.5-49.4-24.8-68"/></svg>
                                                </div>
                                            </div>
                                            <div class="exper-item-list">
                                                <h5 class="font-size-16 mb-1">UI /UX Designer</h5>
                                                <div class="list-inline list-inline-dots mb-1 fs-14">
                                                    <div class="list-inline-item">Dribbble</div>
                                                    <div class="list-inline-item list-inline-item-second">Full-time</div>
                                                </div>
                                                <div class="list-inline list-inline-dots mb-2 fs-14">
                                                    <div class="list-inline-item">June 2008 - July 2009</div>
                                                    <div class="list-inline-item list-inline-item-second">1 years</div>
                                                </div>
                                                <p class="mb-0">Underlook 6 dynamic projects withing just 1 months, showcasing my versatility and proactiveapprocach. Notable accomplishments include:- Designed.</p>
                                            </div>
                                        </li>
                                    </ol>
                                </div>
                            </div>

                        </div>
                    </div> <!-- end Experience -->

                    <div class="tab-pane pt-4" id="profile_education" role="tabpanel">
                        <div class="row">

                            <div class="col-md-12 col-sm-12 col-lg-6">
                                <h5 class="fs-16 text-dark fw-semibold mb-3 text-capitalize">My Education</h5>
                            </div>

                            <div class="row">
                                <div class="col-4">
                                    <ol class="profile-section list-unstyled mb-0 px-4">
                                        <li class="profile-item">
                                            <div class="avatar-sm profile-icon p-1">
                                                <div class="avatar-title rounded-2 bg-light" style="height: 40px; width: 40px;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 512 512"><mask id="circleFlagsHausa0"><circle cx="256" cy="256" r="256" fill="#fff"/></mask><g mask="url(#circleFlagsHausa0)"><path fill="#eee" d="M0 0h512v512H0z"/><path fill="#6da544" d="m218 154l38-84l38 84l-140 140l-84-38l84-38l140 140l-38 84l-38-84l140-140l84 38l-84 38z"/><path fill="#333" d="M244.5 29.5c0 40.5-11.2 78.5-30.7 110.8l-49-49a45.1 45.1 0 0 0-63.7 0l-9.9 9.8a45.1 45.1 0 0 0 0 63.7l49.1 49a214.2 214.2 0 0 1-110.8 30.7v23c40.5 0 78.5 11.2 110.8 30.7l-49 49a45.1 45.1 0 0 0 0 63.7l9.8 9.9a45.1 45.1 0 0 0 63.7 0l49-49.1a214.2 214.2 0 0 1 30.7 110.8h23c0-40.5 11.2-78.5 30.7-110.8l49 49a45.1 45.1 0 0 0 63.7 0l9.9-9.8a45.1 45.1 0 0 0 0-63.7l-49.1-49a214.2 214.2 0 0 1 110.8-30.7v-23c-40.5 0-78.5-11.2-110.8-30.7l49-49a45.1 45.1 0 0 0 0-63.7l-9.8-9.9a45.1 45.1 0 0 0-63.7 0l-49 49.1a214.2 214.2 0 0 1-30.7-110.8zM256 92.2a233.8 233.8 0 0 0 27.7 62.6L256 182.5l-27.7-27.7A233.8 233.8 0 0 0 256 92.2M133 98a25 25 0 0 1 17.6 7.4l52 51.8a215.9 215.9 0 0 1-45.4 45.3l-51.8-51.9a24.7 24.7 0 0 1 0-35.3l9.9-10A25 25 0 0 1 133 98m246 0c6.4 0 12.8 2.4 17.7 7.4l10 9.9a24.7 24.7 0 0 1 0 35.3l-52 52a215.9 215.9 0 0 1-45.2-45.3l51.9-52A25 25 0 0 1 379 98m-162.3 73.5l25.2 25.1l-45.3 45.3l-25.2-25.2a236.7 236.7 0 0 0 45.3-45.3zm78.6 0a236.7 236.7 0 0 0 45.2 45.2l-25.1 25.2l-45.3-45.3zM256 210.6l45.3 45.3l-45.3 45.3l-45.3-45.3zm-101.2 17.6l27.7 27.7l-27.7 27.7A233.8 233.8 0 0 0 92.2 256a233.8 233.8 0 0 0 62.6-27.7zm202.4 0a233.8 233.8 0 0 0 62.6 27.7a233.8 233.8 0 0 0-62.6 27.7L329.5 256l27.7-27.7zM196.6 270l45.3 45.3l-25.2 25.1a236.7 236.7 0 0 0-45.3-45.2zm118.8 0l25.1 25.2a236.7 236.7 0 0 0-45.2 45.3l-25.2-25.2zm-158.1 39.4a215.9 215.9 0 0 1 45.2 45.3l-51.9 51.8a24.7 24.7 0 0 1-35.3 0l-10-9.9a24.7 24.7 0 0 1 0-35.3zm197.4 0l52 51.9a24.7 24.7 0 0 1 0 35.3l-10 10a24.7 24.7 0 0 1-35.3 0l-52-52a215.9 215.9 0 0 1 45.4-45.2zm-98.7 20l27.7 27.7a233.8 233.8 0 0 0-27.7 62.6a233.8 233.8 0 0 0-27.7-62.6z"/></g></svg>
                                                </div>
                                            </div>
                                            <div class="exper-item-list">
                                                <h5 class="fs-18 text-dark">Middles Earth Technic University</h5>
                                                <p class="mb-2 fw-semibold text-dark">Master Degree In Computer Science and Mathematies</p>
                                                <div class="list-inline list-inline-dots mb-2 fs-14">
                                                    <div class="list-inline-item">January 2018</div>
                                                    <div class="list-inline-item list-inline-item-second">Istanbul, Turkey</div>
                                                </div>
                                            </div>
                                        </li>
                                    </ol>
                                </div>

                                <div class="col-4">
                                    <ol class="profile-section list-unstyled mb-0 px-4">
                                        <li class="profile-item">
                                            <div class="avatar-sm profile-icon p-1">
                                                <div class="avatar-title rounded-2 bg-light" style="height: 40px; width: 40px;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 512 512"><mask id="circleFlagsCheckered0"><circle cx="256" cy="256" r="256" fill="#fff"/></mask><g mask="url(#circleFlagsCheckered0)"><path fill="#eee" d="M0 0h512v512H0z"/><path fill="#333" d="M384 0h128v128H0v128h512v128H0v128h128V0h128v512h128z"/></g></svg>
                                                </div>
                                            </div>
                                            <div class="exper-item-list">
                                                <h5 class="fs-16 text-dark">Bogazicied Technic University</h5>
                                                <p class="mb-2 fw-semibold text-dark">Bachelor Degree In Computer Science and Mathematies</p>
                                                <div class="list-inline list-inline-dots mb-2 fs-14">
                                                    <div class="list-inline-item">June 2016</div>
                                                    <div class="list-inline-item list-inline-item-second">Istanbul, Turkey</div>
                                                </div>
                                            </div>
                                        </li>
                                    </ol>
                                </div>

                                <div class="col-4">
                                    <ol class="profile-section list-unstyled mb-0 px-4">
                                        <li class="profile-item">
                                            <div class="avatar-sm profile-icon p-1">
                                                <div class="avatar-title rounded-2 bg-light" style="height: 40px; width: 40px;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 512 512"><mask id="circleFlagsUnitedNations0"><circle cx="256" cy="256" r="256" fill="#fff"/></mask><g mask="url(#circleFlagsUnitedNations0)"><path fill="#338af3" d="M0 0h512v512H0z"/><circle cx="256" cy="256" r="145" fill="#eee"/><circle cx="256" cy="256" r="111" fill="#338af3"/><path fill="#338af3" d="M76 76h360L256 256z"/><circle cx="256" cy="256" r="89" fill="#eee"/><circle cx="256" cy="256" r="69" fill="#338af3"/><path fill="#eee" d="M246 178h20v156h-20z"/><path fill="#eee" d="M334 246v20H178v-20z"/><path fill="#eee" d="m304 193.7l14.2 14.2l-110.3 110.3l-14.2-14.1z"/><path fill="#eee" d="m318.2 304l-14.1 14.2l-110.4-110.3l14.2-14.2z"/><circle cx="256" cy="256" r="44" fill="#eee"/><circle cx="256" cy="256" r="22" fill="#338af3"/><ellipse cx="256" cy="412" fill="#eee" rx="44" ry="40"/><path fill="#338af3" d="m256 407l-78 63h156z"/></g></svg>
                                                </div>
                                            </div>
                                            <div class="exper-item-list">
                                                <h5 class="fs-16 text-dark">Ascham School</h5>
                                                <p class="mb-2 fw-semibold text-dark">School Regular</p>
                                                <div class="list-inline list-inline-dots mb-2 fs-14">
                                                    <div class="list-inline-item">February 2015</div>
                                                    <div class="list-inline-item list-inline-item-second">Istanbul, Turkey</div>
                                                </div>
                                            </div>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end education -->

                    <div class="tab-pane pt-4" id="profile_setting" role="tabpanel">
                        <div class="row">

                            <div class="row">
                                <div class="col-lg-6 col-xl-6">
                                    <div class="card border mb-0">

                                        <div class="card-header">
                                            <div class="row align-items-center">
                                                <div class="col">                      
                                                    <h4 class="card-title mb-0">Personal Information</h4>                      
                                                </div><!--end col-->                                                       
                                            </div>
                                        </div>

                                        <div class="card-body">
                                            <div class="form-group mb-3 row">
                                                <label class="form-label">First Name</label>
                                                <div class="col-lg-12 col-xl-12">
                                                    <input class="form-control" type="text" value="Charles">
                                                </div>
                                            </div>

                                            <div class="form-group mb-3 row">
                                                <label class="form-label">Last Name</label>
                                                <div class="col-lg-12 col-xl-12">
                                                    <input class="form-control" type="text" value="Buncle">
                                                </div>
                                            </div>

                                            <div class="form-group mb-3 row">
                                                <label class="form-label">Contact Phone</label>
                                                <div class="col-lg-12 col-xl-12">
                                                    <div class="input-group">
                                                        <span class="input-group-text"><i class="mdi mdi-phone-outline"></i></span>
                                                        <input class="form-control" type="text" placeholder="Phone" aria-describedby="basic-addon1" value="+61 399615">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group mb-3 row">
                                                <label class="form-label">Email Address</label>
                                                <div class="col-lg-12 col-xl-12">
                                                    <div class="input-group">
                                                        <span class="input-group-text"><i class="mdi mdi-email"></i></span>
                                                        <input type="text" class="form-control" value="CharlesBuncle@dayrep.com" placeholder="Email" aria-describedby="basic-addon1">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group mb-3 row">
                                                <label class="form-label">Company</label>
                                                <div class="col-lg-12 col-xl-12">
                                                    <input class="form-control" type="text" value="zoyothemes">
                                                </div>
                                            </div>

                                            <div class="form-group mb-3 row">
                                                <label class="form-label">City</label>
                                                <div class="col-lg-12 col-xl-12">
                                                    <input class="form-control" type="text" value="Adelaide">
                                                </div>
                                            </div>

                                            <div class="form-group mb-3 row">
                                                <label class="form-label">Address</label>
                                                <div class="col-lg-12 col-xl-12">
                                                    <input class="form-control" type="text" value="Australia">
                                                </div>
                                            </div>

                                        </div><!--end card-body-->
                                    </div>
                                </div>

                                <div class="col-lg-6 col-xl-6">
                                    <div class="card border mb-0">

                                        <div class="card-header">
                                            <div class="row align-items-center">
                                                <div class="col">                      
                                                    <h4 class="card-title mb-0">Change Password</h4>                      
                                                </div><!--end col-->                                                       
                                            </div>
                                        </div>

                                        <div class="card-body mb-0">
                                            <div class="form-group mb-3 row">
                                                <label class="form-label">Old Password</label>
                                                <div class="col-lg-12 col-xl-12">
                                                    <input class="form-control" type="password" placeholder="Old Password">
                                                </div>
                                            </div>
                                            <div class="form-group mb-3 row">
                                                <label class="form-label">New Password</label>
                                                <div class="col-lg-12 col-xl-12">
                                                    <input class="form-control" type="password" placeholder="New Password">
                                                </div>
                                            </div>
                                            <div class="form-group mb-3 row">
                                                <label class="form-label">Confirm Password</label>
                                                <div class="col-lg-12 col-xl-12">
                                                    <input class="form-control" type="password" placeholder="Confirm Password">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-lg-12 col-xl-12">
                                                    <button type="submit" class="btn btn-primary">Change Password</button>
                                                    <button type="button" class="btn btn-danger">Cancel</button>
                                                </div>
                                            </div>

                                        </div><!--end card-body-->
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div> <!-- end education -->

                </div> <!-- Tab panes -->
            </div>
        </div>
    </div>
</div>
@endsection
