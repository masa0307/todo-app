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

    <main class="flex justify-around items-start">
        <section class="w-2/6 border-solid border border-gray-400 rounded-md ml-8 my-8">
            <h3 class="bg-gray-300 p-2">フォルダ</h3>
            <div class="p-2.5"><p class="p-2 text-center"><a href="{{ route('folders') }}" class="block py-2 border-gray-400 border-solid border rounded-md">フォルダを追加する</a></p></div>
            @foreach($folders as $folder)
                <ul>
                    @if ($id==$folder->id)
                        <li class="border-solid border-t border-gray-400 bg-blue-400 text-white"><a class="block px-4 py-2" href="{{route('tasks.show', ['id'=>$folder->id])}}">{{$folder->name}}</a></li>
                    @else
                        <li class="border-solid border-t border-gray-400 hover:bg-blue-400 hover:text-white"><a class="block px-4 py-2" href="{{route('tasks.show', ['id'=>$folder->id])}}">{{$folder->name}}</a></li>
                    @endif
                </ul>
            @endforeach
        </section>
        <section  class="w-4/6 border-solid border border-gray-400 rounded-md mx-8 my-8">
            <h3 class="bg-gray-300 p-2">タスク</h3>
            <div class="p-2.5"><p class="p-2 text-center"><a href="{{ route('tasks', ['id'=>$id]) }}" class="block py-2 border-gray-400 border-solid border rounded-md">タスクを追加する</a></p></div>
            <table class="block border-solid border-t border-gray-400">
                <thead class="block ">
                    <tr class="flex border-solid border-b border-gray-400 px-4 py-2">
                        <th class="w-8/12 text-left">タイトル</th>
                        <th class="w-1/12 text-left">状態</th>
                        <th class="w-2/12 text-left">期限</th>
                    </tr>
                </thead>
                    <tbody class="block">
                        @foreach($tasks as $task)
                            <tr class="flex border-solid border-t border-gray-400 px-4 py-2">
                                <td class="w-8/12">{{$task->title}}</td>
                                <td class="w-1/12">{{$task->state}}</td>
                                <td class="w-2/12">{{$task->limit}}</td>
                                <td class="w-1/12"><a href="{{route('tasks.edit',['id'=>$task->id])}}" class="text-blue-400">編集</a></td>
                            </tr>
                        @endforeach
                    </tbody>
            </table>
        </section>
    </main>
</body>
</html>
