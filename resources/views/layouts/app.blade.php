<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name', 'Social')}}</title>
        <link rel="stylesheet" href="css/app.css">
        <link rel="stylesheet" href="css/bootstrap.css">
    </head>


    <body>
        @include('inc.navbar')
        <div class="container">
            @include('inc.messages')
        @yield('content')
        </div>
    </body>
</html>
