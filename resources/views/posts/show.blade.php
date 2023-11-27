<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <x-app-layout>
        <x-slot name="header">
            詳細
        </x-slot>
        <body>
      　<h1 class="title">
            {{ $post->title }}
        </h1>
        
        <h2 class="body">
            {{ $post->body }}
        </h2>
        <div class="content">
            <a href="/posts/{{ $post->id }}/edit">edit</a>
        </div>
        <div class="category">
            <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
    </x-app-layout>
    
</html>