<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
        <title>Freson</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    
    <body>
        @extends('layouts.app')
        
        @section('content')
        {{Auth::user()->name}}
        <h1>Freson</h1>
        
        <p class='create'>[<a href='/posts/create'>create</a>]</p>
        
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    
                    <h6 class='title'>
                        <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                    </h6>
                    
                    <h6 class='category'>
                        <a href="/categories/{{ $post->category->id }}">{{ $post->category->category }}</a>
                    </h6>
                    
                    <h6 class='user'>
                        <a href="">{{ $post->user->name }}</a>
                    </h6>
                    
                    @if ($post->image_path)​
                        <!-- 画像を表示 -->​
                        <img src="{{ $post->image_path }}">​
                    @endif​
                </div>
            @endforeach
        </div>
        
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
        @endsection

        
    </body>
</html>
