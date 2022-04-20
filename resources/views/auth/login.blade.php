@extends('layouts.app')
@section('content')
    <div class="wrapper">
        @include('pages/header')
        <form>
            <label for="">Вход</label>
            <input type="text" name="login" placeholder="Login"><br>
            <input type="password" name="password" placeholder="Password"><br>
            <button type="submit">Войти</button>
            <p>
                У вас нет аккаунта? - <a href="{{route("register")}}">Зарегистрируйтесь!</a>
            </p>
        </form>
        @include('pages/footer')
    </div>
@endsection
