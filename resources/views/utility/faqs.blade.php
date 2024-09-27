@extends('layouts.vertical', ['title' => 'FAQ'])

@section('content')

<div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-semibold m-0">FAQ</h4>
    </div>

    <div class="text-end">
        <ol class="breadcrumb m-0 py-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
            <li class="breadcrumb-item active">FAQ</li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-xxl-12">
        <div class="card">
            <div class="card-body">

                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="mb-3">Frequently Asked Questions</h3>
                    </div> <!-- end col -->
                </div> <!-- end row --> 

                <div class="row mt-4">

                    <div class="col-xl-6">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item accordion-item-faq shadow-sm">
                                <div class="accordion-header" id="headingOne">
                                    <button class="accordion-button fw-medium" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        What is your web app for online workspaces?
                                    </button>
                                </div>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body pb-0">
                                        <p class="mb-0 text-muted">The features may vary depending on the specific platform, but commonly included features are user authentication and authorization.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item accordion-item-faq shadow-sm">
                                <div class="accordion-header" id="headingTwo">
                                    <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        How can I sign up for the admin panel SaaS? 
                                    </button>
                                </div>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body pb-0">
                                        <p class="mb-0 text-muted">To sign up, visit our website and follow the registration process. You'll need to provide some basic information and choose a subscription plan.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item accordion-item-faq shadow-sm">
                                <div class="accordion-header" id="headingThree">
                                    <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        What is the Installation?
                                    </button>
                                </div>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body pb-0">
                                        <p class="mb-0 text-muted">The Installation SaaS is a platform designed to streamline the installation process for various software applications or systems.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item accordion-item-faq shadow-sm">
                                <div class="accordion-header" id="headingFour">
                                    <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Is the admin panel customizable?
                                    </button>
                                </div>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body pb-0">
                                        <p class="mb-0 text-muted">Yes, the admin panel SaaS often offers customization options to tailor the interface to your specific requirements. This may include branding customization.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item accordion-item-faq shadow-sm">
                                <div class="accordion-header" id="headingFive">
                                    <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        Is there a mobile app for the admin panel?
                                    </button>
                                </div>
                                <div id="collapseFive" class="accordion-collapse collapse show" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                    <div class="accordion-body pb-0">
                                        <p class="mb-0 text-muted">Some admin panel SaaS platforms offer mobile apps or have responsive web designs, allowing you to access the admin panel from mobile devices.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item accordion-item-faq shadow-sm">
                                <div class="accordion-header" id="headingSix">
                                    <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        Can I integrate the admin panel SaaS with other tools or services?
                                    </button>
                                </div>
                                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                    <div class="accordion-body pb-0">
                                        <p class="mb-0 text-muted">Yes, the admin panel SaaS often supports integrations with various third-party tools and services through APIs or pre-built connectors.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="accordion" id="accordionExample-1">
                            <div class="accordion-item accordion-item-faq shadow-sm">
                                <div class="accordion-header" id="headingSeven">
                                    <button class="accordion-button fw-medium" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                                        How does it work?
                                    </button>
                                </div>
                                <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample-1">
                                    <div class="accordion-body pb-0">
                                        <p class="mb-0 text-muted">The Buying Product SaaS is a platform that facilitates the purchase process for both buyers and sellers. It provides a centralized marketplace.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item accordion-item-faq shadow-sm">
                                <div class="accordion-header" id="headingEight">
                                    <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                        Is there a free trail available?
                                    </button>
                                </div>
                                <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample-1">
                                    <div class="accordion-body pb-0">
                                        <p class="mb-0 text-muted">The admin panel SaaS is a platform that provides administrators with a centralized interface to manage various aspects of their software.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item accordion-item-faq shadow-sm">
                                <div class="accordion-header" id="headingNine">
                                    <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                        Is my data secure on your platform?
                                    </button>
                                </div>
                                <div id="collapseNine" class="accordion-collapse collapse show" aria-labelledby="headingNine" data-bs-parent="#accordionExample-1">
                                    <div class="accordion-body pb-0">
                                        <p class="mb-0 text-muted">The features may vary depending on the specific platform, but commonly included features are user authentication and authorization.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item accordion-item-faq shadow-sm">
                                <div class="accordion-header" id="headingTen">
                                    <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                        Can I access the app from mobile devices?
                                    </button>
                                </div>
                                <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample-1">
                                    <div class="accordion-body pb-0">
                                        <p class="mb-0 text-muted">Most companies don't offer a money-back guarantee, but AdminMart provides a 100% money-back guarantee if you are unhappy with our product.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item accordion-item-faq shadow-sm">
                                <div class="accordion-header" id="headingEleven">
                                    <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                        Is there a free trail available?
                                    </button>
                                </div>
                                <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven" data-bs-parent="#accordionExample-1">
                                    <div class="accordion-body pb-0">
                                        <p class="mb-0 text-muted">The admin panel SaaS is a platform that provides administrators with a centralized interface to manage various aspects of their software.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item accordion-item-faq shadow-sm">
                                <div class="accordion-header" id="headingTwelve">
                                    <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                                        Is there a limit to the number of users or projects?
                                    </button>
                                </div>
                                <div id="collapseTwelve" class="accordion-collapse collapse show" aria-labelledby="headingTwelve" data-bs-parent="#accordionExample-1">
                                    <div class="accordion-body pb-0">
                                        <p class="mb-0 text-muted">Most companies don't offer a money-back guarantee, but AdminMart provides a 100% money-back guarantee if you are unhappy with our product.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection