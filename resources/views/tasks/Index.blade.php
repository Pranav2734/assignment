@extends('tasks.layout')

@section('content')
<div class="container">
<div class="pull-left">
    <h1 class="T1">Task Management System</h1>
</div>

<div class="row mt-5">
    <form action="" class="col-sm-8">
         <div class="form-group" style="display:flex;">
            <input type="search" name="search" id="" class="form-control" placeholder="Search by Title" value="{{$search}}">
            <button class="btn btn-primary ml-2">Search</button>

        </div>
    </form>
    <div class="col-sm-4">
        <div class="pull-left">
            <a class="btn btn-success" href="{{ route('tasks.create') }}">Create New Task</a>
        </div>
    </div>
</div>

@if ($message= Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>

</div>

@endif

<table class= "table table-bordered">
    <tr>
        <th>SrNo</th>
        <th>Title</th>
        <th>Description</th>
        <th>Due Date</th>
        <th width="280px">Action</th>
    </tr>

    @foreach($tasks as $task)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $task->title }}</td>
        <td>{{ $task->description }}</td>
        <td>{{ $task->due_date }}</td>
<td>
    <form action="{{ route('tasks.destroy',$task->id) }}" method="POST">
        <a class="btn btn-info" href="{{ route('tasks.show',$task->id) }}">Show</a>
        <a class="btn btn-primary" href="{{ route('tasks.edit',$task->id) }}">Edit</a>

        @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-danger">Delete</button>

    </form>
</td>
    </tr>

    @endforeach
</table>

{{$tasks->links()}}

</div>


<style>
.btn-success{
    background-color: #2928a7 !important;
    margin: 0px 0px 20px 0px;
    border-color: #2928a7 !important;
    height: 40px !important;
    width: 200px !important;
    font-weight: 700 !important;    }
.T1{
    margin: 10px 20px 10px 300px !important;
    
}
/* Pagination Styling */
.pagination {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 20px;
}

.pagination .page-item {
    list-style: none;
    margin: 0 5px;
}

.pagination .page-link {
    display: block;
    padding: 8px 12px;
    text-align: center;
    border: 1px solid #ddd;
    color: #333;
    text-decoration: none;
    border-radius: 4px;
}

.pagination .page-link:hover {
    background-color: #f8f9fa;
}

.pagination .page-item.active .page-link {
    background-color: #007bff;
    color: #fff;
    border-color: #007bff;
}

.pagination .page-item.disabled .page-link {
    color: #6c757d;
    pointer-events: none;
    cursor: not-allowed;
}

.pagination .page-link:focus {
    box-shadow: 0 0 0 2px rgba(0, 123, 255, 0.25);
}

</style>