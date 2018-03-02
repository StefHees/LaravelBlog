@extends('layouts.app')
@section('content')
    <h1 class="my-4">Users Overview</h1>
    
    @if(count($users)>0)
        <div class="row">
        @foreach($users as $user)
        <div class="col-4">
            <!-- Blog Post -->
            <div class="card mb-4">
                <img class="card-img-top" src="/storage/profile_images/{{$user->profile_image}}" alt="Card image cap">
                <div class="card-body">
                    <h2 class="card-title">{{$user->name}}</h2>
                    <h3>Recent Posts</h3>
                    @foreach($user->posts as $post)
                        <h4 class="card-text"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h4>
                        <div class="text-muted">Written on {{$post->created_at}}</div>
                    @endforeach
                </div>
                <div class="card-footer text-muted">
                    <a href="/users/{{$user->id}}" class="btn btn-primary">Check out their blog!</a>
                </div>
            </div>
        </div>
        @endforeach
    @else
        <p>No posts found.</p>
    @endif
    
@endsection
