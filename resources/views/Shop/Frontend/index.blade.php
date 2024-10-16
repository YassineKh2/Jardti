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

                <section id="selling-products" class="col-md-9 product-store">
                    <div class="container">
                        <ul class="tabs list-unstyled">
                            <a href="{{route('mypoints.filter', 0)}}" data-tab-target="#all"  class=" @if($Active == 0) active @endif tab" >All</a>
                            @for ($i = 0; $i < count($Categories); $i++)
                                <a href="{{route('mypoints.filter', $Categories[$i]['id'])}}" data-tab-target="#shoes"  class=" @if($Active == $Categories[$i]['id']) active @endif  tab" >{{$Categories[$i]['name']}}</a>
                            @endfor

                        </ul>

                        <div class="tab-content">
                            <div id="all" data-tab-content class="active">
                                <div class="row d-flex flex-wrap">
                                    @for ($i = 0; $i < count($Items); $i++)
                                    <div class="product-item col-lg-4 col-md-6 col-sm-6">
                                        <div class="image-holder">
                                            <img src="{{$Items[$i]['image']}}" alt="image of {{$Items[$i]['name']}}"
                                                 class="product-image">
                                        </div>
                                        <div class="cart-concern">
                                            <div class="cart-button d-flex justify-content-between align-items-center">
                                                <button type="button"
                                                        class="btn-wrap cart-link d-flex align-items-center">add to cart
                                                    <i class="icon icon-arrow-io"></i>
                                                </button>
                                                <button type="button" class="view-btn tooltip d-flex">
                                                    <i class="icon icon-screen-full"></i>
                                                    <span class="tooltip-text">Quick view</span>
                                                </button>
                                                <button type="button" class="wishlist-btn">
                                                    <i class="icon icon-heart"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="product-detail">
                                            <h3 class="product-title">
                                                <a href="{{route('mypoints.show', $Items[$i]['id'])}}">{{$Items[$i]['name']}}</a>
                                            </h3>
                                            <div class="text-primary"><text class="item-price">{{$Items[$i]['price']}}</text>ₚₜₛ</div>
                                        </div>
                                    </div>
                                    @endfor
                                </div>
                            </div>


                            <nav class="navigation paging-navigation text-center padding-medium" role="navigation">
                                <div class="pagination loop-pagination d-flex justify-content-center">
                                    <a href="#" class="pagination-arrow d-flex align-items-center">
                                        <i class="icon icon-arrow-left"></i>
                                    </a>
                                    <span aria-current="page" class="page-numbers current">1</span>
                                    <a class="page-numbers" href="#">2</a>
                                    <a class="page-numbers" href="#">3</a>
                                    <a href="#" class="pagination-arrow d-flex align-items-center">
                                        <i class="icon icon-arrow-right"></i>
                                    </a>
                                </div>
                            </nav>

                        </div>
                    </div>
                </section>

                <aside class="col-md-3">
                    <div class="sidebar">
                        <div class="widgets widget-menu">
                            <div class="widget-search-bar">
                                <form role="search" method="get" class="d-flex">
                                    <input class="search-field" placeholder="Search" type="text">
                                    <button class="btn btn-dark"><i class="icon icon-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="widgets widget-product-tags">
                            <h5 class="widget-title">Tags</h5>
                            <ul class="product-tags sidebar-list list-unstyled">
                                <li class="tags-item">
                                    <a href="">White</a>
                                </li>
                                <li class="tags-item">
                                    <a href="">Cheap</a>
                                </li>
                                <li class="tags-item">
                                    <a href="">Branded</a>
                                </li>
                                <li class="tags-item">
                                    <a href="">Modern</a>
                                </li>
                                <li class="tags-item">
                                    <a href="">Simple</a>
                                </li>
                            </ul>
                        </div>
                        <div class="widgets widget-product-brands">
                            <h5 class="widget-title">Brands</h5>
                            <ul class="product-tags sidebar-list list-unstyled">
                                <li class="tags-item">
                                    <a href="">Nike</a>
                                </li>
                                <li class="tags-item">
                                    <a href="">Adidas</a>
                                </li>
                                <li class="tags-item">
                                    <a href="">Puma</a>
                                </li>
                                <li class="tags-item">
                                    <a href="">Spike</a>
                                </li>
                            </ul>
                        </div>
                        <div class="widgets widget-price-filter">
                            <h5 class="widget-title">Filter By Points</h5>
                            <ul class="product-tags sidebar-list list-unstyled">
                                <li class="tags-item">
                                    <a href="">Less than 10ₚₜₛ</a>
                                </li>
                                <li class="tags-item">
                                    <a href="">10ₚₜₛ- 20ₚₜₛ</a>
                                </li>
                                <li class="tags-item">
                                    <a href="">20ₚₜₛ- 30ₚₜₛ</a>
                                </li>
                                <li class="tags-item">
                                    <a href="">30ₚₜₛ- 40ₚₜₛ</a>
                                </li>
                                <li class="tags-item">
                                    <a href="">40ₚₜₛ- 50ₚₜₛ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </aside>

            </div>
        </div>
    </div>


    <script src="{{ asset('Shop/js/jquery-1.11.0.min.js')}}"></script>
    <script src="{{ asset('Shop/js/plugins.js')}}"></script>
    <script src="{{ asset('/Shop/js/script.js')}}"></script>
    </body>
@endsection
