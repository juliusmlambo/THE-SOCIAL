@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>

    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' =>'POST']) !!}
    <div>
        {{form::label('title', 'Title')}}
        {{form::text('title', $post->title, ['class' => 'form-group', 'placeholder' => 'Title'])}}
    </div>
<br />
    <div>
        {{form::label('Body', 'Body')}}
        {{form::textarea('body', $post->body, ['class' => 'form-group', 'placeholder' => 'Body text'])}}
    </div>

    <div>
        {{Form::hidden('_method', 'PUT')}}
        {{form::submit('Submit', ['class' => 'btn btn-primary'])}}

    </div>
    {!! Form::close() !!}
@endsection
