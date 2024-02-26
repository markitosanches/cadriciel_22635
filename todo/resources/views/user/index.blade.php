@extends('layouts.app')
@section('title', 'User list')
@section('content')
<h1 class="mt-5 mb-4">User List</h1>
    <div class="row justify-content-center mt-5 mb-5">
        <div class="col-md-12">
            <div class="card mt-3">
                <div class="card-header">
                    <h5 class="card-title">Users</h5>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <th>#</th>
                            <th>Name</th>
                            <th>Tasks</th>
                            <th>Edit</th>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <th>{{ $user->id }}</th>
                                <td>{{ $user->name }}</td>
                                <td>
                                    <ul>
                                    @forelse($user->tasks as $task)
                                        <li>{{ $task->title}}</li>
                                    @empty
                                        <li class="text-danger"> There are no tasks to list</li>
                                    @endforelse
                                    </ul>
                                </td>
                                <td><a href="" class="btn btn-sm btn-outline-primary">Edit</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $users }}
                </div>
            </div>

        </div>
    </div>  
@endsection