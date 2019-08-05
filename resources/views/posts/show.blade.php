@extends('layout.app')


@section('content')
<a class="btn btn-dark p-1 m-3" href="/posts">Go back</a>
<div class="card p-4 m-5">
<h1>{{$post->title}}</h1>

    <div>
    {!!$post->body!!}  
    </div>
    <hr/>
    <small>Written on {{$post->created_at}}</small>
</div>
<a href="/posts/{{$post->id}}/edit" class="btn btn-dark float-right m-1">Edit</a>
{!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right m-1'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
{!!Form::close()!!}

@endsection