@extends('layouts.main')
@section('content')
    <h3>{{ $user->name }}</h3>
    <hr>
    <p>{{ $user->email }}</p>
@endsection
