@extends('layouts.vertical', ['title' => 'Dashboard'])

@section('content')
<div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-semibold m-0">Dashboard</h4>
    </div>
</div>
<div class="container">
    <div class="row">
        <!-- Start Order Statistics by Status -->
        <div class="col-md-6 col-xl-6">
            <div class="card overflow-hidden">
                <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
                    <div class="flex-grow-1">
                        <h4 class="fs-18 fw-semibold m-0">Order Statistics by Status</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div id="simple_pie_chart" class="apex-charts"></div>
                </div>
            </div>
        </div>
        <!-- End Order Statistics by Status -->

        <!-- Start Orders Over Time -->
        <div class="col-md-6 col-xl-6">
            <div class="card overflow-hidden">
                <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
                    <div class="flex-grow-1">
                        <h4 class="fs-18 fw-semibold m-0">Orders Over Time</h4>
                    </div>
                </div>
                <div class="card-body">
                    <form id="periodForm">
                        <label for="period">Select Period:</label>
                        <select name="period" id="period" onchange="submitPeriod()">
                            <option value="day" {{ request('period') == 'day' ? 'selected' : '' }}>Daily</option>
                            <option value="month" {{ request('period') == 'month' ? 'selected' : '' }}>Monthly</option>
                            <option value="year" {{ request('period') == 'year' ? 'selected' : '' }}>Yearly</option>
                        </select>
                    </form>

                    <div id="basic_bar_chart" class="apex-charts"></div>
                </div>
            </div>
        </div>
        <!-- End Orders Over Time -->
    </div>

    <div class="row">
        <!-- Start Orders of the Day -->
        <div class="col-md-6 col-xl-6">
            <div class="card overflow-hidden">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <div class="border border-dark rounded-2 me-2 widget-icons-sections">
                            <i data-feather="shopping-cart" class="widgets-icons text-success"></i>
                        </div>
                        <h5 class="card-title mb-0">Orders of the Day</h5>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-traffic mb-0">
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Customer</th>
                                    <th>Total Amount</th>
                                    <th>Order Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ordersToday as $order)
                                <tr>
                                    <td>{{ $order['id'] }}</td>
                                    <td>{{ $order->user->name }}</td>
                                    <td>${{ number_format($order->calculateTotalPrice(), 2) }}</td>
                                    <td>{{ $order->status}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Orders of the Day -->

        <!-- Start Top Users by Orders -->
        <div class="col-md-6 col-xl-6">
            <div class="card overflow-hidden">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <div class="border border-dark rounded-2 me-2 widget-icons-sections">
                            <i data-feather="user" class="widgets-icons text-success"></i>
                        </div>
                        <h5 class="card-title mb-0">Top Users by Orders</h5>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-traffic mb-0">
                            <thead>
                                <tr>
                                    <th>User Name</th>
                                    <th>Total Orders</th>
                                    <th>Last Order Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($topUsers as $user)
                                <tr>
                                    <td>{{ $user['name'] }}</td>
                                    <td>{{ $user['total_orders'] }}</td>
                                    <td>{{ $user['last_order_date'] }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Top Users by Orders -->
    </div>
</div>
@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Prepare the data for the pie chart
        var labels = <?php echo json_encode($labels); ?>; // Using PHP's json_encode
        var data = <?php echo json_encode($data); ?>; // Using PHP's json_encode

        // Check if labels and data are valid arrays
        console.log('Labels:', labels);
        console.log('Data:', data);

        // Set up the pie chart options
        var pieOptions = {
            chart: {
                type: 'pie'
            },
            labels: labels,
            series: data,
            title: {
                text: 'Order Status Distribution',
                align: 'center'
            }
        };

        // Render the pie chart
        var pieChart = new ApexCharts(document.querySelector("#simple_pie_chart"), pieOptions);
        pieChart.render();

        // Prepare data for the bar chart
        var barOptions = {
            chart: {
                type: 'bar',
                height: 350
            },
            series: [{
                name: 'Total Orders',
                data: <?php echo json_encode($data1); ?> // Pass the data array
            }],
            xaxis: {
                categories: <?php echo json_encode($labels1); ?> // Pass the labels array
            }
        };

        // Render the bar chart
        var barChart = new ApexCharts(document.querySelector("#basic_bar_chart"), barOptions);
        barChart.render();
    });
</script>
<script>
    function submitPeriod() {
        const period = document.getElementById('period').value;
        // Redirect to the new URL
        window.location.href = `/statistics/orders/${period}`;
    }
</script>
@endsection