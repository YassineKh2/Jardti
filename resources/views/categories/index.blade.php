@extends('layouts.vertical', ['title' => 'Categories'])

@section('content')
<div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-semibold m-0">Category List</h4>
    </div>

    <div class="text-end">
        <ol class="breadcrumb m-0 py-0">
            <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
            <li class="breadcrumb-item active">Categories</li>
        </ol>
    </div>
</div>

<!-- Button to add a new category -->
<div class="mb-3">
    <a href="{{ route('course-categories.create') }}" class="btn btn-primary">
        <i class="fas fa-plus"></i> Add New Category
    </a>
</div>

<!-- Grid of categories -->
<div class="row">
    @if($categories->count() > 0)
        @foreach($categories as $category)
            <div class="col-md-3">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">{{ $category->name }}</h5>
                        <div class="d-flex justify-content-between align-items-center">
                            <!-- View Category -->
                            <a href="{{ route('course-categories.show', $category->id) }}" class="btn btn-info btn-sm" title="View">
                                <i class="fas fa-eye"></i> View
                            </a>

                            <!-- Edit Category -->
                            <a href="{{ route('course-categories.edit', $category->id) }}" class="btn btn-warning btn-sm" title="Edit">
                                <i class="fas fa-edit"></i> Edit
                            </a>

                            <!-- Delete Category -->
                            <form action="{{ route('course-categories.destroy', $category->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this category? This action cannot be undone.');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete">
                                    <i class="fas fa-trash-alt"></i> Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        
    @else
        <p class="text-muted">No categories available.</p>
    @endif
    <div class="mt-5 d-flex justify-content-center">
    <h5 class="text-center">Category Distribution</h5>
    <div style="max-width: 400px; max-height: 400px;"> <!-- Limit the size of the chart -->
        <canvas id="categoryChart"></canvas>
    </div>
</div>
</div>

<!-- Pie Chart for Categories -->
<div class="mt-5">
    <h5 class="text-center">Category Distribution</h5>
    <canvas id="categoryChart"></canvas>
</div>
@endsection
<!-- Pie Chart for Categories -->


@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const ctx = document.getElementById('categoryChart').getContext('2d');
        const categoryChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: {!! json_encode($chartData['labels']) !!}, // Category names
                datasets: [{
                    data: {!! json_encode($chartData['data']) !!},  // Number of courses per category
                    backgroundColor: ['#36A2EB', '#4BC0C0',  '#FFCE56', '#FF6384'], // Custom color order
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false, // Disable maintaining the aspect ratio
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    tooltip: {
                        callbacks: {
                            label: function(tooltipItem) {
                                const label = tooltipItem.label || '';
                                const dataset = tooltipItem.dataset;
                                const total = dataset.data.reduce((accumulator, value) => accumulator + value, 0);
                                const currentValue = dataset.data[tooltipItem.dataIndex];
                                const percentage = ((currentValue / total) * 100).toFixed(2); // Calculate percentage

                                return `${label}: ${currentValue} (${percentage}%)`; // Show percentage in tooltip
                            }
                        }
                    },
                    datalabels: {
                        display: true, // Ensure the labels are displayed
                        color: '#fff', // Label text color
                        align: 'center', // Align the labels to the center of the slice
                        anchor: 'center', // Anchor the labels to the center of the slice
                        formatter: function(value, context) {
                            const total = context.chart.data.datasets[0].data.reduce((accumulator, value) => accumulator + value, 0);
                            const percentage = ((value / total) * 100).toFixed(2);
                            
                            return value > 0 ? `${percentage}%` : ''; // Display percentage only if value is greater than 0
                        },
                        font: {
                            size: 14, // Font size
                            weight: 'bold'
                        }
                    }
                }
            },
            plugins: [ChartDataLabels] // Load the Data Labels plugin
        });
    });
</script>

 

 
