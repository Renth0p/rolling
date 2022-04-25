@extends('layouts.app')
@section('content')
    <div class="wrapper">
        @include('pages.header')
        <div class="service__page">
            <div class="service__page-main-text">
                <p class="service__page-desc">The Project</p>
                <p class="service__page-text">It's a long estabilished fact that a reader</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
            <div class="service__block-img">
            </div>
        </div>
        @include('pages.footer')
    </div>
@endsection
