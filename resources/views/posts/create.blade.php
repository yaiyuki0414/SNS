<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Freson</title>
    </head>
    <body>
        @extends('layouts.app')
        
        @section('content')
        {{Auth::user()->name}}
        <h1>Freson</h1>

        
        <form action="/posts" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="title">
                <h2>Title</h2>
                <input type="text" name="title" placeholder="タイトル"/>
            </div>
            
            <div class="category">
                <label for="category-select">Choose a category:</label>
                <select name="category">
                    <option value="">--Please choose an option--</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->category }}</option>
                    @endforeach
                </select>
            </div>
            
            <!-- アップロードフォームの作成 -->
            <input type="file" name="image">
            {{ csrf_field() }}
            <input type="submit" value="アップロード">
            
        </form>
        
        <div class="back">[<a href="/">back</a>]</div>
        
        @endsection
    </body>
</html>