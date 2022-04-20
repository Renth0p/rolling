@extends('auth.layouts.app')
@section('regauth')
    <div class="striped-container">
        <form action="{{ route("register_process") }}" method="post" class="reg_from">
            @csrf
            <h1>Sign up</h1>
            <p class="striped__subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium adipisci aliquam animi assumenda beatae ea eius eveniet, expedita explicabo facere fugiat illo magnam, nihil numquam pariatur quibusdam reiciendis reprehenderit sapiente.</p>
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
            <button type="submit">Create account</button>
            <div class="forget_pass">
                <p>
                    You have already account? - <a href="{{route("login")}}">Sign in!</a>
                </p>
            </div>
        </form>
    </div>
@endsection
