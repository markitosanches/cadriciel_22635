
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mt-5 mb-4">Task List</h1>
        <div class="row">
            @foreach ($tasks as $task)
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">{{ $task->title }}</h5>
                            <p class="card-text">{{ $task->description }}</p>
                            <ul class="list-unstyled">
                                <li><strong>Completed:</strong> {{ $task->completed ? 'Yes' : 'No' }}</li>
                                <li><strong>Due Date:</strong> {{ $task->due_date }}</li>
                                <li><strong>Author:</strong> {{ $task->author }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection