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



@endsection
