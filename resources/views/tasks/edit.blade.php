<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>task edit</title>
</head>

<body>
    <h1>タスク編集</h1>
    <!-- 更新先はmemosのidにしないと増える sail artisan rote:listで確認① -->
    <form action="{{ route('tasks.update', $task) }}" method="post">
        @csrf
        @method('PATCH')
        <p>
            <label for="title">タイトル</label><br>
            <input type="text" name="title" id="title" value="{{ $task->title }}">
        </p>
        <p>
            <label for="body">本文</label><br>

            <textarea name="body" class="body" id="body">{{ $task->body }}</textarea>

        </p>
        <input type="submit" value="更新">
        <input type="button" onclick="location.href='/tasks/{{ $task->id }}'" value="詳細へ戻る">
    </form>
</body>

</html>
