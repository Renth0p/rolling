@extends('auth.layouts.app')
@section('title', 'Login')
@section('regauth')
    <div class="striped-container">
        <form method="post" action="{{ route("login_process") }}" class="reg_from">
            @csrf
            <h1>Sign in</h1>
            <p class="striped__subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium adipisci aliquam animi assumenda beatae ea eius eveniet, expedita explicabo facere fugiat illo magnam, nihil numquam pariatur quibusdam reiciendis reprehenderit sapiente.</p>
            <input type="text" name="name" placeholder="Login" class="border-gray-800 @error('name') border-red-500 @enderror"><br>
            @error('name')
            <p class="text-red-500">{{ $message }}</p>
            @enderror
            <input type="password" name="password" placeholder="Password" class="@error('password') border-red-500 @enderror"><br>
            @error('password')
            <p class="text-red-500">{{ $message }}</p>
            @enderror
            <button type="submit">Continue</button>
            <div class="forget_pass">
                <p>
                    You don't have account in our system? - <a href="{{route("register")}}">Sign up!</a> | <a href="{{route("forgot")}}">Forgot password?
                </p>
            </div>
        </form>
    </div>
@endsection
