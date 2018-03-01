@extends('layouts.app')
@section('content')
    <h1 class="my-4">Blog Posts</h1>
    @if(count($posts)>0)
        @foreach($posts as $post)
    <!-- Blog Post -->
        <div class="card mb-4">
            <img class="card-img-top" src="/storage/cover_images/{{$post->cover_image}}" alt="Card image cap">
            <div class="card-body">
                <h2 class="card-title">{{$post->title}}</h2>
                <p class="card-text">{!!$post->body!!}</p>
                <a href="/posts/{{$post->id}}" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
                Posted on {{$post->created_at}} by {{$post->user->name}}
            </div>
        </div>
        @endforeach
    @else
        <p>No posts found.</p>
    @endif
    {{$posts->links()}}
@endsection



