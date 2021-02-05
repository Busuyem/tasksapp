@extends('layouts.app')

@section('content')
    
<div class="jumbotron text-center">
    <h1 class="display-4">Tasks Management System</h1>
    <p class="lead">Login to Create Your Task for Today</p>
    <hr class="my-4">

   @if(! auth()->user())
      <a class="btn btn-primary btn-lg" href="{{ route('login') }}" role="button">Login to your account</a>
      <a class="btn btn-info btn-lg" href="{{ route('register') }}" role="button">Register here if you don't have account</a>
    @else
      <a href="{{ route('home') }}" class="btn btn-dark">Back to your Dashboard</a>
    @endif
  </div>

  @endsection