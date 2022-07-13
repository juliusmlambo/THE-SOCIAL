
@extends('layouts.app')<!--we extend the app blade that is within layouts folder-->    

@section('content')
<h1>{{$title}}</h1> 
@if(count($services) > 0)<!--to determine if there's any service-->
    <ul class="list-group">
    @foreach ($services as $service)<!--for each item in the service-->
        <li class="list-group-item">{{$service}}</li><!--display each service-->
    @endforeach
    </ul>


@endif
@endsection