@extends('layouts.app')
@section('content')
    <div class="wrapper">
        @include('pages.header')
        <form action="{{ route("contact_form_process") }}" method="post">
            @csrf
            <label>Тех. поддержка</label>
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
