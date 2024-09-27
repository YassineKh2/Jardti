@extends('layouts.vertical', ['title' => 'Pricing'])

@section('content')

<div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-semibold m-0">Pricing</h4>
    </div>

    <div class="text-end">
        <ol class="breadcrumb m-0 py-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
            <li class="breadcrumb-item active">Pricing</li>
        </ol>
    </div>
</div>


<div class="row justify-content-center">
    <div class="col-lg-12">

        <!-- Pricing Title-->
        <div class="text-center">
            <h3 class="mb-2">Pricing Plans</h3>
            <p class="text-muted mb-5">
                We have plans and prices that fit your business perfectly. Make your <br> client site a success with our products.
            </p>
        </div>

        <!-- Plans -->
        <div class="row justify-content-center my-3">
            <div class="pricing-box col-xl-4 col-md-6">
                <div class="card card-h-full">
                    <div class="inner-box card-body p-4">

                        <div class="bg-warning bg-opacity-10 text-warning rounded-3 px-2 py-1 d-inline-flex justify-content-center align-content-center">
                            <i class="mdi mdi-rocket fs-19"></i>
                        </div>

                        <div class="plan-header mt-3">
                            <h5 class="plan-title text-warning">Basic personal</h5>
                            <p class="plan-subtitle">Our basic plans are a salf-service solution for small-sized terms to manage the ongoing project development workflow.</p>
                        </div>

                        <ul class="flex-grow-1 plan-stats list-unstyled">
                            <li><i data-feather="check" class="check-icon text-primary me-2"></i>5 products</li>
                            <li><i data-feather="check" class="check-icon text-primary me-2"></i>Up to 1,000 subscribers</li>
                            <li><i data-feather="check" class="check-icon text-primary me-2"></i>Basic analytics</li>
                            <li><i data-feather="check" class="check-icon text-primary me-2"></i>48-hour support response time</li>
                        </ul>

                        <div class="flex-shrink-0 pb-4 mb-1">
                            <h2 class="month mb-0">
                                <sup class="fw-semibold"><small>$</small></sup> 
                                <span class="fw-semibold fs-28">24</span>/ 
                                <span class="fs-14 text-muted">month</span>
                            </h2>
                        </div>

                        <div class="flex-shrink-0 text-center">
                            <a href="#" class="btn btn-outline-primary w-100 rounded-2 fw-medium">Buy Plan</a>
                        </div>

                    </div>
                </div> <!-- end Pricing_card -->
            </div> <!-- end col -->

            <div class="pricing-box col-xl-4 col-md-6">
                <div class="card card-h-full">
                    <div class="inner-box card-body p-4">

                        <div class="bg-primary bg-opacity-10 text-primary rounded-3 px-2 py-1 d-inline-flex justify-content-center align-content-center">
                            <i class="mdi mdi-account-supervisor fs-19"></i>
                        </div>

                        <div class="plan-header mt-3">
                            <h5 class="plan-title text-primary">Startup</h5>
                            <p class="plan-subtitle">Offer a comprehensive, scalable solution, and tailored for larger terms, enabling seamless workflows and development workflow.</p>
                        </div>

                        <ul class="flex-grow-1 plan-stats list-unstyled">
                            <li><i data-feather="check" class="check-icon text-primary me-2"></i>25 products</li>
                            <li><i data-feather="check" class="check-icon text-primary me-2"></i>Up to 10,000 subscribers</li>
                            <li><i data-feather="check" class="check-icon text-primary me-2"></i>Advanced analytics</li>
                            <li><i data-feather="check" class="check-icon text-primary me-2"></i>24-hour support response </li>
                            <!-- <li><i data-feather="check" class="check-icon text-primary me-2"></i>Marketing automations</li> -->
                        </ul>

                        <div class="flex-shrink-0 pb-4 mb-1">
                            <h2 class="month mb-0">
                                <sup class="fw-semibold"><small>$</small></sup> 
                                <span class="fw-semibold fs-28">32</span>/ 
                                <span class="fs-14 text-muted">month</span>
                            </h2>
                        </div>

                        <div class="flex-shrink-0 text-center">
                            <a href="#" class="btn btn-primary w-100 rounded-2">Buy Plan</a>
                        </div>
                    </div>
                </div> <!-- end Pricing_card -->
            </div> <!-- end col -->

            <div class="pricing-box col-xl-4 col-md-6">
                <div class="card card-h-full">
                    <div class="inner-box card-body p-4">

                        <div class="bg-info bg-opacity-10 text-info rounded-3 px-2 py-1 d-inline-flex justify-content-center align-content-center">
                            <i class="mdi mdi-office-building fs-19"></i>
                        </div>

                        <div class="plan-header mt-3">
                            <h5 class="plan-title text-info">Enterprise</h5>
                            <p class="plan-subtitle">Personalized subscribers solution for teams of any size, providing flexibility to adapt to specific project seamless workflows and development workflow.</p>
                        </div>

                        <ul class="flex-grow-1 plan-stats list-unstyled">
                            <li><i data-feather="check" class="check-icon text-primary me-2"></i>Unlimited products</li>
                            <li><i data-feather="check" class="check-icon text-primary me-2"></i>Unlimited subscribers</li>
                            <li><i data-feather="check" class="check-icon text-primary me-2"></i>Advanced analytics</li>
                            <li><i data-feather="check" class="check-icon text-primary me-2"></i>Unlimited User</li>
                        </ul>

                        <div class="flex-shrink-0 pb-4 mb-1">
                            <h2 class="month mb-0">
                                <sup class="fw-semibold"><small>$</small></sup> 
                                <span class="fw-semibold fs-28">48</span>/ 
                                <span class="fs-14 text-muted">month</span>
                            </h2>
                        </div>

                        <div class="flex-shrink-0 text-center">
                            <a href="#" class="btn btn-outline-primary w-100 rounded-2 fw-medium">Buy Plan</a>
                        </div>

                    </div>
                </div> <!-- end Pricing_card -->
            </div> <!-- end col -->
        </div>
        <!-- end row -->

    </div>
</div>
@endsection