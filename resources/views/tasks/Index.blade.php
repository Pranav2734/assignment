@extends('tasks.layout')

@section('content')
<div class="pull-left">
    <h1 class="T1">Task Management System</h1>
</div>

<div class="row">
    <div class="col-lg-12 margin-tb">
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


<style>
.btn-success{
    background-color: #2928a7 !important;
    margin: 0px 0px 20px 1300px;
    border-color: #2928a7 !important;
    height: 40px !important;
    width: 200px !important;
    font-weight: 700 !important;    }
.T1{
    margin: 10px 20px 10px 500px !important;
    
}
</style>