@extends('layouts.vertical', ['title' => 'Basic Tables'])

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


<!-- Datatables -->
<div class="row">
    <div class="col-12">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">Basic Datatable</h5>

            </div><!-- end card header -->

            <div class="card-body">
                <table id="datatable" class="table table-bordered dt-responsive table-responsive nowrap">
                    <thead>
                        <tr>
                            <th>User Name</th> <!-- Display the user associated with the order -->
                            <th>Product Name</th> <!-- Display the product name -->
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
                            <td>{{ $order->user->name }}</td> <!-- Access the user name -->
                            <td>{{ $order->product->name }}</td> <!-- Access the product name -->
                            <td>${{ $order->product->price }}</td> <!-- Display product price -->
                            <td>{{ $order->quantity }}</td> <!-- Display order quantity -->
                            <td>${{ $order->calculateTotalPrice() }}</td> <!-- Display total price (using method) -->
                            <td>{{ ucfirst($order->status) }}</td> <!-- Display order status -->
                            <td>
                                <!-- Edit button -->
                                <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-white btn-sm">
                                    <i data-feather="edit" class="text-warning"></i> <!-- Edit Icon -->
                                </a>

                                <!-- Delete form -->
                                <form action="{{ route('orders.destroy', $order->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-white btn-sm">
                                        <i data-feather="trash" class="text-danger"></i> <!-- Delete Icon -->
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="text-center">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addOrderModal">Add Order</button>
                </div>
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
                            @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="product_id" class="form-label">Product</label>
                        <select class="form-control" id="product_id" name="product_id" required>
                            @foreach ($products as $product)
                            <option value="{{ $product->id }}">{{ $product->name }} - ${{ $product->price }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="quantity" class="form-label">Quantity</label>
                        <input type="number" class="form-control" id="quantity" name="quantity" min="1" required>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-control" id="status" name="status" required>
                            <option value="pending">Pending</option>
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
<!-- <script>
    $(document).ready(function() {
        $('#datatable').DataTable();
    });
</script> -->
@endsection