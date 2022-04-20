@extends('layouts.app')
@section('content')
    <div class="striped-container">
        <form action="{{ route("register_process") }}" method="post" class="reg_from">
            @csrf
            <h1>Set up your account</h1>
            <p class="striped__subtitle">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>

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
            <button type="submit">Continue</button>
            <div class="forget_pass">
                <p>
                    Already have an account ?  - <a href="{{route("login")}}" class="auth">Sign in!</a>
                </p>
            </div>
        </form>
    </div>
@endsection
