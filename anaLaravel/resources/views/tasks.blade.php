@extends('layouts.app')

@section('l-wast')
<div class="container mt-5">
    <h2>My Task Manager</h2>

    <!-- Nav Tabs -->
    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item">
        <button class="nav-link active" id="list-tab" data-bs-toggle="tab" data-bs-target="#list" type="button">All Tasks</button>
      </li>
      <li class="nav-item">
        <button class="nav-link" id="add-tab" data-bs-toggle="tab" data-bs-target="#add" type="button">Add New Task</button>
      </li>
    </ul>

    <!-- Tab Content -->
    <div class="tab-content border p-3 bg-white" id="myTabContent">
      
      <!-- Tab 1: List of Tasks -->
      <div class="tab-pane fade show active" id="list" role="tabpanel">
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tasks as $task)
                <tr>
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->description }}</td>
                    <td>{{ $task->is_completed ? '✅ Done' : '⏳ Pending' }}</td>
                  <td>
    <form action="{{ url('/tasks/'.$task->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('واش متأكد؟')">
            Remove Task
        </button>
    </form>
</td>
                </tr>
                @endforeach
            </tbody>
        </table>
      </div>

      <!-- Tab 2: Add Task Form -->
      <div class="tab-pane fade" id="add" role="tabpanel">
        <form action="{{ url('/tasks') }}" method="POST" class="mt-3">
            @csrf
            <div class="mb-3">
                <label>Task Title</label>
                <input type="text" name="title" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Task description</label>
                <input type="text" name="description" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Save Task</button>
        </form>
      </div>

    </div>
</div>

<!-- Zid Bootstrap JS bach l-Tabs ikhdmo -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection