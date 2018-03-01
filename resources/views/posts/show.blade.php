@extends('layouts.app')
@section('content')
<a href="/posts" class="btn btn-primary">Back</a>
    <hr>
    <img src="/storage/cover_images/{{$post->cover_image}}">
    <h1>{{$post->title}}</h1>
    
    <div>
        {!! $post->body !!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user->id)
        <div class="row">
        <a href="/posts/{{$post->id}}/edit" style="margin:0px 10px;"class="btn btn-warning">Edit</a>
        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => ''])!!}
            {{ Form::hidden('_method', 'DELETE') }}
            {{ Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
        </div>
        @endif
    @endif
@endsection