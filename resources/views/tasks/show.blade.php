<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>task show</title>
</head>

<body>
    <h1>タスク詳細</h1>
    <p>【タイトル】</p>
    <p>{{ $task->title }}</p>
    <p>【内容】</p>
    <p>{{ $task->body }}</p>
    <input type="button" onclick="location.href='{{ route('tasks.index') }}'" value="一覧へ戻る">
    <input type="button" onclick="location.href='/tasks'" value="編集する">
    <input type="button" onclick="location.href='/tasks'" value="削除する">
</body>

</html>
