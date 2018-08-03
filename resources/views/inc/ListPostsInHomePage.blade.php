<table class="table">
    <thead class="thead-dark">
        <tr>
            <th>Title</th>
            <th>Created at</th>
            <th>Edit</th>
            <th>Remove</th>
        </tr>
    </thead>
    @foreach($posts as $post)
    <tr>
        <td class="align-middle">{{$post->title}}</td>
        <td class="align-middle">{{$post->created_at}}</td>
        <td class="align-middle"><a href="/posts/{{$post->id}}/edit" class="btn btn-dark">Edit</a></td>
        <td class="align-middle"> 
            {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
</table>
