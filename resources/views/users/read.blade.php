@extends('layouts.main')
@section('content')
    <ul class="collection">
        @foreach($users as $user)
        <li class="collection-item" style="overflow: hidden;">
            <a href="{{ route('user.show', $user->id) }}">{{ $user->name }}</a>
            <form class="right" method="POST" action="{{ route('user.destroy', $user->id) }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="DELETE">
                <a href="{{ route('user.edit', $user->id) }}" class="btn waves-effect waves-light">Edit</a>
                <span class="glyphicon glyphicon-user"></span>

                <button type="submit" class="btn waves-effect waves-light">Delete</button>
            </form>
        </li>
        @endforeach
    </ul>
@endsection
