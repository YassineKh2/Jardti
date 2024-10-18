@extends('layouts.vertical', ['title' => 'Order Management'])

@section('css')
@vite([
'node_modules/datatables.net-bs5/css/dataTables.bootstrap5.min.css',
'node_modules/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css',
'node_modules/datatables.net-keytable-bs5/css/keyTable.bootstrap5.min.css',
'node_modules/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css',
'node_modules/datatables.net-select-bs5/css/select.bootstrap5.min.css'
])
@endsection

@section('content')
<div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-semibold m-0">Order Table</h4>
    </div>
    <div class="text-end">
        <ol class="breadcrumb m-0 py-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Orders</a></li>
            <li class="breadcrumb-item active">Order Table</li>
        </ol>
    </div>
</div>

<!-- Add Order Button -->
<div class="text-end mb-3">
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addOrderModal">Add Order</button>
</div>

<!-- Datatables -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Order List</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <table id="datatable" class="table table-bordered dt-responsive table-responsive nowrap">
                    <thead>
                        <tr>
                            <th>User Name</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total Price</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                        <tr>
                            <td>{{ $order->user->name }}</td>
                            <td>
                                @foreach ($order->products as $product)
                                {{ $product->name }}@if (!$loop->last), @endif
                                @endforeach
                            </td>
                            <td>
                                @foreach ($order->products as $product)
                                ${{ number_format($product->pivot->price, 2) }}@if (!$loop->last) + @endif
                                @endforeach
                            </td>
                            <td>
                                @foreach ($order->products as $product)
                                {{ $product->pivot->quantity }}@if (!$loop->last), @endif
                                @endforeach
                            </td>
                            <td>${{ number_format($order->calculateTotalPrice(), 2) }}</td>
                            <td>{{ ucfirst($order->status) }}</td>
                            <td>
                                <!-- Edit button -->
                                <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-white btn-sm" title="Edit">
                                    <i data-feather="edit" class="text-warning"></i>
                                </a>

                                <!-- Delete form -->
                                <form action="{{ route('orders.destroy', $order->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-white btn-sm" title="Delete">
                                        <i data-feather="trash" class="text-danger"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>

<!-- Add Order Modal -->
<div class="modal fade" id="addOrderModal" tabindex="-1" aria-labelledby="addOrderModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addOrderModalLabel">Add New Order</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('orders.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="user_id" class="form-label">User</label>
                        <select class="form-control" id="user_id" name="user_id" required>
                            <option value="" disabled selected>Select User</option>
                            @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Product 1 -->
                    <div class="mb-3">
                        <label for="product_id_1" class="form-label">Product 1</label>
                        <select class="form-control" id="product_id_1" name="products[0][product_id]" required>
                            <option value="" disabled selected>Select Product</option>
                            @foreach ($products as $product)
                            <option value="{{ $product->id }}">{{ $product->name }} - ${{ number_format($product->price, 2) }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="quantity_1" class="form-label">Quantity 1</label>
                        <input type="number" class="form-control" id="quantity_1" name="products[0][quantity]" min="1" required>
                    </div>

                    <!-- Product 2 -->
                    <div class="mb-3">
                        <label for="product_id_2" class="form-label">Product 2</label>
                        <select class="form-control" id="product_id_2" name="products[1][product_id]">
                            <option value="" disabled selected>Select Product</option>
                            @foreach ($products as $product)
                            <option value="{{ $product->id }}">{{ $product->name }} - ${{ number_format($product->price, 2) }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="quantity_2" class="form-label">Quantity 2</label>
                        <input type="number" class="form-control" id="quantity_2" name="products[1][quantity]" min="1" required>
                    </div>

                    <!-- Product 3 -->
                    <div class="mb-3">
                        <label for="product_id_3" class="form-label">Product 3</label>
                        <select class="form-control" id="product_id_3" name="products[2][product_id]" required>
                            <option value="" disabled selected>Select Product</option>
                            @foreach ($products as $product)
                            <option value="{{ $product->id }}">{{ $product->name }} - ${{ number_format($product->price, 2) }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="quantity_3" class="form-label">Quantity 3</label>
                        <input type="number" class="form-control" id="quantity_3" name="products[2][quantity]" min="1" required>
                    </div>

                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-control" id="status" name="status" required>
                            <option value="pending">Pending</option>
                            <option value="submitted">Submitted</option>
                            <option value="completed">Completed</option>
                            <option value="cancelled">Cancelled</option>
                        </select>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add Order</button>
                    </div>
                </form>


            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
@vite(['resources/js/pages/datatable.init.js'])
@endsection