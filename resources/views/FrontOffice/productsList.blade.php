@extends('layouts.navbar', ['title' => 'Shop'])





@section('content')

<body>

    <link rel="stylesheet" href="{{ asset('ProductsAssets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('ProductsAssets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('ProductsAssets/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{ asset('ProductsAssets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('ProductsAssets/css/animate.css')}}">
    <link rel="stylesheet" href="{{ asset('ProductsAssets/css/meanmenu.min.css')}}">
    <link rel="stylesheet" href="{{ asset('ProductsAssets/css/main.css')}}">
    <link rel="stylesheet" href="{{ asset('ProductsAssets/css/responsive.css')}}">

    <div class="product-section">
        <div class="">

            <div class="row">
                <div class="col-md-10">
                    <div class="product-filters">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".strawberry">Strawberry</li>
                            <li data-filter=".berry">Berry</li>
                            <li data-filter=".lemon">Lemon</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row product-lists">
                
                @foreach ($products as $product)
                <div class="col-lg-3 col-md-4 text-center mr-2">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="{{ route('products.show', $product->id) }}">
                                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="img-fluid" style="aspect-ratio: 3/3; object-fit:cover;">
                            </a>
                        </div>
                        <h3>{{ $product->name }}</h3>
                        <p class="product-price">${{ number_format($product->price, 2) }} </p>
                        <a href="{{ route('products.show', $product->id) }}" class="cart-btn" style="background-color: #5cb85c !important;">
                            <i class="fas fa-info"></i> See details
                        </a>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="pagination-wrap">
                        <ul>
                            <li><a href="#">Prev</a></li>
                            <li><a href="#">1</a></li>
                            <li><a class="active" href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">Next</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 
    <div class="container my-5">
        <h1 class="mb-4">Product List</h1>
        <div class="row">
            @foreach ($products as $product)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="img-fluid">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">${{ number_format($product->price, 2) }}</p>
                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">Details</a>
                        <a href="#" class="btn btn-success">Add to Cart</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div> -->

    <!-- jquery -->
    <script src="{{ asset('ProductsAssets/js/jquery-1.11.3.min.js') }}"></script>
    <!-- bootstrap -->
    <script src="{{ asset('ProductsAssets/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- count down -->
    <script src="{{ asset('ProductsAssets/js/jquery.countdown.js') }}"></script>
    <!-- isotope -->
    <script src="{{ asset('ProductsAssets/js/jquery.isotope-3.0.6.min.js') }}"></script>
    <!-- waypoints -->
    <script src="{{ asset('ProductsAssets/js/waypoints.js') }}"></script>
    <!-- owl carousel -->
    <script src="{{ asset('ProductsAssets/js/owl.carousel.min.js') }}"></script>
    <!-- magnific popup -->
    <script src="{{ asset('ProductsAssets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- mean menu -->
    <script src="{{ asset('ProductsAssets/js/jquery.meanmenu.min.js') }}"></script>
    <!-- sticker js -->
    <script src="{{ asset('ProductsAssets/js/sticker.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('ProductsAssets/js/main.js') }}"></script>

</body>

@endsection