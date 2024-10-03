@extends('layouts.vertical', ['title' => 'Edit Order'])

@section('content')
<div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-semibold m-0">Edit Order</h4>
    </div>
    <div class="text-end">
        <ol class="breadcrumb m-0 py-0">
            <li class="breadcrumb-item"><a href="{{ route('orders.index') }}">Orders</a></li>
            <li class="breadcrumb-item active">Edit Order</li>
        </ol>
    </div>
</div>

<!-- Order Edit Form -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Update Order</h5>
            </div>
            <div class="card-body">
                <!-- Edit Order Form -->
                <form action="{{ route('orders.update', $order->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <!-- User Selection -->
                    <div class="mb-3">
                        <label for="user_id" class="form-label">User</label>
                        <select class="form-control" id="user_id" name="user_id" required>
                            @foreach ($users as $user)
                            <option value="{{ $user->id }}" {{ $order->user_id == $user->id ? 'selected' : '' }}>
                                {{ $user->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Product Selection -->
                    <div class="mb-3">
                        <label for="product_id" class="form-label">Product</label>
                        <select class="form-control" id="product_id" name="product_id" required>
                            @foreach ($products as $product)
                            <option value="{{ $product->id }}" {{ $order->product_id == $product->id ? 'selected' : '' }}>
                                {{ $product->name }} - ${{ $product->price }}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Quantity -->
                    <div class="mb-3">
                        <label for="quantity" class="form-label">Quantity</label>
                        <input type="number" class="form-control" id="quantity" name="quantity" value="{{ $order->quantity }}" min="1" required>
                    </div>

                    <!-- Status Selection -->
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-control" id="status" name="status" required>
                            <option value="pending" {{ $order->status == 'pending' ? 'selected' : '' }}>Pending</option>
                            <option value="completed" {{ $order->status == 'completed' ? 'selected' : '' }}>Completed</option>
                            <option value="cancelled" {{ $order->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                        </select>
                    </div>

                    <!-- Total Price (Display Only) -->
                    <div class="mb-3">
                        <label for="total_price" class="form-label">Total Price</label>
                        <input type="text" class="form-control" id="total_price" value="${{ $order->total_price }}" readonly>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Update Order</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection