<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charser="utf-8">
        <title>Blog</title>
        
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
        
    </head>
    <body class="antialiased">
        <h1>Blog Name</h1>
        <form action="/posts" method="POST">
            @csrf
            <div class="title">
                <h2>title：</h2>
                <input type="text" name="post[title]" placeholder="タイトル">
            </div>
            <div class="message">
                <h2>body：</h2>
                <textarea name="post[body]" placeholder="今日も一日おつかれさまでした。"></textarea>
            </div>
            <div>
                <input type="submit" value="実行">
            </div>
            <div>
                <a href="/">記事一覧へ</a>
            </div>
        </form>
        
        
        
    </body>