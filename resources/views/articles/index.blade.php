<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>論文一覧</h1>
    @foreach ($articles as $article)
    <li><a href="/articles/{{ $article->id }}">{{ $article->title }}</a></li>
    @endforeach

    <button><a href="/articles/create">新規論文投稿</a></button>
</body>

</html>