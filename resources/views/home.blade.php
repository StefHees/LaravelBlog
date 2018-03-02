@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <nav class="navbar navbar-inverse" style="background-color: #dbdbdb;border-radius:3px;">
                        <a href="/posts/create" class="btn btn-primary">Create Post</a>
                    </nav>
                    <h3>Your Blog Posts</h3>
                    <table class="table table-striped">
                        <tr>
                            <th>Title</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach($posts as $post)
                            <tr>
                                <th>{{$post->title}}</th>
                                <th><a href="/posts/{{$post->id}}/edit" class="btn btn-warning">Edit</a></th>
                                <th><a href="/posts/{{$post->id}}/delete" class="btn btn-danger">Delete</a></th>
                            </tr>
                        @endforeach
                        @forelse($posts as $post)
                        @empty
                            <tr>
                                <td>No posts found.</td>
                            </tr>
                        @endforelse
                            

                        

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
