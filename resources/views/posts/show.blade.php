<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    
    <body>
        @extends('layouts.app')
        
        @section('content')
        {{Auth::user()->name}}
        
        <h1 class="title">
            {{ $post->title }}
        </h1>
        <a class='category'>
            <a href="/categories/{{ $post->category->id }}">{{ $post->category->category }}</a>
        </a>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
        @endsection
    </body>
    
</html>