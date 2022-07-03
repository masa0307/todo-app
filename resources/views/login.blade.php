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
<main>
    <div class="flex justify-around">
        <section class="w-2/6 border-solid border border-gray-400 rounded-md ml-8 my-8">
            <h3 class="bg-gray-300 p-2">ログイン
            </h3>
            <form method="post" action="{{route("login")}}">
                @csrf
                <div class="p-2">
                    @error('error')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror
                    <p class="pt-2">メールアドレス</p>
                    <input type="email" name="email" value="" class="border-solid border border-gray-400 rounded-md w-full p-1">
                    <p class="pt-2">パスワード</p>
                    <input type="password" name="password" value="" class="border-solid border border-gray-400 rounded-md w-full p-1">
                    <div class="flex flex-row-reverse">
                        <input type="submit" value="送信" class="text-white bg-blue-500 rounded-md p-1 my-3">
                    </div>
                </div>
            </form>
        </section>
    </div>

    <div class="flex justify-around">
        <a href="" class="text-blue-300">パスワードの変更はこちらから</a>
    </div>
    </main>
</body>
</html>
