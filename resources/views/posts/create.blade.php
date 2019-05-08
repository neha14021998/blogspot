@extends('layouts.app')
@section('content')
    <h1>Create Post</h1> 
    
        {!! Form::open(['action' =>'PostsController@store', 'method'=>'POST', 'enctype'=>'multipart/form-data'])!!}
        <div  style="width:50%; margin-left:300px; align:center; border:1px black solid;">
            {{Form::label('title','Title')}}
            {{Form::text('title','',['class'=>'form-control', 'placeholder'=>'Enter Title'])}}
            {{Form::label('body','Body')}}
            {{Form::textarea('body','',['id'=> 'article-ckeditor','class'=>'form-control', 'placeholder'=>'Enter Body'])}}
            <div class="form-group">
                {{Form::file('cover_image')}}
            </div>
            {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
             {!!Form::close()!!}
    </div>    
@endsection
