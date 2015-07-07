@extends('layouts.main')
@section('content')
    @if(count($errors))
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif
    <br>  
  <form method="POST" action="{{ route('user.store') }}">
  <div class="form-group">
    <label class="sr-only" for="email">Email address:</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label class="sr-only" for="password">Password:</label>
    <input type="password" class="form-control" id="pwd">
  </div>
 
  <button type="submit" class="btn btn-default">Login</button>
</form>
@endsection



