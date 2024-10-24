@extends('layouts.navbar', ['title' => 'Shop'])





@section('content')
<link rel="stylesheet" href="{{ asset('ProductsAssets/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{ asset('ProductsAssets/css/all.min.css')}}">
<link rel="stylesheet" href="{{ asset('ProductsAssets/css/owl.carousel.css')}}">
<link rel="stylesheet" href="{{ asset('ProductsAssets/css/magnific-popup.css')}}">
<link rel="stylesheet" href="{{ asset('ProductsAssets/css/animate.css')}}">
<link rel="stylesheet" href="{{ asset('ProductsAssets/css/meanmenu.min.css')}}">
<link rel="stylesheet" href="{{ asset('ProductsAssets/css/main.css')}}">
<link rel="stylesheet" href="{{ asset('ProductsAssets/css/responsive.css')}}">



<!-- single product -->
<div class="single-product section">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="single-product-img">
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="img-fluid" style="aspect-ratio: 3/3; object-fit:cover;">
                </div>
            </div>
            <div class="col-md-7">
                <div class="single-product-content">
                    <h3>{{ $product->name }}</h3>
                    <p class="single-product-pricing">${{ number_format($product->price, 2) }}</p>
                    <p>{{ $product->description }}</p>
                    <div class="single-product-form">
                        <form id="add-to-cart-form" action="{{ route('cart.add', $product->id) }}" method="POST">
                            @csrf <!-- Include CSRF token for security -->
                            <input type="number" name="quantity" id="quantity" value="1" min="1" style="width: 60px; margin-right: 10px;">
                            <button type="submit" class="cart-btn" style="background-color: #5cb85c !important;"> <i class="fas fa-shopping-cart"></i>Add to Cart</button>
                        </form>
                        <!-- <a href="cart.html" class=""> Add to Cart</a> -->
                        <p><strong>Categories: </strong>{{ $product->category }}</p>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end single product -->

<!-- more products -->
<div class="more-products mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-2 text-center" style="margin-top: 5%;">
                <div class="section-title">
                    <h3><span class="text-success">Related</span> Products</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet beatae optio.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-4 text-center mr-2">
                <div class="single-product-item">
                    <div class="product-image">
                        <a href="single-product.html"><img src="assets/img/products/product-img-1.jpg" alt=""></a>
                    </div>
                    <h3>Strawberry</h3>
                    <p class="product-price"><span>Per Kg</span> 85$ </p>
                    <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 text-center mr-2">
                <div class="single-product-item">
                    <div class="product-image">
                        <a href="single-product.html"><img src="assets/img/products/product-img-2.jpg" alt=""></a>
                    </div>
                    <h3>Berry</h3>
                    <p class="product-price"><span>Per Kg</span> 70$ </p>
                    <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 offset-lg-0 offset-md-3 text-center">
                <div class="single-product-item">
                    <div class="product-image">
                        <a href="single-product.html"><img src="assets/img/products/product-img-3.jpg" alt=""></a>
                    </div>
                    <h3>Lemon</h3>
                    <p class="product-price"><span>Per Kg</span> 35$ </p>
                    <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end more products -->

@endsection