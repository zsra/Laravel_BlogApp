@extends('layouts.app')

@section('content')

<a href="{{route('posts.index')}}" class="btn btn-outline-primary btn-custom">
    &#8630;
</a>

<div class="card p-3 post-body">

    <h2>{{$post->title}}</h2>

    <small>Writted on {{$post->created_at}}</small>
    <hr>
    <div class="container">{!!$post->body!!}</div>
    <hr>
    <a href="{{$post->id}}/edit">
        Edit
    </a>

</div>

<div class="container">
    <div class="delete-button-container">
            {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!! Form::close() !!}
    </div>
    
</div>




@endsection