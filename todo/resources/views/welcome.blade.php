@extends('layouts.app')
@section('title', 'Welcome')
@section('content')
<div class="row justify-content-center my-5">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h1 class="display-6 text-center">Welcome to ToDo List App</h1>
            </div>
            <div class="card-body">
                <p>This is a simple ToDo list App build with Laravel and Bootstrap</p>
            </div>
            <div class="card-footer text-center">
                <a href="{{ route('task.index')}}" class="btn btn-primary">Go to ToDo List</a>
            </div>
        </div>
    </div>
</div>
@endsection
