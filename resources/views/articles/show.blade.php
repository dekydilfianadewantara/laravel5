@extends('layouts.main')
@section('content')
    <h3>{{ $article->name }}</h3>
    <hr>
    <p>{{ $article->email }}</p>
@endsection
