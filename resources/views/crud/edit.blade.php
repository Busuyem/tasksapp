@extends('layouts.app')


@section('content')

    <div class="container col-md-6 offset-3">
        <form class="form" action="{{ route('task.update', $task) }}" method="post">
            @csrf
            @method('PUT')
            <h5>Create your task now</h5>
            <div class="form-group mb-2">
              <input type="text" name="task" value="{{ $task->task }}" class="form-control @error('task') is-invalid @enderror" placeholder="What's your task today?">
            </div>
            @error('task')
              <div class="text text-danger">{{ $message }}</div>
            @enderror
            <button type="submit" class="btn btn-primary mb-2">Save your task</button>
          </form>
    </div>
    
@endsection