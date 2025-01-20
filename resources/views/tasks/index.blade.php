<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>task index</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <h1>タスク一覧</h1>


    @foreach ($tasks as $task)
        <div class="button-group">
            <a href="/tasks/{{ $task->id }}">{{ $task->title }}</a>
            <form action="{{ route('tasks.destroy', $task) }}" method="post">
                @csrf
                @method('DELETE')
                <button onclick="if(!confirm('削除しますか？')){return false};">削除する</button>
            </form>
        </div>
    @endforeach

    <hr>

    <h1>新規タスク登録</h1>

    @if ($errors->any())
        <div class="error">
            <p>
                <b>{{ count($errors) }}件のエラーがあります。</b>
            </p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('tasks.store') }}" method="post">
        @csrf
        <p>
            <label for="title">タイトル</label><br>
            <input type="text" name="title" id="title" value="{{ old('title') }}">
        </p>
        <p>
            <label for="body">本文</label><br>
            <textarea name="body" class="body" id="body">{{ old('body') }}</textarea>
        </p>
        <button onclick="location.href='{{ route('tasks.create') }}'">Create Task</button>

    </form>

</body>

</html>
