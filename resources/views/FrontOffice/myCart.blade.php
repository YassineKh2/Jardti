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




<div class="cart-section ">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-10">
                <div class="cart-table-wrap">
                    <table class="cart-table">
                        <thead class="cart-table-head">
                            <tr class="table-head-row">
                                <th class="product-remove"></th>
                                <th class="product-image">Product Image</th>
                                <th class="product-name">Name</th>
                                <th class="product-price">Price</th>
                                <th class="product-quantity">Quantity</th>
                                <th class="product-total">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cartDetails['products'] as $product)

                            <tr class="table-body-row">
                                <td>
                                    <form action="{{  route('cart.remove', $product['id']) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-white btn-sm" title="Delete">
                                            <i data-feather="trash" class="text-danger"></i>
                                        </button>
                                    </form>
                                </td>
                                <td class="product-image"><img src="{{ asset('storage/' . $product['image']) }}" alt=""></td>
                                <td class="product-name">{{ $product['name']}}</td>
                                <td class="product-price">${{ number_format($product['price'], 2) }}</td>
                                <td class="product-quantity">{{ $product['quantity'] }}</td>
                                <td class="product-total">${{ number_format($product['total_price'], 2) }}</td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="total-section">
                    <table class="total-table">
                        <thead class="total-table-head">
                            <tr class="table-total-row">
                                <th>Total</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="total-data">
                                <td><strong>Subtotal: </strong></td>
                                <td>${{$cartDetails['total_amount']}}</td>
                            </tr>
                            <tr class="total-data">
                                <td><strong>Shipping: </strong></td>
                                <td>$7</td>
                            </tr>
                            <tr class="total-data">
                                <td><strong>Total: </strong></td>
                                <td>${{ $cartDetails['total_amount'] + 7 }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="cart-buttons">
                        <form action="{{ route('order.updateStatus', $cartDetails['order_id']) }}" method="POST">
                            @csrf
                            <button type="submit" class="boxed-btn " style="background-color: green;">Submit Order</button>
                        </form>

                    </div>
                </div>

                <div class="coupon-section">
                    <h3>Apply Coupon</h3>
                    <div class="coupon-form-wrap">
                        <form action="index.html">
                            <p><input type="text" placeholder="Coupon"></p>
                            <p><input type="submit" value="Apply"></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection