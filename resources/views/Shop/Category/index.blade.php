@extends('layouts.vertical', ['title' => 'Basic Tables'])

@section('content')
    <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
        <div class="flex-grow-1">
            <h4 class="fs-18 fw-semibold m-0">Basic Tables</h4>
        </div>

        <div class="text-end">
            <ol class="breadcrumb m-0 py-0">
                <li class="breadcrumb-item"><a href="javascript: void(0);">Shop</a></li>
                <li class="breadcrumb-item active">Category</li>
            </ol>
        </div>
    </div>


        <!-- Hoverable Rows -->
        <div class="">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Hoverable Table</h5>
                </div><!-- end card header -->

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Picture</th>
                                <th scope="col">Items</th>
                                <th scope="col">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Warren Jackson</td>
                                <td>Jackson</td>
                                <td>336-508-2157</td>
                                <td>336-508-2157</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Amy</td>
                                <td>Cunha</td>
                                <td>646-473-2057</td>
                                <td>646-473-2057</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Steven</td>
                                <td>Loch</td>
                                <td>281-308-0793</td>
                                <td>281-308-0793</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>




    </div>
@endsection
