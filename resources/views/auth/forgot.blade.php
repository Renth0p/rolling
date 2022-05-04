@extends('auth.layouts.app')
@section('regauth')
    <div class="wrapper">
        @include('pages/header')
        <form method="post" action="{{ route("forgot_process") }}" class="forgot__pass">
            @csrf

            <img src="https://cdn.templates.unlayer.com/assets/1593141680866-reset.png" alt="">

            <input type="email" name="email" placeholder="Email" class="@error('email') border-red-500 @enderror"><br>
            @error('email')
            <p class="text-red-500">{{ $message }}</p>
            @enderror
            <button type="submit">Restore password</button>
        </form>
        @include('pages/footer')
    </div>
@endsection
