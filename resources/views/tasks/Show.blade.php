@extends('tasks.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
    <div class="pull-left">
        <h2 class="T1">Show Task</h2>
    </div>
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('tasks.index') }}">Back</a>
    </div>
    </div>
</div>

@if($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input. <br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>

        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('tasks.update',$task->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                <input type="text" name= "title" value="{{ $task->title }}" class="form-control" placeholder="title">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description</strong>
                <input type="text" name= "description" value="{{ $task->description }}" class="form-control" placeholder="description">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Due Date</strong>
                <input type="date" name= "due_date" value="{{ $task->due_date }}" class="form-control" placeholder="due date">
            </div>
        </div>

        <!-- <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div> -->
    </div>
</form>
@endsection

<style>

.T1{
    margin: 10px 20px 10px 500px !important;
    
}
.btn-primary{
    background-color: #2928a7 !important;
    margin: 0px 0px 20px 0px;
    border-color: #2928a7 !important;
    height: 50px !important;
    width: 150px !important;
    font-weight: 700 !important;  
      }
</style>