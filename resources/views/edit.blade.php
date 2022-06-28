<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ToDo App</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <header class="flex justify-between bg-slate-900 text-gray-600 p-2.5">
        <h2 class="text-2xl"><a href="{{route('index')}}">ToDo App</a></h2>
        <div class="flex">
            <p>Hello</p>
            <p><a href="">Logout</a></p>
        </div>
    </header>

    <main class="flex justify-around">
        <section class="w-2/6 border-solid border border-gray-400 rounded-md ml-8 my-8">
            <h3 class="bg-gray-300 p-2">タスクを編集する
            </h3>
            <form method="post" action="{{route('tasks.update', ['id'=>$task->id])}}">
                @csrf
                @method('PATCH')
                <div class="p-2">
                    <p>タイトル</p>
                    <input type="text" name="title" value="{{$task->title}}" class="border-solid border border-gray-400 rounded-md w-full p-1">
                    <p>状態</p>
                    <select name="state" class="border-solid border border-gray-400 rounded-md w-full p-1">
                        <option value="{{$task->state}}" selected hidden>{{$task->state}}</option>
                        <option value="未着手">未着手</option>
                        <option value="着手中">着手中</option>
                        <option value="完了">完了</option>
                    </select>
                    {{-- <input type="text" name="state" value="{{$task->state}}" class="border-solid border border-gray-400 rounded-md w-full p-1"> --}}
                    <p>期限</p>
                    <input type="date" name="limit" value="{{$task->limit}}" class="border-solid border border-gray-400 rounded-md w-full p-1">
                    <div class="flex flex-row-reverse">
                        <input type="submit" value="送信" class="text-white bg-blue-500 rounded-md p-1 my-3">
                    </div>
                </div>
            </form>
        </section>

    </main>


</body>
</html>
