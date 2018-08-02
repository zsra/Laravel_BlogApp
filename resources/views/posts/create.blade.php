@extends('layouts.app')

@section('content')

   <h2 class="create-title">Create Post</h2>
   <div class="container">
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}

    <div class="form-group">
        
        {{Form::label('title', 'Title', ['class' => 'title-label'])}}
        {{Form::text('title', '', ['class' => 'form-control', 'placehorder' => 'Title'])}}


    </div>
    <div class="form-group">
        
        {{Form::label('body', 'Post text', ['class' => 'title-label'])}}
        {{Form::textarea('body', '', [ 'id' => 'article-ckeditor', 'class' => 'form-control', 'placehorder' => 'Text'])}}

    </div>

    {{Form::submit('Submit', ['class' => 'btn btn-light btn-create-submit'])}}

   {!! Form::close() !!}
   </div>
   

@endsection