@extends('layouts.app')
@section('content')
    <div class="wrapper">
        @include('pages/header')
        <form method="post" action="{{ route("forgot_process") }}">
            @csrf

            <label for="">Restore password</label>

            <input type="email" name="email" placeholder="Email" class="@error('email') border-red-500 @enderror"><br>
            @error('email')
            <p class="text-red-500">{{ $message }}</p>
            @enderror
            <button type="submit">Restore password</button>

            <a href="{{route("forgot")}}">Забыли пароль?</a>

            <p>
                У вас нет аккаунта? - <a href="{{route("register")}}">Зарегистрируйтесь!</a>
            </p>
        </form>
        @include('pages/footer')
    </div>
@endsection
