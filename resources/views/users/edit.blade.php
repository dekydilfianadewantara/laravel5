@extends('layouts.main')
@section('content')
    @if(count($errors))
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif
    <form action="{{ route('user.update', $user->id) }}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="_method" value="PUT">
        <div class="input-field">
            <label>Name</label>
            <input type="text" name="name" value="{{ $user->name }}">
        </div>
        <div class="input-field">
            <label>Email</label>
            <input type="text" name="email" value="{{ $user->email }}">
        </div>
        <div class="form-group">
            <button type="submit" class="btn">Update</button>
        </div>
    </form>
@endsection
