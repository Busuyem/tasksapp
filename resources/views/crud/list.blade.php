@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(auth()->user()->email == "admin@gmail.com")

            @include('inc.message')
           <div>
               <a href="{{ route('task.create') }}" class="btn btn-info mb-2">Create a task</a>
           </div>
            <div class="card">
                <div class="card-header"><h4>List of your created task(s)</h4></div>

                <div class="card-body">

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">S/N</th>
                                <th scope="col">Task</th>
                                <th scope="col">Actions</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($tasks as $key => $task)
                            <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td>{{ $task->task }}</td>
                                <td>
                                    <div class="d-flex flex-row">

                                        <a href="{{ route('task.edit', $task) }}" class="btn btn-primary">Edit</a>|

                                        <form action="{{ route('task.destroy', $task) }}" method="post">
                                            @csrf
                                            @method('DELETE')
    
                                            <button class="btn btn-danger">Delete</button>
                                        </form>

                                    </div>
                                   
                                </td>
                                
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $tasks->links() }}
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
