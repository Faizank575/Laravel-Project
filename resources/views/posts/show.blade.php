@extends('layout.app')


@section('content')
<a class="btn btn-dark p-1 m-3" href="/posts">Go back</a>
<div class="card p-4 m-5">
<h1>{{$post->title}}</h1>
<small>Written on {{$post->created_at}}</small>
    <div>
    {!!$post->body!!}  
    </div>
</div>
@endsection