<!DOCTYPE html>
<html lang="en">
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
        <div class="flex pr-4 pt-0.5">
            <p class="pr-2"><a href="">Login</p>
            <p><a href="{{route('users.register')}}">Register</a></p>
        </div>
    </header>

    <main class="flex justify-around">
        <section class="w-2/6 border-solid border border-gray-400 rounded-md ml-8 my-8">
            <h3 class="bg-gray-300 p-2">会員登録
            </h3>
            <form method="post" action="{{route("users.create")}}">
                @csrf
                <div class="p-2">
                    <p>メールアドレス</p>
                    @error('email')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror
                    <input type="email" name="email" class="border-solid border border-gray-400 rounded-md w-full p-1" value="{{old('email')}}">
                    <p>ユーザー名</p>
                    @error('name')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror
                    <input type="text" name="name" class="border-solid border border-gray-400 rounded-md w-full p-1"  value="{{old('name')}}">
                    <p>パスワード</p>
                    @error('password')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror
                    <input type="password" name="password" class="border-solid border border-gray-400 rounded-md w-full p-1">
                    <p>パスワード（確認）</p>
                    @error('password_confirmation')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror
                    <input type="password" name="password_confirmation" class="border-solid border border-gray-400 rounded-md w-full p-1">
                    <div class="flex flex-row-reverse">
                        <input type="submit" value="送信" class="text-white bg-blue-500 rounded-md p-1 my-3">
                    </div>
                </div>
            </form>

        </section>

    </main>


</body>
</html>
