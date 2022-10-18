<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>article edit</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>投稿論文編集</h1>
    <!-- 更新先はarticlesのidにしないと増える php artisan rote:listで確認① -->
    <form action="/articles/{{ $articles->id }}" method="post">
        @csrf
        @method('PATCH')
        <p>
            <label for="title">投稿タイトル</label><br>
            <input type="text" name="title" value="{{ $articles->title }}">
        </p>
        <p>
            <label for="body">本文</label><br>
            <textarea name="body" class="body">{{ $articles->body }}</textarea>
        </p>

        <input type="submit" value="更新">
    </form>
</body>
</html>
