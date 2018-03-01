@extends('layouts.app')
@section('content')
    <h2>{{$title}}</h2>
    <ul class="list-group">
    @foreach($services as $service)
        <li class="list-group-item">{{ $service }}</li>
    @endforeach
    </ul>
@endsection