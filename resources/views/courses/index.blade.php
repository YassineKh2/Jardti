@extends('layouts.vertical', ['title' => 'Courses'])

@section('content')
<div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-semibold m-0">Course List</h4>
    </div>

    <div class="text-end">
        <ol class="breadcrumb m-0 py-0">
            <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
            <li class="breadcrumb-item active">Courses</li>
        </ol>
    </div>
</div>

<!-- Button to add a new course -->
<div class="mb-3">
    <a href="{{ route('courses.create') }}" class="btn btn-primary">
        <i class="fas fa-plus"></i> Add New Course
    </a>
</div>

<!-- Table of courses -->
<div class="table-responsive">
    <table class="table table-striped table-bordered">
        <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Category</th>
                <th scope="col">PDF</th>
                <th scope="col">Audiobook version</th>
                <th scope="col" class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @if($courses->count() > 0)
                @foreach($courses as $index => $course)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $course->title }}</td>
                        <td>{{ Str::limit($course->description, 50) }}</td>
                        <td>{{ $course->category->name ?? 'No Category' }}</td>
                        <td>
                            @if($course->pdf)
                                <a href="{{ Storage::url($course->pdf) }}" target="_blank" class="btn btn-success btn-sm">
                                    <i class="fas fa-file-pdf"></i> View PDF
                                </a>
                            @else
                                <span class="text-muted">No PDF</span>
                            @endif
                        </td>
                        <td>
                            @if($course->audio)
                            <audio controls class="mt-2 w-100">
                                <source src="{{ asset($course->audio) }}" type="audio/mpeg">
                                Your browser does not support the audio element.
                            </audio>
                            @else
                                <span class="text-muted">No Audio</span>
                            @endif
                        </td>
                        <td class="text-center">
                            <!-- View Course -->
                            <a href="{{ route('courses.show', $course->id) }}" class="btn btn-info btn-sm" title="View">
                                <i class="fas fa-eye"></i>
                            </a>

                            <!-- Edit Course -->
                            <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-warning btn-sm" title="Edit">
                                <i class="fas fa-edit"></i>
                            </a>

                            <!-- Delete Course -->
                            <form action="{{ route('courses.destroy', $course->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this course? This action cannot be undone.');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="7" class="text-center text-muted">No courses available.</td>
                </tr>
            @endif
        </tbody>
    </table>
</div>

<!-- Pie Chart for Course Categories -->
<div class="my-5">
    <h5 class="text-center">Course Distribution by Category</h5>
    <canvas id="categoryChart" style="max-width: 600px; margin: 0 auto;"></canvas>
</div>
 <!-- Load Chart.js and the Chart.js Data Labels Plugin -->
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
                    backgroundColor: ['#36A2EB', '#4BC0C0', '#FF6384', '#FFCE56', '#9966FF'], // Custom color order
                }]
            },
            options: {
                responsive: true,
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
                    // Plugin to show percentage directly on the pie chart slices
                    datalabels: {
                        display: true, // Ensure the labels are displayed
                        color: '#fff', // Label text color
                        align: 'center', // Align the labels to the center of the slice
                        anchor: 'center', // Anchor the labels to the center of the slice
                        formatter: function(value, context) {
    const total = context.chart.data.datasets[0].data.reduce((accumulator, value) => accumulator + value, 0);
    const percentage = ((value / total) * 100).toFixed(2);

    return value > 0 ? `${percentage}%` : ''; // Only display percentage if greater than 0
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



@endsection
