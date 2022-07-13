@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif



                   <div class="panel-body">

                        <a href="/posts/create" class="btn btn-primary">Create Post</a>
                        <h3>Your Posts</h3>

                        @if (count($posts) > 0)
                            
                        
                            <table class="table table-striped">
                                <tr>
                                    <td>title</td>
                                    <td></td>
                                    <td></td>
                                
                                </tr>

                                @foreach ($posts as $post)
                                <tr>
                                    <td>{{$post->title}}</td>
                                    <td><a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a></td>
                                    
                                    <td>

                                        <!--laravel html form-->
                                    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}

                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                    {!!Form::close()!!}

                                    </td>
                                
                                </tr>
                                @endforeach
                            </table>
                            @else
                            <p>No posts for current user</p>
                        @endif    
                   </div>
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
