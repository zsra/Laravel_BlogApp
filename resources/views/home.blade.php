@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">               
                    <a href="{{url('posts/create')}}" class="btn btn-primary">Create Post</a>
                    <hr>
                    <h4>Your Posts</h4>
                    @if(count($posts) > 0)
                        @include('inc.ListPostsInHomePage')
                    @else
                        <p>You have no Post</p>
                   @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
