@extends('layouts.app')

@section('content')

    @if(count($posts) > 0) 

        @foreach($posts as $post)

            <div class="card p-3 post-body">
                <h3><a href="{{route('posts.show', $post->id)}}">{{$post->title}}</a></h3>
                <small>Writted on {{$post->created_at}}</small><hr>
                <div>{{$post->body}}</div>
            </div>

        @endforeach

    @else <p>Post not found :(</p>

    @endif

@endsection