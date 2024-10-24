@extends('layouts.navbar', ['title' => 'Task List'])

@section('content')


    <div class="filter-container my-4 p-3 border rounded shadow-sm bg-light">
        <button class="btn btn-outline-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#filterForm" aria-expanded="false" aria-controls="filterForm">
            <i class="fas fa-filter"></i> Filter
        </button>

        <!-- Display Selected Filters -->
        <div class="mt-3">
            @if(request()->has('task_type') || request()->has('status'))
                <div class="mb-2">
                    <strong>Selected Filters:</strong>
                    @if(request()->has('task_type'))
                        <span class="badge bg-info text-dark me-2">
                            {{ request()->get('task_type') == 'general' ? 'General Task' : 'Plant-Based Task' }}
                            <a href="{{ route('tasks.index', ['status' => request()->get('status')]) }}" class="text-dark ms-1" style="text-decoration: none;">&times;</a>
                        </span>
                    @endif
                    @if(request()->has('status'))
                        <span class="badge bg-info text-dark me-2">
                            {{ ucfirst(request()->get('status')) }}
                            <a href="{{ route('tasks.index', ['task_type' => request()->get('task_type')]) }}" class="text-dark ms-1" style="text-decoration: none;">&times;</a>
                        </span>
                    @endif
                </div>
            @endif
        </div>

        <div class="collapse mt-3" id="filterForm">
            <form id="taskFilterForm" method="GET" action="{{ route('tasks.index') }}" class="mt-3">
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="filterTaskType" class="form-label">Task Type</label>
                        <select class="form-select" id="filterTaskType" name="task_type">
                            <option value="">All Types</option>
                            <option value="general" {{ request()->get('task_type') == 'general' ? 'selected' : '' }}>General Task</option>
                            <option value="plant-based" {{ request()->get('task_type') == 'plant-based' ? 'selected' : '' }}>Plant-Based Task</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="filterTaskStatus" class="form-label">Status</label>
                        <select class="form-select" id="filterTaskStatus" name="status">
                            <option value="">All Statuses</option>
                            <option value="to do" {{ request()->get('status') == 'to do' ? 'selected' : '' }}>To Do</option>
                            <option value="doing" {{ request()->get('status') == 'doing' ? 'selected' : '' }}>Doing</option>
                            <option value="done" {{ request()->get('status') == 'done' ? 'selected' : '' }}>Done</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-success mt-3 fw-bold d-flex align-items-center">Apply Filter</button>
            </form>
        </div>
    </div>








    <div class="card shadow-sm">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="card-title mb-0 text-success">Tasks Table</h5>
            <div>
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addTaskModal">
                    <i data-feather="plus-circle" class="me-1"></i>Add Task
                </button>
                <a  href="/plants" class="btn btn-success">Add Plants</a>
            </div>

        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Type</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Status</th>
                            <th scope="col">Due Date</th>
                            <th scope="col">Actions</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tasks as $i => $task)
                            <tr>
                                <th scope="row">{{ $i + 1 }}</th>
                                <td>
                                    @if($task->plant_id)
                                        <i class="fas fa-leaf text-success" title="Plant-based Task"
                                           onclick="showPlantDetails('{{ asset($task->plant->image) }}', '{{ $task->plant->name }}', '{{ $task->plant->description }}')"></i>
                                    @else
                                        <i class="fas fa-tasks text-secondary" title="General Task"></i>
                                    @endif
                                </td>
                                <td>{{ $task->name }}</td>
                                <td>{{ $task->description }}</td>
                                <td>
                                    @if($task->status === 'done')
                                        <span class="badge bg-success">Done</span>
                                    @elseif($task->status === 'doing')
                                        <span class="badge bg-warning text-dark">Doing</span>
                                    @else
                                        <span class="badge bg-info">To Do</span>
                                    @endif
                                </td>
                                <td>{{ \Carbon\Carbon::parse($task->dueDate)->format('Y-m-d') }}</td>

                                <td class="d-flex justify-content-center align-items-center gap-1">
                                    <button type="button" class="btn btn-outline-primary btn-sm editTaskBtn"
                                    data-id="{{ $task->id }}"
                                    data-name="{{ $task->name }}"
                                    data-description="{{ $task->description }}"
                                    data-status="{{ $task->status }}"
                                    data-duedate="{{ $task->dueDate }}"
                                    data-plant-image="{{ $task->plant ? asset($task->plant->image) : '' }}"
                                    data-bs-toggle="modal" data-bs-target="#editTaskModal">
                                    <i data-feather="edit"></i>
                                </button>

                                    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this task?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger btn-sm">
                                            <i data-feather="trash"></i>
                                        </button>
                                    </form>
                                    <!-- Modal for Editing a Task -->
                                    <div class="modal fade" id="editTaskModal" tabindex="-1" aria-labelledby="editTaskModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editTaskModalLabel">Edit Task</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form id="editTaskForm" method="POST" action="{{ route('tasks.update', $task->id) }}">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="mb-3">
                                                            <label for="editTaskName" class="form-label">Task Name</label>
                                                            <input type="text" class="form-control" id="editTaskName" name="name" value="{{ old('name', $task->name) }}" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="editTaskDescription" class="form-label">Description</label>
                                                            <textarea class="form-control" id="editTaskDescription" name="description" rows="3" required>{{ old('description', $task->description) }}</textarea>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="editTaskStatus" class="form-label">Status</label>
                                                            <select class="form-select" id="editTaskStatus" name="status" required>
                                                                <option value="to do" {{ $task->status == 'to do' ? 'selected' : '' }}>To Do</option>
                                                                <option value="doing" {{ $task->status == 'doing' ? 'selected' : '' }}>Doing</option>
                                                                <option value="done" {{ $task->status == 'done' ? 'selected' : '' }}>Done</option>
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="editTaskDueDate" class="form-label">Due Date</label>
                                                            <input type="date" class="form-control" id="editTaskDueDate" name="dueDate" value="{{ old('dueDate', $task->dueDate) }}" required>
                                                        </div>




                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-success">Update Task</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


