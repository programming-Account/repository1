<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charser="utf-8">
        <title>Blog</title>
        
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
        
    </head>
    <body class="antialiased">
        <h1>編集ページ</h1>
        <form action="/posts/{{ $post->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="title">
                <h2>title：</h2>
                <input type="text" name="post[title]" placeholder="タイトル" value="{{ $post->title }}">
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class="message">
                <h2>body：</h2>
                <textarea name="post[body]"placeholder="今日も一日お疲れ様です。" >{{ $post->body }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <div>
                <input type="submit" value="編集する">
            </div>
            <div>
                <a href="/posts/{{ $post->id }}">記事詳細画面へ</a>
            </div>
        </form>
        
        
        
    </body>