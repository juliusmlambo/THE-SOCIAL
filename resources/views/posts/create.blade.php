

@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>

    {!! Form::open(['action' => 'PostsController@store', 'method' =>'POST']) !!}
    <div>
        {{form::label('title', 'Title')}}
        {{form::text('title', '', ['class' => 'form-group', 'placeholder' => 'Title'])}}
    </div>
<br />
    <div>
        {{form::label('Body', 'Body')}}
        {{form::textarea('body', '', ['class' => 'form-group', 'placeholder' => 'Body text'])}}
    </div>

    <div>
        {{form::submit('Submit', ['class' => 'btn btn-primary'])}}

    </div>
    {!! Form::close() !!}
@endsection
