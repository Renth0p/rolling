@extends('layouts.app')
@section('content')
    <div class="wrapper">
        @include('pages.header')
        <div class="service__page">
            <div class="service__page-main-text">
                <h1 class="service__page-title">About</h1>
                <p class="service__page-desc">The Project</p>
                <p class="service__page-text">It's a long estabilished fact that a reader</p>
                <a href="#">View Team</a>
            </div>
            <div class="service__block-img">
                <img src="https://i.pinimg.com/564x/87/07/51/870751c04a1c5c907104a0594bdfff58.jpg" class="card__image" alt="" />
                <img src="https://i.pinimg.com/564x/87/07/51/870751c04a1c5c907104a0594bdfff58.jpg" class="card__image" alt="" />
                <img src="https://i.pinimg.com/564x/87/07/51/870751c04a1c5c907104a0594bdfff58.jpg" class="card__image" alt="" />
            </div>
        </div>
        @include('pages.footer')
    </div>
@endsection
