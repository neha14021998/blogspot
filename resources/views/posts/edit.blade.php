@extends('layouts.app')
@section('content')
    <h1>Create Post</h1> 
    
        {!! Form::open(['action' =>['PostsController@update',$post->id], 'method'=>'POST','enctype'=>'multipart/form-data' ])!!}
        <div  style="width:50%; margin-left:300px; align:center; border:1px black solid;">
            {{Form::label('title','Title')}}
            {{Form::text('title','$post->title',['class'=>'form-control', 'placeholder'=>'Enter Title'])}}
            {{Form::label('body','Body')}}
            {{Form::textarea('body','$post->body',['id'=> 'article-ckeditor','class'=>'form-control', 'placeholder'=>'Enter Body'])}}
            {{Form::hidden('_method','PUT')}} 
            <div class="form-group">
                    {{Form::file('cover_image')}}
                </div>
            {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
            {!!Form::close()!!}
    </div>    
@endsection
