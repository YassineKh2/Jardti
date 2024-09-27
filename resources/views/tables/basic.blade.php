@extends('layouts.vertical', ['title' => 'Basic Tables'])

@section('content')
<div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-semibold m-0">Basic Tables</h4>
    </div>

    <div class="text-end">
        <ol class="breadcrumb m-0 py-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
            <li class="breadcrumb-item active">Basic Tables</li>
        </ol>
    </div>
</div>

<div class="row">
    <!-- Basic Example -->
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Basic Example</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Phone Number</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Warren Jackson</td>
                                <td>Jackson</td>
                                <td>336-508-2157</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Amy</td>
                                <td>Cunha</td>
                                <td>646-473-2057</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Steven</td>
                                <td>Loch</td>
                                <td>281-308-0793</td>
                            </tr>
                        </tbody>
                    </table>
                </div> 
            </div>
        </div>
    </div>

    <!-- Hoverable Rows -->
    <div class="col-xl-6">
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
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Warren Jackson</td>
                                <td>Jackson</td>
                                <td>336-508-2157</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Amy</td>
                                <td>Cunha</td>
                                <td>646-473-2057</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Steven</td>
                                <td>Loch</td>
                                <td>281-308-0793</td>
                            </tr>
                        </tbody>
                    </table>
                </div> 
            </div>
        </div>
    </div>

    <!-- Striped Rows -->
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Striped Rows</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped mb-0">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Warren Jackson</td>
                                <td>Jackson</td>
                                <td>336-508-2157</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Amy</td>
                                <td>Cunha</td>
                                <td>646-473-2057</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Steven</td>
                                <td>Loch</td>
                                <td>281-308-0793</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Striped Dark Rows -->
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Dark Table with Striped Rows</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-dark table-striped mb-0">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Warren Jackson</td>
                                <td>Jackson</td>
                                <td>336-508-2157</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Amy</td>
                                <td>Cunha</td>
                                <td>646-473-2057</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Steven</td>
                                <td>Loch</td>
                                <td>281-308-0793</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Striped Columns Dark -->
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Dark Table with Striped Columns </h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-dark table-striped-columns mb-0">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Warren Jackson</td>
                                <td>Jackson</td>
                                <td>336-508-2157</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Amy</td>
                                <td>Cunha</td>
                                <td>646-473-2057</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Steven</td>
                                <td>Loch</td>
                                <td>281-308-0793</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Striped Columns -->
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Striped Columns</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped-columns mb-0">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Warren Jackson</td>
                                <td>Jackson</td>
                                <td>336-508-2157</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Amy</td>
                                <td>Cunha</td>
                                <td>646-473-2057</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Steven</td>
                                <td>Loch</td>
                                <td>281-308-0793</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Active -->
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Active Table</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="table-active">
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td colspan="2" class="table-active">Larry the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <!-- Bordered Tables -->
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Bordered Table</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered mb-0">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Warren Jackson</td>
                                <td>Jackson</td>
                                <td>336-508-2157</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Amy</td>
                                <td>Cunha</td>
                                <td>646-473-2057</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Steven</td>
                                <td>Loch</td>
                                <td>281-308-0793</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Colored Bordered Table -->
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Colored Bordered Table</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered border-primary mb-0">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Warren Jackson</td>
                                <td>Jackson</td>
                                <td>336-508-2157</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Amy</td>
                                <td>Cunha</td>
                                <td>646-473-2057</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Steven</td>
                                <td>Loch</td>
                                <td>281-308-0793</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Borderless Table -->
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Borderless Table</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-borderless mb-0">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Warren Jackson</td>
                                <td>Jackson</td>
                                <td>336-508-2157</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Amy</td>
                                <td>Cunha</td>
                                <td>646-473-2057</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Steven</td>
                                <td>Loch</td>
                                <td>281-308-0793</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Colors Variants</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Class</th>
                                <th>Heading</th>
                                <th>Heading</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="table-light">
                                <th scope="row">1</th>
                                <td>Table light</td>
                                <td>Cell</td>
                                <td>Cell</td>
                            </tr>

                            <tr class="table-success">
                                <th scope="row">2</th>
                                <td>Table Success</td>
                                <td>Cell</td>
                                <td>Cell</td>
                            </tr>

                            <tr class="table-info">
                                <th scope="row">3</th>
                                <td>Table Info</td>
                                <td>Cell</td>
                                <td>Cell</td>
                            </tr>

                            <tr class="table-warning">
                                <th scope="row">4</th>
                                <td>Table Warning</td>
                                <td>Cell</td>
                                <td>Cell</td>
                            </tr>

                            <tr class="table-danger">
                                <th scope="row">5</th>
                                <td>Table Danger</td>
                                <td>Cell</td>
                                <td>Cell</td>
                            </tr>

                            <tr class="table-dark">
                                <th scope="row">6</th>
                                <td>Table Dark</td>
                                <td>Cell</td>
                                <td>Cell</td>
                            </tr>
                        </tbody><!-- end tbody -->
                    </table><!-- end table -->
                </div><!-- end table responsive -->
            </div>
        </div>
    </div>

    <!-- Nesting -->
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Nesting Table</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped mb-0">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Warren Jackson</td>
                                <td>Jackson</td>
                                <td>336-508-2157</td>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    <table class="table table-sm mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">First</th>
                                                <th scope="col">Last</th>
                                                <th scope="col">Handle</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Warren Jackson</td>
                                                <td>Jackson</td>
                                                <td>336-508-2157</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Amy</td>
                                                <td>Cunha</td>
                                                <td>646-473-2057</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Amy</td>
                                <td>Cunha</td>
                                <td>646-473-2057</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Steven</td>
                                <td>Loch</td>
                                <td>281-308-0793</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Always Responsive</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Heading</th>
                                <th scope="col">Heading</th>
                                <th scope="col">Heading</th>
                                <th scope="col">Heading</th>
                                <th scope="col">Heading</th>
                                <th scope="col">Heading</th>
                                <th scope="col">Heading</th>
                                <th scope="col">Heading</th>
                                <th scope="col">Heading</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Cell</td>
                                <td>Cell</td>
                                <td>Cell</td>
                                <td>Cell</td>
                                <td>Cell</td>
                                <td>Cell</td>
                                <td>Cell</td>
                                <td>Cell</td>
                                <td>Cell</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Cell</td>
                                <td>Cell</td>
                                <td>Cell</td>
                                <td>Cell</td>
                                <td>Cell</td>
                                <td>Cell</td>
                                <td>Cell</td>
                                <td>Cell</td>
                                <td>Cell</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Cell</td>
                                <td>Cell</td>
                                <td>Cell</td>
                                <td>Cell</td>
                                <td>Cell</td>
                                <td>Cell</td>
                                <td>Cell</td>
                                <td>Cell</td>
                                <td>Cell</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Small Tables</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <table class="table table-sm mb-0">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Phone Number</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Warren Jackson</td>
                            <td>Jackson</td>
                            <td>336-508-2157</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Amy</td>
                            <td>Cunha</td>
                            <td>646-473-2057</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Steven</td>
                            <td>Loch</td>
                            <td>281-308-0793</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Steven</td>
                            <td>Loch</td>
                            <td>281-308-0793</td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Steven</td>
                            <td>Loch</td>
                            <td>281-308-0793</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Table Group Dividers -->
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Group Dividers Table</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <tr>
                                <th scope="row">1</th>
                                <td>Warren Jackson</td>
                                <td>Jackson</td>
                                <td>336-508-2157</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Amy</td>
                                <td>Cunha</td>
                                <td>646-473-2057</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Steven</td>
                                <td>Loch</td>
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