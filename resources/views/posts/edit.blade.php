@extends('layouts.app')

@section('content')

   <h2 class="create-title">Edit post</h2>
   <div class="container">
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'PUT']) !!}

    <div class="form-group">
        
        {{Form::label('title', 'Title', ['class' => 'title-label'])}}
        {{Form::text('title',  $post->title, ['class' => 'form-control', 'placehorder' => 'Title'])}}


    </div>
    <div class="form-group">
        
        {{Form::label('body', "", ['class' => 'title-label'])}}
        {{Form::textarea('body', $post->body, [ 'id' => 'article-ckeditor', 'class' => 'form-control', 'placehorder' => 'Text'])}}

    </div>

    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('Submit', ['class' => 'btn btn-light btn-create-submit'])}}

   {!! Form::close() !!}
   </div>
   

@endsection