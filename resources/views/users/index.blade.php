@extends('layouts.app')
@section('content')
    <h1 class="my-4">Users Overview</h1>
    
    @if(count($data)>0)
        <div class="row">
        @foreach($data as $key => $value)
        <div class="col-4">
            <!-- Blog Post -->
            <div class="card mb-4">
                <img class="card-img-top" src="" alt="Card image cap">
                <div class="card-body">
                    <h2 class="card-title">{{$key}}</h2>
                    <h3>Recent Posts</h3>
                    @foreach($value as $sval)
                <h4 class="card-text"><a href="/posts/{{$sval->id}}">{{$sval->title}}</a></h4>
                <div class="text-muted">Written on {{$sval->created_at}}</div>
                    @endforeach
                
                </div>
                <div class="card-footer text-muted">
                    <a href="/users/" class="btn btn-primary">Check out their blog!</a>
                </div>
            </div>
        </div>
        @endforeach
    @else
        <p>No posts found.</p>
    @endif
    
@endsection
