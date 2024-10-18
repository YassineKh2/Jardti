@extends('layouts.navbar', ['title' => 'Shop'])

@section('content')

<body>

    <link rel="stylesheet" href="{{ asset('ProductsAssets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('ProductsAssets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('ProductsAssets/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('ProductsAssets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('ProductsAssets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('ProductsAssets/css/meanmenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('ProductsAssets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('ProductsAssets/css/responsive.css') }}">

    <div class="product-section d-flex flex-column min-vh-100">
        <div class="flex-grow-1">
            <div class="row">
                <div class="col-md-10" style="margin-bottom: 0 !important;">
                    <div class="product-filters">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            @foreach($categories as $category)
                            <li data-filter="{{ $category['category'] }}">{{ $category['category'] }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="collapse show col-md-10" style="align-items: center; padding: 0; margin-left: 10%;">
                    <div class="billing-address-form" style="padding: 0 !important;">
                        <form action="{{ route('products.search') }}" method="GET" class="d-flex billing-address-form">
                            <input type="text" name="query" class="col-md-6 form-control" placeholder="Search products..." value="{{ request()->input('query') }}">
                            <a type="submit" class="cart-btn ml-2" style="background-color: #5cb85c !important;"><i class="fas fa-search"></i> Search</a>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row product-lists" id="product-list">
                @if($products->count())
                @foreach ($products as $product)
                <div class="col-lg-3 col-md-4 text-center mr-2">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="{{ route('products.show', $product->id) }}">
                                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="img-fluid" style="aspect-ratio: 3/3; object-fit:cover;">
                            </a>
                        </div>
                        <h3>{{ $product->name }}</h3>
                        <p class="product-price">${{ number_format($product->price, 2) }}</p>
                        <a href="{{ route('products.show', $product->id) }}" class="cart-btn" style="background-color: #5cb85c !important;">
                            <i class="fas fa-info"></i> See details
                        </a>
                    </div>
                </div>
                @endforeach
                @else
                <p>No products found.</p>
                @endif
            </div>

        </div>
    </div>

    <script src="{{ asset('ProductsAssets/js/jquery-1.11.3.min.js') }}"></script>
    <script src="{{ asset('ProductsAssets/bootstrap/js/bootstrap.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            // Lorsque l'utilisateur clique sur une catégorie
            $('li[data-filter]').on('click', function() {
                var category = $(this).data('filter'); // Récupérer la catégorie

                if (category === '*') {
                    // Si la catégorie est "All", recharger la page pour afficher tous les produits
                    window.location.href = "/Client/ProductsList"; // Change this to your actual route
                } else {
                    // Faire une requête AJAX pour récupérer les produits de cette catégorie
                    $.ajax({
                        url: '/products/category/' + category, // URL vers la route Laravel
                        type: 'GET',
                        success: function(products) {
                            // Vider la liste des produits
                            $('#product-list').empty();

                            // Boucler sur chaque produit et l'ajouter dans le DOM
                            $.each(products, function(index, product) {
                                $('#product-list').append(`
                                    <div class="col-lg-3 col-md-4 text-center mr-2">
                                        <div class="single-product-item">
                                            <div class="product-image">
                                                <a href="/products/` + product.id + `">
                                                    <img src="/storage/` + product.image + `" alt="` + product.name + `" class="img-fluid" style="aspect-ratio: 3/3; object-fit:cover;">
                                                </a>
                                            </div>
                                            <h3>` + product.name + `</h3>
                                            <p class="product-price">$` + parseFloat(product.price).toFixed(2) + `</p>
                                            <a href="/products/` + product.id + `" class="cart-btn" style="background-color: #5cb85c !important;">
                                                <i class="fas fa-info"></i> See details
                                            </a>
                                        </div>
                                    </div>
                                `);
                            });
                        },
                        error: function() {
                            alert('Erreur lors de la récupération des produits.');
                        }
                    });
                }
            });
        });
    </script>

    <!-- Additional Scripts -->
    <script src="{{ asset('ProductsAssets/js/jquery.countdown.js') }}"></script>
    <script src="{{ asset('ProductsAssets/js/jquery.isotope-3.0.6.min.js') }}"></script>
    <script src="{{ asset('ProductsAssets/js/waypoints.js') }}"></script>
    <script src="{{ asset('ProductsAssets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('ProductsAssets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('ProductsAssets/js/jquery.meanmenu.min.js') }}"></script>
    <script src="{{ asset('ProductsAssets/js/sticker.js') }}"></script>
    <script src="{{ asset('ProductsAssets/js/main.js') }}"></script>

</body>

@endsection