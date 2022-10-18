<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>article show</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>論文詳細</h1>
    <p>タイトル：{{ $article->title }}</p>
    <p>{!! nl2br(e($article->body)) !!}</p>

    <div class="button-group">
    <!-- 一覧画面へジャンプする -->
        {{-- <button onclick="location.href='/articles'">一覧へ戻る</button>
        <!-- $articleのidを元に編集ページへ遷移する -->
        <button onclick="location.href='/articles/{{ $article->id }}'">編集する</button>
        <form action="/articles/{{ $article->id }}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};">
        </form> --}}
        <form action="{{route('articles.index')}}">
        <button type="submit">一覧画面</button>
    </form>
    <form action="{{route('articles.edit', $article)}}">
        <button type="submit">編集する</button>
    </form>
    <form action="{{ route('articles.destroy', $article) }}" method="post" name="form1" style="display: inline">
        @csrf
        @method('delete')
        <button type="submit" onclick="if(!confirm('削除していいですか?')){return false}">削除する</button>
    </form>
    </div>
</body>
</html>
