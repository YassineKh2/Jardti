@extends('layouts.vertical', ['title' => 'Task List'])

@section('content')
    <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
        <div class="flex-grow-1">
            <h4 class="fs-18 fw-semibold m-0">Task List</h4>
        </div>

        <div class="text-end">
            <ol class="breadcrumb m-0 py-0">
                <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                <li class="breadcrumb-item active">Tasks</li>
            </ol>
        </div>
    </div>

    <!-- Button to trigger modal -->
    <div class="text-end mb-3">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addTaskModal">
            Add Task
        </button>
    </div>

    <!-- Hoverable Rows -->
    <div class="">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5 class="card-title mb-0">Tasks Table</h5>

                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addTaskModal">
                    <i data-feather="plus-circle" style="height: 20px; width: 20px; color:gray;"></i>
                </button>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
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
                                <td>{{ $task->name }}</td>
                                <td>{{ $task->description }}</td>
                                <td>
                                    @if($task->status === 'completed')
                                        <span class="badge bg-success">Completed</span>
                                    @else
                                        <span class="badge bg-warning">Pending</span>
                                    @endif
                                </td>
                                <td>{{ \Carbon\Carbon::parse($task->dueDate)->format('Y-m-d') }}</td>

                                  <td class="d-flex py-5 justify-content-center align-items-center gap-1">
                                    <!-- Edit Button -->
                                    <button type="button" class="btn btn-success btn-sm editTaskBtn" 
                                    data-id="{{ $task->id }}" 
                                    data-name="{{ $task->name }}"
                                    data-description="{{ $task->description }}"
                                    data-status="{{ $task->status }}"
                                    data-duedate="{{ $task->dueDate }}" 
                                    data-bs-toggle="modal" data-bs-target="#editTaskModal">
                                    <i data-feather="edit" style="height: 20px; width: 20px;"></i>
                                </button>
                                    <!-- Delete Form -->
                                    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this task?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="border-0 text-danger" style="background: none; padding: 0; cursor: pointer;">
                                            <i data-feather="trash" style="height: 20px; width: 20px;"></i>
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

    <!-- Modal for Adding a Task -->
    <div class="modal fade" id="addTaskModal" tabindex="-1" aria-labelledby="addTaskModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addTaskModalLabel">Add New Task</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Add Task Form -->
                    <form action="{{ route('tasks.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="taskName" class="form-label">Task Name</label>
                            <input type="text" class="form-control" id="taskName" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="taskDescription" class="form-label">Description</label>
                            <textarea class="form-control" id="taskDescription" name="description" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="taskStatus" class="form-label">Status</label>
                            <select class="form-select" id="taskStatus" name="status" required>
                                <option value="pending">Pending</option>
                                <option value="completed">Completed</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="taskDueDate" class="form-label">Due Date</label>
                            <input type="date" class="form-control" id="taskDueDate" name="dueDate" required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add Task</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


<!-- Modal for Editing a Task -->
<div class="modal fade" id="editTaskModal" tabindex="-1" aria-labelledby="editTaskModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editTaskModalLabel">Edit Task</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editTaskForm" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="editTaskName" class="form-label">Task Name</label>
                        <input type="text" class="form-control" id="editTaskName" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="editTaskDescription" class="form-label">Description</label>
                        <textarea class="form-control" id="editTaskDescription" name="description" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="editTaskStatus" class="form-label">Status</label>
                        <select class="form-select" id="editTaskStatus" name="status" required>
                            <option value="pending">Pending</option>
                            <option value="completed">Completed</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="editTaskDueDate" class="form-label">Due Date</label>
                        <input type="date" class="form-control" id="editTaskDueDate" name="dueDate" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update Task</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.querySelectorAll('.editTaskBtn').forEach(button => {
        button.addEventListener('click', function () {
            // Get the task data from data attributes
            const id = this.getAttribute('data-id');
            const name = this.getAttribute('data-name');
            const description = this.getAttribute('data-description');
            const status = this.getAttribute('data-status');
            const dueDate = this.getAttribute('data-duedate');

            // Populate the form fields with the task data
            document.getElementById('editTaskName').value = name;
            document.getElementById('editTaskDescription').value = description;
            document.getElementById('editTaskStatus').value = status;
            document.getElementById('editTaskDueDate').value = dueDate;

            // Update the form action to the specific task's update route
            const form = document.getElementById('editTaskForm');
            form.action = `/tasks/${id}`;
        });
    });
</script>

@endsection

    








    
