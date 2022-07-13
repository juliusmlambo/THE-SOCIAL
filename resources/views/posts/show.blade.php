
@extends('layouts.app')

@section('content')
    <a href="./create" class="btn btn-default">go back</a>
    
    <h1>{{$post->title}}</h1> 
    
    <div>
        {{$post->body}}
    </div>
    <hr>
    <small>Posted on{{$post->created_at}}</small>  
    <hr>
    <a href="./{{$post->id}}/edit" class="btn btn-default">Edit post</a>
    
    <!--laravel html form-->
    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}

    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}

@endsection