@extends('layouts.navbar', ['title' => 'Plant List'])

@section('content')
<div class="container my-5">
    <h1 class="text-center mb-4 text-success">Plant List</h1>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Button to trigger the side modal -->
    <div class="text-end mb-4">
        <button class="btn btn-success" data-bs-toggle="offcanvas" data-bs-target="#addPlantOffcanvas" aria-controls="addPlantOffcanvas">
            <i data-feather="plus" class="me-1"></i> Add New Plant
        </button>
    </div>

    <!-- Offcanvas (Side Modal) for Adding a Plant -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="addPlantOffcanvas" aria-labelledby="addPlantOffcanvasLabel" style="width: 600px;">
        <div class="offcanvas-header bg-success text-white">
            <h5 class="offcanvas-title" id="addPlantOffcanvasLabel">Add New Plant</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body bg-light">
            <!-- Add Plant Form -->
            <form action="{{ route('plants.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="plantName" class="form-label">Plant Name</label>
                    <input type="text" class="form-control" id="plantName" name="name" required placeholder="Enter plant name">
                </div>
                <div class="mb-4">
                    <label for="plantCategory" class="form-label">Category</label>
                    <select class="form-select" id="plantCategory" name="category" required>
                        <option value="" disabled selected>Select a category</option>
                        @foreach($categories as $category)
                            <option value="{{ $category }}">{{ $category }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <label for="plantDescription" class="form-label">Description</label>
                    <textarea class="form-control" id="plantDescription" name="description" rows="3" placeholder="Enter plant description"></textarea>
                </div>
                <div class="mb-4">
                    <label for="plantImage" class="form-label">Plant Image</label>
                    <input type="file" class="form-control" id="plantImage" name="image" accept="image/*">
                </div>
                <button type="submit" class="btn btn-success w-100 py-2">
                    <i data-feather="plus" class="me-1"></i> Add Plant
                </button>
            </form>
        </div>
    </div>
<!-- Offcanvas (Side Modal) for Editing a Plant -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="editPlantOffcanvas" aria-labelledby="editPlantOffcanvasLabel" style="width: 600px;">
    <div class="offcanvas-header bg-primary text-white">
        <h5 class="offcanvas-title" id="editPlantOffcanvasLabel">Edit Plant</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body bg-light">
        <!-- Edit Plant Form -->
        <form id="editPlantForm" action="#" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="editPlantName" class="form-label">Plant Name</label>
                <input type="text" class="form-control" id="editPlantName" name="name" required placeholder="Enter plant name">
            </div>
            <div class="mb-4">
                <label for="editPlantCategory" class="form-label">Category</label>
                <select class="form-select" id="editPlantCategory" name="category" required>
                    <option value="" disabled selected>Select a category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category }}">{{ $category }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="editPlantDescription" class="form-label">Description</label>
                <textarea class="form-control" id="editPlantDescription" name="description" rows="3" placeholder="Enter plant description"></textarea>
            </div>
            <div class="mb-4">
                <label for="editPlantImage" class="form-label">Plant Image</label>
                <div class="mb-2">
                    <img id="currentPlantImage" src="" alt="Current Plant Image" class="img-thumbnail shadow-sm" style="max-height: 200px; width: auto; border-radius: 12px;">
                </div>
                <input type="file" class="form-control" id="editPlantImage" name="image" accept="image/*">
            </div>
            <button type="submit" class="btn btn-primary w-100 py-2">
                <i data-feather="save" class="me-1"></i> Update Plant
            </button>
        </form>
    </div>
</div>


<!-- Modal for displaying tasks -->
<div class="modal fade" id="taskModal" tabindex="-1" aria-labelledby="taskModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="taskModalLabel">Tasks for <span id="plantName"></span></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul id="taskList" class="list-group">
                    <!-- Tasks will be populated here -->
                </ul>
                <div class="text-center" id="noTasksMessage" style="display: none;">
                    <p>No tasks available for this plant.</p>
                </div>
            </div>
        </div>
    </div>
</div>



    @if($plants->isEmpty())
        <p class="text-center text-muted">No plants available. Start by adding some!</p>
    @else
        <div class="row">
            @foreach($plants as $plant)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm rounded">
                        <img src="{{ $plant->image ? asset($plant->image) : 'https://via.placeholder.com/300' }}"
                             class="card-img-top plant-image rounded-top"
                             alt="{{ $plant->name }}"
                             onclick="openEditModal({{ $plant }})"
                             style="cursor: pointer; height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $plant->name }}</h5>
                            <p class="card-subtitle text-muted">{{ $plant->category }}</p>
                            <p class="card-text mt-2">{{ $plant->description }}</p>
                            <div class="d-flex justify-content-between">
                                <!-- Edit Button -->
                                <button class="btn btn-outline-primary btn-sm" onclick="openEditModal({{ $plant }})">
                                    <i data-feather="edit" class="me-1"></i> Edit
                                </button>
                                <!-- Delete Form -->
                                <form action="{{ route('plants.destroy', $plant->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this plant?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger btn-sm">
                                        <i data-feather="trash" class="me-1"></i> Delete
                                    </button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>




<script>
    function openEditModal(plant) {
        // Set the form action URL
        const form = document.getElementById('editPlantForm');
        form.action = '/plants/' + plant.id; // Adjust this URL based on your routes

        // Populate the form fields with the plant data
        document.getElementById('editPlantName').value = plant.name;
        document.getElementById('editPlantCategory').value = plant.category;
        document.getElementById('editPlantDescription').value = plant.description;

        // Set the current plant image
        const currentImage = document.getElementById('currentPlantImage');
        currentImage.src = plant.image ?  plant.image : 'https://via.placeholder.com/300';

        // Show the offcanvas modal
        const offcanvas = new bootstrap.Offcanvas(document.getElementById('editPlantOffcanvas'));
        offcanvas.show();
    }
</script>

@endsection
