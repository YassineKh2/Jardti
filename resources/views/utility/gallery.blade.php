@extends('layouts.vertical', ['title' => 'Gallery'])

@section('css')
    @vite(['node_modules/glightbox/dist/css/glightbox.min.css'])
@endsection

@section('content')

<div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-semibold m-0">Gallery</h4>
    </div>

    <div class="text-end">
        <ol class="breadcrumb m-0 py-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
            <li class="breadcrumb-item active">Gallery</li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="card gallery-container gallery-grid position-relative d-block overflow-hidden rounded">
                    <div class="card-body gallery-image p-0">
                        <a href="/images/gallery/1.jpg" class="image-popup d-inline-block" title="">
                            <img src="/images/gallery/1.jpg" class="img-fluid" alt="gallery-image">
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4">
                <div class="card gallery-container gallery-grid position-relative d-block overflow-hidden rounded">
                    <div class="card-body gallery-image p-0">
                        <a href="/images/gallery/2.jpg" class="image-popup d-inline-block" title="">
                            <img src="/images/gallery/2.jpg" class="img-fluid" alt="gallery-image">
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4">

                <div class="card gallery-container gallery-grid position-relative d-block overflow-hidden rounded">
                    <div class="card-body gallery-image p-0">
                        <a href="/images/gallery/3.jpg" class="image-popup d-inline-block" title="">
                            <img src="/images/gallery/3.jpg" class="img-fluid" alt="gallery-image">
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4">
                <div class="card gallery-container gallery-grid position-relative d-block overflow-hidden rounded">
                    <div class="card-body gallery-image p-0">
                        <a href="/images/gallery/4.jpg" class="image-popup d-inline-block" title="">
                            <img src="/images/gallery/4.jpg" class="img-fluid" alt="gallery-image">
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4">
                <div class="card gallery-container gallery-grid position-relative d-block overflow-hidden rounded">
                    <div class="card-body gallery-image p-0">
                        <a href="/images/gallery/5.jpg" class="image-popup d-inline-block" title="">
                            <img src="/images/gallery/5.jpg" class="img-fluid" alt="gallery-image">
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4">
                <div class="card gallery-container gallery-grid position-relative d-block overflow-hidden rounded">
                    <div class="card-body gallery-image p-0">
                        <a href="/images/gallery/6.jpg" class="image-popup d-inline-block" title="">
                            <img src="/images/gallery/6.jpg" class="img-fluid" alt="gallery-image">
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4">
                <div class="card gallery-container gallery-grid position-relative d-block overflow-hidden rounded mb-0">
                    <div class="card-body gallery-image p-0">
                        <a href="/images/gallery/7.jpg" class="image-popup d-inline-block" title="">
                            <img src="/images/gallery/7.jpg" class="img-fluid" alt="gallery-image">
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4">
                <div class="card gallery-container gallery-grid position-relative d-block overflow-hidden rounded mb-0">
                    <div class="card-body gallery-image p-0">
                        <a href="/images/gallery/8.jpg" class="image-popup d-inline-block" title="">
                            <img src="/images/gallery/8.jpg" class="img-fluid" alt="gallery-image">
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4">
                <div class="card gallery-container gallery-grid position-relative d-block overflow-hidden rounded mb-0">
                    <div class="card-body gallery-image p-0">
                        <a href="/images/gallery/9.jpg" class="image-popup d-inline-block" title="">
                            <img src="/images/gallery/9.jpg" class="img-fluid" alt="gallery-image">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
    @vite(['resources/js/pages/glightbox.init.js'])
@endsection