@extends('layouts.main')
@section('content')
    @if(count($errors))
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif
<form method="POST" action="{{ route('user.store') }}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
 <div class="form-group">
    <label for="exampleInputName1">Name</label>
    <input type="text" class="form-control" name="name" placeholder="Name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="email" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-default">Create</button>
</form>
@endsection



