@extends('auth.layouts.app')
@section('regauth')
    <div class="wrapper">
        @include('pages.header')
        <h1 class="contactus__title">Contact us</h1>
        <div class="border"></div>
        <form action="{{ route("contact_form_process") }}" method="post" class="contactus_form">
            @csrf
            <input type="email" name="email" placeholder="Email" required><br>
            @error('email')
             <p>{{ $email }}</p>
            @enderror
            <input name="text" placeholder="Message"><br>
            @error('text')
            <p>{{ $message }}</p>
            @enderror
            <button type="submit">Send</button>
        </form>
        @include('pages.footer')
    </div>
@endsection
