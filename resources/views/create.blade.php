@extends('layouts.app')

@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <title>Skate Spots</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        
    </head>
    <body>
        <h1>Skate Spots</h1>
        <form action="/posts" method="POST">
            {{ @csrf_field() }}
            </div>
            <div class="title">
                <h2>場所名</h2>
                <input type="text" name="post[title]" placeholder="◯◯公園"/>
            </div>
            <div class="type">
                <h2>種類</h2>
                <input type="text" name="post[type]" placeholder="レール、ボックス"/>
            </div>
            <div class="body">
                <h2>詳細</h2>
                <textarea name="post[body]" placeholder="路面が綺麗で滑りやすい。"></textarea>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class='back'>[<a href='/'>back</a>]</div>
    </body>
</html>
@endsection