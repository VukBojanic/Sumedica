@extends('layouts.app')

@section('content')
  <h3>{{$post->title}}</h3>
  <div>
    {{$post->body}}
  </div>
  <a href="/posts" class="btn btn-default">Go Back</a>
  <hr>
  <small>Writter on {{$post->created_at}}</small>
@endsection