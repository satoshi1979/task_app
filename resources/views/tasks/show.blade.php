<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>task show</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <h1>タスク詳細</h1>
    <p>【タイトル】</p>
    <p>{{ $task->title }}</p>
    <p>【内容】</p>
    <p>{{ $task->body }}</p>
    <div class="button-group">
        <button onclick="location.href='{{ route('tasks.index') }}'">一覧へ戻る</button>
        <button onclick="location.href='/tasks/{{ $task->id }}/edit'">編集する</button>
        <form action="{{ route('tasks.destroy', $task) }}" method="post">
            @csrf
            @method('DELETE')
            <button onclick="if(!confirm('削除しますか？')){return false};">削除する</button>
        </form>
    </div>


</body>

</html>
