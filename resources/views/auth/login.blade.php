@extends('layouts.app')
@section('content')
    <div class="wrapper">
        @include('pages/header')
        <form method="post" action="{{ route("login_process") }}">
            @csrf

            <label for="">Вход</label>
            <input type="text" name="name" placeholder="Login" class="border-gray-800 @error('name') border-red-500 @enderror"><br>

            @error('name')
            <p class="text-red-500">{{ $message }}</p>
            @enderror
            <input type="password" name="password" placeholder="Password" class="@error('password') border-red-500 @enderror"><br>
            @error('password')
            <p class="text-red-500">{{ $message }}</p>
            @enderror
            <button type="submit">Войти</button>
            <p>
                У вас нет аккаунта? - <a href="{{route("register")}}">Зарегистрируйтесь!</a>
            </p>
        </form>
        @include('pages/footer')
    </div>
@endsection
