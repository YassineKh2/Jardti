@extends('layouts.vertical', ['title' => 'Timeline'])

@section('content')

<div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-semibold m-0">Timeline</h4>
    </div>

    <div class="text-end">
        <ol class="breadcrumb m-0 py-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
            <li class="breadcrumb-item active">Timeline</li>
        </ol>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-xxl-10">
        <div class="timeline-page position-relative">

            <div class="timeline-section mt-4">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">                                            
                        <div class="duration label-left fs-16 fw-medium position-relative p-2 px-4 fst-italic rounded-2">17 May 1939</div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="card description-right border-0 overflow-hidden float-start">
                            <div class="card-body">
                                <h6 class="title mb-1 text-capitalize">The Birth of Silicon Valley</h6>
                                <p class="timeline-subtitle mt-3 mb-0 text-muted">
                                    William Hewlett and David Packard found Hewlett-Packard (HP) 
                                    in a Palo Alto garage, laying the foundation for what would 
                                    become Silicon Valley's storied tech ecosystem
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="timeline-section mt-4">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="card description-left border-0 overflow-hidden float-start">
                            <div class="card-body">
                                <h6 class="title mb-1 text-capitalize">The Advent of Personal Computing</h6>
                                <p class="timeline-subtitle mt-3 mb-0 text-muted">
                                    Bill Gates and Paul Allen establish Microsoft, heralding 
                                    the dawn of the personal computing revolution with the 
                                    introduction of the Microsoft Altair BASIC interpreter.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6">                                            
                        <div class="duration label-right fs-16 fw-medium position-relative p-2 px-4 fst-italic rounded-2">1 January 1975</div>
                    </div>
                </div>
            </div>

            <div class="timeline-section mt-4">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">                                            
                        <div class="duration label-left fs-16 fw-medium position-relative p-2 px-4 fst-italic rounded-2">22 September 1994</div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="card description-right border-0 overflow-hidden float-start">
                            <div class="card-body">
                                <h6 class="title mb-1 text-capitalize">Internet Age Dawns</h6>
                                <p class="timeline-subtitle mt-3 mb-0 text-muted">
                                    Amazon.com is founded by Jeff Bezos, pioneering online retail 
                                    and forever altering the way we shop, ushering in an era of 
                                    e-commerce dominance
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="timeline-section mt-4">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="card description-left border-0 overflow-hidden float-start">
                            <div class="card-body">
                                <h6 class="title mb-1 text-capitalize">Social Media Revolution</h6>
                                <p class="timeline-subtitle mt-3 mb-0 text-muted">
                                    Mark Zuckerberg founds Facebook in his Harvard University dorm room, 
                                    igniting a social media revolution that reshapes how we connect, 
                                    communicate, and share information.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6">                                            
                        <div class="duration label-right fs-16 fw-medium position-relative p-2 px-4 fst-italic rounded-2">28 December 2004</div>
                    </div>
                </div>
            </div>

            <div class="timeline-section mt-4">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">                                            
                        <div class="duration label-left fs-16 fw-medium position-relative p-2 px-4 fst-italic rounded-2">14 February 2006</div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="card description-right border-0 overflow-hidden float-start">
                            <div class="card-body">
                                <h6 class="title mb-1 text-capitalize">Cloud Computing Emerges</h6>
                                <p class="timeline-subtitle mt-3 mb-0 text-muted">
                                    Amazon Web Services (AWS) launches, pioneering cloud computing 
                                    services that enable businesses to scale and innovate without 
                                    the need for costly infrastructure investments.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="timeline-section mt-4">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="card description-left border-0 overflow-hidden float-start">
                            <div class="card-body">
                                <h6 class="title mb-1 text-capitalize">Artificial Intelligence Renaissance</h6>
                                <p class="timeline-subtitle mt-3 mb-0 text-muted">
                                    Elon Musk, Peter Thiel, and others establish OpenAI, a 
                                    research organization dedicated to advancing artificial 
                                    intelligence in a safe and beneficial manner.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6">                                            
                        <div class="duration label-right fs-16 fw-medium position-relative p-2 px-4 fst-italic rounded-2">15 Jule 2010</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection