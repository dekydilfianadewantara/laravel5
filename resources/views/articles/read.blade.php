@extends('layouts.main')
@section('content')

<table class="table table-bordered">
  <tr>
    <td>No</td>
    <td>Name</td>
    <td>Email</td>
    <td>Order</td>
  </tr>
  @foreach($users as $key => $user)
  <tr> 
   <td>{{ $key + 1 }}</td>
   <td> <a href="{{ route('user.show', $user->id) }}">{{ $user->name }}</a></td>
   <td> {{ $user->email }}</td>
   <td><form class="left" method="POST" action="{{ route('user.destroy', $user->id) }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <a href="{{ route('user.edit', $user->id) }}" class="btn waves-effect waves-light"><span class="glyphicon glyphicon-pencil"></span></a>
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit" class="btn waves-effect waves-light"><span class="glyphicon glyphicon-trash"></button>
        </form>
  </td>
 </tr>
 @endforeach
</table>

<nav>
  <ul class="pagination">
    <li>
      <a href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
@endsection
