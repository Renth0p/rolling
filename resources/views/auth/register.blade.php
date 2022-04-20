@extends('layouts.app')
@section('content')
    <div class="wrapper">
        @include('pages/header')
        <form action="{{ route("register_process") }}" method="post">
            @csrf
            <label>Регистрация</label>
            <input type="text" name="name" placeholder="Login" class="border-gray-800 @error('name') border-red-500 @enderror"><br>

            @error('name')
                <p class="text-red-500">{{ $message }}</p>
            @enderror
            <input type="email" name="email" placeholder="Email" class="@error('email') border-red-500 @enderror"><br>
            @error('email')
                <p class="text-red-500">{{ $message }}</p>
            @enderror
            <input type="password" name="password" placeholder="Password" class="@error('password') border-red-500 @enderror"><br>
            @error('password')
                <p class="text-red-500">{{ $message }}</p>
            @enderror
            <input type="password" name="password_confirmation" placeholder="Password confirm" class="@error('password_confirmation') border-red-500 @enderror"><br>
            @error('password_confirmation')
            <p class="text-red-500">{{ $message }}</p>
            @enderror
            <button type="submit">Войти</button>
            <p>
                У вас уже есть аккаунт? - <a href="{{route("login")}}">Авторизируйтесь!</a>
            </p>
        </form>
        @include('pages/footer')
    </div>
@endsection
