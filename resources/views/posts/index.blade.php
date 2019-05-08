@extends('layouts.app')
@section('content')
        <div style="height:600px; width:600px; border:10px; border-color:black; margin-left:200px; background-color:transparent">
        <h1>POST</h1>
        @if(count($posts)>0)
            @foreach($posts as $post)
                <div class="well">
                    <div class="row">
                        <div class="col-md-8 col-sm-4">
                                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                                <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                        </div>
                        <div class="col-md-8 col-sm-4">
                            <img src="/storage/cover_images/{{$post->cover_image}}" style="width:100%">
                        </div>
                </div>
            @endforeach
            {{$posts->links()}}
        @else
            <p>No posts found</p>
        @endif
    </div>
 @endsection
