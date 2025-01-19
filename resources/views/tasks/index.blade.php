<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>task index</title>
</head>

<body>
    <h1>タスク一覧</h1>


    @foreach ($tasks as $task)
        <!-- // リンク先をidで取得し名前で出力 -->
        <a href="/tasks/{{ $task->id }}">{{ $task->title }}</a><br>
    @endforeach



    <h1>新規タスク登録</h1>
    <form action="{{ route('tasks.store') }}" method="post">
        @csrf
        <p>
            <label for="title">タイトル</label><br>
            <input type="text" name="title" id="title">
        </p>
        <p>
            <label for="body">本文</label><br>
            <textarea name="body" class="body" id="body"></textarea>
        </p>
        <button onclick='location.href="{{ route("tasks.create") }}"'>Create Task</button>
        {{-- <input type="submit" value="Create Task "> --}}
    </form>

</body>

</html>
