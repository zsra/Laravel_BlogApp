@extends('layouts.app')

@section('content')

<a href="{{route('posts.index')}}" class="btn btn-outline-primary btn-custom">
    &#8630;
</a>

<div class="card p-3 post-body">

    <h2>{{$post->title}}</h2>

    <small>Writted on {{$post->created_at}}</small><hr>
    <div>{{$post->body}}</div>

</div>



@endsection