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
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="form-group">
    <label class="sr-only" for="email">Name:</label>
    <input type="text" class="form-control" name="name" id="name">
  </div>
  <div class="form-group">
    <label class="sr-only" for="pwd">Email:</label>
    <input type="text" class="form-control" name="email" id="email">
  </div>
  <button type="submit" class="btn btn-default">Create</button>
</form>
@endsection



