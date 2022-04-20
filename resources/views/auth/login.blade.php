@extends('layouts.app')
@section('content')
    <div class="striped-container">
        <form method="post" action="{{ route("login_process") }}" class="reg_from">
            @csrf

            <h1>Login in your account</h1>
            <p class="striped__subtitle">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>

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
                    You don't have an account ?  - <a href="{{route("register")}}" class="auth">Sign up!</a>
                </p>
            </div>
        </form>
    </div>
@endsection
