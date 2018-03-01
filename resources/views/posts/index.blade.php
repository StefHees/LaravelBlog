@extends('layouts.app')
@section('content')
    <h1>Posts</h1>
    @if(count($posts)>0)
        @foreach($posts as $post)
        <div class="card" style="width: 20rem;">
            <img class="card-img-top" src="/storage/cover_images/{{$post->cover_image}}" alt="Card image cap">
            <div class="card-block">
                <h4 class="card-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h4>
                <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                <p class="card-text">{!!$post->body!!}</p>
                <a href="/posts/{{$post->id}}" class="btn btn-primary">Check it out</a>
            </div>
        </div>
        @endforeach
    @else
        <p>No posts found.</p>
    @endif
    {{$posts->links()}}
@endsection