@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('inc.message')
           <div>
               @if(auth()->user()->email == "admin@gmail.com")
                    <a href="{{ route('task.create') }}" class="btn btn-info mb-2">Create a task</a>
               @endif
           </div>
            <div class="card">
                <div class="card-header"><h4>Your Dashboard</h4></div>

                <div class="card-body">
                    @if(auth()->user()->email == "admin@gmail.com")
                    <h6>View all Tasks</h6>
                        <a href="{{ route('task.index') }}" class="btn btn-primary">View Tasks</a>

                        @else
                            <h4>You're welcome {{ auth()->user()->name }}!</h4>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection