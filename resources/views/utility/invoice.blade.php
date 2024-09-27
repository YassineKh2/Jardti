@extends('layouts.vertical', ['title' => 'Invoice'])

@section('content')

<div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-semibold m-0">Invoice</h4>
    </div>

    <div class="text-end">
        <ol class="breadcrumb m-0 py-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
            <li class="breadcrumb-item active">Invoice</li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="panel-body">
                    <div class="clearfix">
                        <div class="float-start d-flex justify-content-center">
                            <img src="/images/logo-sm.png" class="me-2" alt="logo" height="24">
                            <h4 class="mb-0 caption fw-semibold fs-18">Tapeli</h4>
                        </div>
                        <div class="float-end">
                            <h4 class="fs-18">Invoice # 4987<br>
                                <strong class="fs-15 fw-normal">Invoice Number</strong>
                            </h4>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="float-start mt-3">
                                <address>
                                    <strong>Twitter, Inc.</strong><br>
                                    815 Parker Mews, West Shay<br>
                                    San Francisco, CA 36100<br>
                                    <abbr title="Phone">P:</abbr> 818-705-3746
                                </address>
                            </div>
                            <div class="float-end mt-3">
                                <p class="mb-0"><strong>Order Date: </strong> June 08, 2021</p>
                                <p class="mt-2 mb-0"><strong>Order Status: </strong> <span class="label label-pink">Pending</span></p>
                                <p class="mt-2 mb-0"><strong>Order ID: </strong> #654321</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive rounded-2">
                                <table class="table mt-4 mb-4 table-centered border">
                                    <thead class="rounded-2">
                                        <tr>
                                            <th>#</th>
                                            <th>Item</th>
                                            <th>Description</th>
                                            <th>Quantity</th>
                                            <th>Unit Cost</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>PH Monitor</td>
                                            <td>HP offers monitors with high refresh rates.</td>
                                            <td>1</td>
                                            <td>$180</td>
                                            <td>$180</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Mobile</td>
                                            <td>DisplayPort, USB-C, and sometimes.</td>
                                            <td>5</td>
                                            <td>$150</td>
                                            <td>$2750</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Keyboard</td>
                                            <td>These monitors often boast features such as factory calibration.</td>
                                            <td>2</td>
                                            <td>$80</td>
                                            <td>$160</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Mouse Master</td>
                                            <td>Balance of performance, features, and design to meet the demands.</td>
                                            <td>3</td>
                                            <td>$300</td>
                                            <td>$900</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>IMac</td>
                                            <td>Eco-friendly features such as low power consumption.</td>
                                            <td>5</td>
                                            <td>$1520</td>
                                            <td>$7600</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4"></td>
                                            <td colspan="2">
                                                <table class="table table-sm text-nowrap mb-0 table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <p class="mb-0">Sub-total :</p>
                                                            </td>
                                                            <td>
                                                                <p class="mb-0 fw-medium fs-15">$1,1590</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">
                                                                <p class="mb-0">Discout :</p>
                                                            </td>
                                                            <td>
                                                                <p class="mb-0 fw-medium fs-15">$29.98</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">
                                                                <p class="mb-0">Vat <span class="text-danger">(20%)</span> :</p>
                                                            </td>
                                                            <td>
                                                                <p class="mb-0 fw-medium fs-15">$472.80</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">
                                                                <p class="mb-0">Due Till Date :</p>
                                                            </td>
                                                            <td>
                                                                <p class="mb-0 fw-medium fs-15">$0</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">
                                                                <p class="mb-0 fs-14">Total :</p>
                                                            </td>
                                                            <td>
                                                                <p class="mb-0 fw-medium fs-16 text-success">$2,032.82</p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="d-print-none">
                        <div class="float-end">
                            <a href="javascript:window.print()" class="btn btn-dark border-0"><i class="mdi mdi-printer me-1"></i>Print</a>
                            <a href="#" class="btn btn-primary">Submit</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection