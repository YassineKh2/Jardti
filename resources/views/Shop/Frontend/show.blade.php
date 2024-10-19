@extends('layouts.navbar', ['title' => 'Shop'])





@section('content')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" type="text/css" href="{{ asset('Shop/css/normalize.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Shop/icomoon/icomoon.css')}}">
    <link rel="stylesheet" type="text/css" media="all"
          href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('Shop/css/vendor.css')}}'">
    <link rel="stylesheet" type="text/css" href="{{ asset('Shop/style.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
          rel="stylesheet">
    <!-- script
    ================================================== -->
    <script src="{{ asset('Shop/js/modernizr.js')}}"></script>
    <body>


    <!--
    <div class="preloader-wrapper">
        <div class="preloader">
        </div>
    </div>
    -->
    <nav class="secondary-nav border-bottom">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-4 header-contact">
                    <p>Balance: <strong>5335ₚₜₛ</strong>
                    </p>
                </div>
                <div class="col-md-4 shipping-purchase text-center">
                    <p>Welcome to the gamification shop </p>
                </div>
                <div class="col-md-4 col-sm-12 user-items">
                    <ul class="d-flex justify-content-end list-unstyled">
                        <li>
                            <a href="login.html">
                                <i class="icon icon-user"></i>
                            </a>
                        </li>
                        <li>
                            <a href="cart.html">
                                <i class="icon icon-shopping-cart"></i>
                            </a>
                        </li>
                        <li>
                            <a href="wishlist.html">
                                <i class="icon icon-heart"></i>
                            </a>
                        </li>
                        <li class="user-items search-item pe-3">
                            <a href="#" class="search-button">
                                <i class="icon icon-search"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>


    <section class="site-banner jarallax min-height300 padding-large"
             style="background: url(../../../../public/Shop/images/hero-image.jpg) no-repeat; background-position: top;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-title">Shop page</h1>
                    <div class="breadcrumbs">
              <span class="item">
                <a href="/">Home /</a>
              </span>
                        <span class="item">Shop</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="shopify-grid padding-large">
        <div class="container">
            <div class="row">

                <div class="main-content d-flex flex-wrap padding-large">
                    <div class="container">
                        <div class="d-flex flex-column flex-md-row gap-3 align-items-center">
                            <div class="col-md-5">
                                <div class="post-meta">
                                    <span class="post-date">Feb 22, 2023</span> / <a href="blog.html" class="blog-categories">{{$item->category_name}}</a>
                                </div>
                                <h1 class="page-title">{{$item->name}}</h1>
                                <div class="feature-image">
                                    <img src="{{$item->image}}" alt="post image" class="jarallax-img">

                                </div>
                            </div>

                            <div class="">
                                <div class="post-content">
                                    <p  style="font-size:50px; margin-top: 50px"><strong>{{$item->price}}</strong>ₚₜₛ</p>
                                    <p>{{$item->description}}</p>
                                    <button class="rounded-3">Purchase</button>
                                    <div class="post-tags">
                                        <div class="block-tag">
                                            #Tags
                                            <ul class="list-unstyled d-flex">
                                                <li>
                                                    <a href="#" class="btn btn-outline-dark btn-small btn-rounded">Fashion</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="btn btn-outline-dark btn-small btn-rounded">Hoodie</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="btn btn-outline-dark btn-small btn-rounded">Casual</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="social-links d-flex margin-small">
                                        <div class="element-title">Share:</div>
                                        <ul class="d-flex list-unstyled">
                                            <li>
                                                <a href="#"><i class="icon icon-facebook"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon icon-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon icon-instagram"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon icon-youtube-play"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div id="single-post-navigation">
                            <hr>
                            <div class="row post-navigation d-flex flex-wrap align-items-center justify-content-between">
                                <a itemprop="url" class="col-md-6 post-prev d-flex" href="#" title="Previous Post">
                                    <span>Previous</span>
                                    <h3 class="page-nav-title">Shovel</h3>
                                </a>
                                <a itemprop="url" class="col-md-6 post-next d-flex" href="#" title="Next Post">
                                    <span>Next</span>
                                    <h3 class="page-nav-title">Sticker</h3>
                                </a>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>


    <script src="{{ asset('Shop/js/jquery-1.11.0.min.js')}}"></script>
    <script src="{{ asset('Shop/js/plugins.js')}}"></script>
    <script src="{{ asset('/Shop/js/script.js')}}"></script>
    </body>
@endsection