<!-- Plant Details Modal -->
<div class="modal fade" id="plantDetailsModal" tabindex="-1" aria-labelledby="plantDetailsModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="plantDetailsModalLabel">Plant Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img id="plantImage" src="" alt="Plant Image" class="img-fluid mb-3">
                <h5 id="plantName"></h5>
                <p id="plantDescription"></p>
            </div>
        </div>
    </div>
</div>



<!-- Modal for Adding a Task -->
<div class="modal fade" id="addTaskModal" tabindex="-1" aria-labelledby="addTaskModalLabel" aria-hidden="true"
    @if($errors->any()) style="display: block;" @endif>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addTaskModalLabel">Add New Task</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addTaskForm" action="{{ route('tasks.store') }}" method="POST">
                    @csrf
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="mb-3">
                        <label for="taskName" class="form-label">Task Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="taskName" name="name" value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="taskDescription" class="form-label">Description</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" id="taskDescription" name="description" rows="3">{{ old('description') }}</textarea>
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="taskType" class="form-label">Task Type</label>
                        <select class="form-select @error('task_type') is-invalid @enderror" id="taskType" name="task_type" required>
                            <option value="general" {{ old('task_type') == 'general' ? 'selected' : '' }}>General Task</option>
                            <option value="plant-based" {{ old('task_type') == 'plant-based' ? 'selected' : '' }}>Plant-Based Task</option>
                        </select>
                        @error('task_type')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>




                    <div class="mb-3" id="plantSelection" style="display: none;">
                        <label for="taskPlant" class="form-label">Related Plant</label>
                        <select class="form-select" id="taskPlant" name="plant_id">
                            <option value="" selected>Choose a plant</option>
                            @foreach($plants as $plant)
                                <option value="{{ $plant->id }}" {{ old('plant_id') == $plant->id ? 'selected' : '' }}>{{ $plant->name }}</option>
                            @endforeach
                        </select>
                        @error('plant_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="taskStatus" class="form-label">Status</label>
                        <select class="form-select @error('status') is-invalid @enderror" id="taskStatus" name="status" required>
                            <option value="to do" {{ old('status') == 'to do' ? 'selected' : '' }}>To Do</option>
                            <option value="doing" {{ old('status') == 'doing' ? 'selected' : '' }}>Doing</option>
                            <option value="done" {{ old('status') == 'done' ? 'selected' : '' }}>Done</option>
                        </select>
                        @error('status')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="taskDueDate" class="form-label">Due Date</label>
                        <input type="date" class="form-control @error('dueDate') is-invalid @enderror" id="taskDueDate" name="dueDate" value="{{ old('dueDate') }}" required>
                        @error('dueDate')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Add Task</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>






    <script>
     function showPlantDetails(image, name, description) {
    console.log("Image URL: ", image); // Debugging line
    const plantImage = document.getElementById('plantImage');
    plantImage.src = image;
    plantImage.style.display = 'block'; // Make sure the image is displayed
    document.getElementById('plantName').textContent = name;
    document.getElementById('plantDescription').textContent = description;

    // Show the modal
    var modal = new bootstrap.Modal(document.getElementById('plantDetailsModal'));
    modal.show();
}





        document.addEventListener('DOMContentLoaded', function () {
    @if ($errors->any())
        var myModal = new bootstrap.Modal(document.getElementById('addTaskModal'), {});
        myModal.show();
    @endif
});

        // Function to set today's date as the default value for the Due Date field
        function setDefaultDueDate() {
            const today = new Date().toISOString().split('T')[0]; // Get today's date in YYYY-MM-DD format
            document.getElementById('taskDueDate').value = today; // Set the input value
        }

        // Function to reset the Add Task modal
        function resetAddTaskModal() {
            document.getElementById('addTaskForm').reset(); // Reset the form
            document.getElementById('plantSelection').style.display = 'none'; // Hide plant selection by default
            setDefaultDueDate(); // Set today's date as default
        }

        // Event listener for the Add Task modal show event
        const addTaskModal = document.getElementById('addTaskModal');
        if (addTaskModal) {
            addTaskModal.addEventListener('show.bs.modal', function() {
                resetAddTaskModal(); // Reset the modal when shown

                // Attach the task type change listener here to ensure it's active when modal opens
                document.getElementById('taskType').addEventListener('change', togglePlantSelection);
            });

            // Event listener for the form submission in the Add Task modal
            addTaskModal.querySelector('form').addEventListener('submit', function (event) {
                const taskType = document.getElementById('taskType').value;
                const plantId = document.getElementById('taskPlant').value;

                // Check if the task type is plant-based and if a related plant is selected
                if (taskType === 'plant-based' && !plantId) {
                    event.preventDefault(); // Prevent form submission
                    alert('Please select a related plant for the plant-based task.');
                }
            });
        }

        // Event listeners for editing tasks
        document.querySelectorAll('.editTaskBtn').forEach(button => {
            button.addEventListener('click', function () {
                // Fetch the task data from the button's data attributes
                const id = this.getAttribute('data-id');
                const name = this.getAttribute('data-name');
                const description = this.getAttribute('data-description');
                const status = this.getAttribute('data-status');
                const dueDate = this.getAttribute('data-duedate'); // Ensure this is formatted correctly

                // Populate the form fields with the task data
                document.getElementById('editTaskName').value = name || '';
                document.getElementById('editTaskDescription').value = description || '';
                document.getElementById('editTaskStatus').value = status || 'to do';
                document.getElementById('editTaskDueDate').value = dueDate || ''; // This should reference the correct ID
                console.log("Due Date:", dueDate); // Check the format in the console

                // Set the form action to the correct route with the task ID
                document.getElementById('editTaskForm').action = `/tasks/${id}`;
            });
        });

        // Function to toggle plant selection visibility based on task type
        function togglePlantSelection() {
            const taskType = document.getElementById('taskType').value;
            const plantSelection = document.getElementById('plantSelection');
            if (taskType === 'plant-based') {
                plantSelection.style.display = 'block';
            } else {
                plantSelection.style.display = 'none';
                document.getElementById('taskPlant').selectedIndex = 0; // Reset plant selection
            }
        }

        // Initialize default due date when the script runs
        window.onload = setDefaultDueDate;


    </script>

@endsection
